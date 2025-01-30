<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    protected $table = 'platfroms';
    protected $primaryKey = 'id_platform';
    protected $fillable = ['nama_platform', 'platfrom', 'gambar'];
}

