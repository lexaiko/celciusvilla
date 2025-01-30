<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    use HasFactory;

    protected $table = 'diskons';
    protected $primaryKey = 'id_diskon';
    protected $fillable = ['kode_diskon', 'nilai_diskon', 'tanggal_mulai', 'tanggal_akhir', 'status'];
}
