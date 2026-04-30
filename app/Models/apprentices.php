<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Courses;
use App\Models\Computers;

class apprentices extends Model
{
    use HasFactory;

    public function course() {
    return $this->belongsTo(Courses::class);
}

public function computer() {
    return $this->belongsTo(Computers::class);
}
}
