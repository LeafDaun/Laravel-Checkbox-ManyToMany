<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jurusan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function mahasiswa() : HasMany
    {
        return $this->hasMany(Mahasiwa::class);
    }
}
