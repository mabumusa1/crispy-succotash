<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;

class Install extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the install.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope a query to only learn installs.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLearn($query)
    {
        return $query->where('type', 'learn');
    }

    /**
     * Scope a query to only demo installs.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeDemo($query)
    {
        return $query->where('type', '=', 'demo');
    }

    /**
     * Days Until expire
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function daysUntilExpire(): Attribute
    {
        $now = Carbon::now();

        if($this->type == 'demo') {
            $expire = $this->created_at->addDays(14);
        }elseif($this->type == "learn"){
            $expire = $this->created_at->addDays(7);
        }

        return Attribute::make(
            get: fn ($value) => $now->diffInDays($expire),
        );

    }

    /**
     * Days Until expire
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function daysUntilExpireRatio(): Attribute
    {
        $now = Carbon::now();

        if($this->type == 'demo') {
            $expire = $this->created_at->addDays(14);
            $expire = $now->diffInDays($expire)/14;
        }elseif($this->type == "learn"){
            $expire = Carbon::parse($this->created_at)->addDays(7);
            $expire = $now->diffInDays($expire)/7;
        }

        return Attribute::make(
            get: fn ($value) => (int)($expire * 100),
        );

    }


}
