<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi saat proses CRUD
    protected $fillable = [
        'merek_id', 
        'nama_mobil', 
        'harga', 
        'deskripsi', 
        'foto', 
        'status'
    ];

    // Relasi: Setiap Mobil pasti punya satu Merek (Belongs-To)
    public function merek()
    {
        return $this->belongsTo(Merek::class);
    }
}
