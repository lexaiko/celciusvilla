<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanans';
    protected $primaryKey = 'id_pemesanan';
    protected $fillable = [
        'id_user', 'id_kamar', 'nama_pemesan', 'no_hp',
        'tanggal_check_in', 'tanggal_check_out',
        'jumlah_hari', 'total_harga', 'status_pemesanan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kamar');
    }
}
