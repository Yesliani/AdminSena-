<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;
public function area() {
    return $this->belongsTo(Areas::class);
}

public function trainingCenter() {
    return $this->belongsTo(Training_centers::class);
}


public function apprentices() {
    return $this->hasMany(Apprentices::class);
}

public function teachers() {
    return $this->belongsToMany(
        Teachers::class,
        'course_teacher',
        'course_id',
        'teacher_id'
    );
}
}
