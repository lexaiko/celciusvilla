<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarKamar extends Model
{
    use HasFactory;

    protected $table = 'gambar_kamars';
    protected $primaryKey = 'id_gambar';
    protected $fillable = ['id_kamar', 'nama_file', 'urutan'];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kamar');
    }
}
