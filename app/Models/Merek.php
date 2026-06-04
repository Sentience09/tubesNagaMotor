<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi
    protected $fillable = ['nama_merek'];

    // Relasi: Satu Merek punya banyak Mobil (One-to-Many)
    public function mobil()
    {
        return $this->hasMany(Mobil::class);
    }
}
