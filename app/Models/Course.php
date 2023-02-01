<?php

namespace App\Models;

class Course extends Install
{
    public function boot()
    {
        parent::boot();
        static::addGlobalScope('course', function (Builder $builder) {
            $builder->where('type', 'course');
        });

        static::creating(function ($course) {
            $course->forceFill([
                'type' => 'course',
            ]);
        });
    }
}
