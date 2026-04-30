<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\teachers;
use App\Models\courses; 

class course_teacher extends Model
{
    use HasFactory;

    public function teachers() {
        return $this->belongsToMany('App\Models\teachers');
    }

    public function courses() {
        return $this->belongsToMany('App\Models\courses');
    }
}
