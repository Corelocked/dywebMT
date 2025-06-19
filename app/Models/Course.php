<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    public function teachers(): HasMany
    {
        return $this->hasMany(Teacher::class);
    }
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
    public function schedules(): HasMany
    {
        return $this->hasMany(Schedule::class);
    }
}
