<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    use HasFactory;
    public function students():BelongsToMany
    {
        return $this->belongsToMany(Student::class);
    }

    public function teachers():BelongsToMany
    {
        return $this->belongsToMany(Teacher::class);
    }
    public function schedules(): HasMany
    {
        return $this->hasMany(Schedule::class);
    }
}
