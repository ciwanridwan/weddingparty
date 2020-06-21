<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $table = 'tokos';
    protected $primaryKey = 'id'; 
    protected $fillable = [
        'nama_toko', 'lokasi', 'jumlah_paket', 'logo_toko', 'deskripsi', 'status'
    ];
}
