<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $table = 'kamars';
    protected $primaryKey = 'id_kamar';
    protected $fillable = ['nama_kamar', 'deskripsi', 'fasilitas', 'harga', 'kapasitas', 'status'];

    public function gambarKamars()
    {
        return $this->hasMany(GambarKamar::class, 'id_kamar');
    }

    public function pemesanans()
    {
        return $this->hasMany(Pemesanan::class, 'id_kamar');
    }

    public function ulasans()
    {
        return $this->hasMany(Ulasan::class, 'id_kamar');
    }
}
