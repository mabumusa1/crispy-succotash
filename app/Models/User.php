<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Illuminate\Contracts\Auth\MustVerifyEmail;


class User extends Authenticatable implements FilamentUser, HasName,MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * All the users who signed up can access the dashboard
     *
     * @return  bool
     */
    public function canAccessFilament(): bool
    {
        return true;
    }

    /**
     * We are asking for first and last name, this return them as concat
     *
     * @return  string
     */
    public function getFilamentName(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }

    /**
     * Get the Prods for the user.
     */
    public function Prods()
    {
        return $this->hasMany(App\Models\Prod::class);
    }

    /**
     * Get the Devs for the user.
     */
    public function Devs()
    {
        return $this->hasMany(App\Models\Dev::class);
    }

    /**
     * Get the Demos for the user.
     */
    public function Demos()
    {
        return $this->hasMany(App\Models\Demo::class);
    }


    /**
     * Get the Course for the user.
     */
    public function Course()
    {
        return $this->hasOne(App\Models\Dev::class);
    }
}
