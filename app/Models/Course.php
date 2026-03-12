<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory; // <- Aquí agregamos el trait para que funcione el seeder

    public function kit() {
        return $this->belongsTo(Kit::class, 'id_kit');
    }
}