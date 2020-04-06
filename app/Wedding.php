<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    protected $table = 'weddings';
    protected $primaryKey = 'id'; 
    protected $fillable = [
        'nama_lengkap', 'alamat_rumah', 'tanggal_resepsi', 'jumlah_undangan', 'tempat_acara', 'kendala'
    ];
}
