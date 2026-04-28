<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class training_centers extends Model
{
    use HasFactory;

  public function teachers() {
    return $this->hasMany(Teachers::class);
}

public function courses() {
    return $this->hasMany(Courses::class);
}
}
