<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    public function lecturer(){
        return $this->hasOne(Lecturer::class);
    }
    public function mahasiswa(){
        return $this->hasMany(Mahasiswa::class);
    }
}
