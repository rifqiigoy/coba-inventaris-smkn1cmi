<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kibe extends Model
{
    protected $table = 'kibe';
    protected $fillable = ['nama', 'kode', 'register', 'lokasi', 'merk', 'tahun', 'jumlah', 'harga', 'nilai', 'akumulasi', 'keterangan'];
}
