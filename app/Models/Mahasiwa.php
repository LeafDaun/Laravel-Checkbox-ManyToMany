<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Mahasiwa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function jurusan() : BelongsTo
    {
        return $this->belongsTo(Jurusan::class);
    }

    public function matakuliah() : BelongsToMany
    {
        return $this->belongsToMany(Matakuliah::class, 'pivots', 'mahasiswa_id','matakuliah_id');
    }
}
