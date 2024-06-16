<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiwa::class, 'pivots','matakuliah_id','mahasiswa_id');
    }
}
