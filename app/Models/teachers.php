<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Courses;

class teachers extends Model
{
    use HasFactory;

    public function courses() {
        return $this->belongsToMany(
            Courses::class,
            'course_teacher',
            'teacher_id',
            'course_id'
        );
    }
}