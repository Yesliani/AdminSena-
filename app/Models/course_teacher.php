<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course_teacher extends Model
{
    use HasFactory;

    public function teachers() {
        return $this->hasMany('App\Models\teachers');
    }

    public function courses() {
        return $this->hasMany('App\Models\courses');
    }
}
