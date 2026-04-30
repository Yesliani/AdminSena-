<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Apprentices;

class computers extends Model
{
    use HasFactory;

    public function apprentices() {
    return $this->hasMany(Apprentices::class);
} 
}
