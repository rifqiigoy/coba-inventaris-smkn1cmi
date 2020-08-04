<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kibb extends Model
{
    //
    protected $table = 'kibb';
    protected $fillable = ['nama', 'kode', 'register', 'lokasi', 'merk', 'tahun', 'jumlah', 'harga', 'nilai', 'akumulasi', 'keterangan'];
}
