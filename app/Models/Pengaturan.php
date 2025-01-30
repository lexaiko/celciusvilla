<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    use HasFactory;

    protected $table = 'pengaturans';
    protected $primaryKey = 'id_pengaturan';
    protected $fillable = ['nama_hotel', 'alamat_hotel', 'jam_check_in', 'jam_check_out'];
}
