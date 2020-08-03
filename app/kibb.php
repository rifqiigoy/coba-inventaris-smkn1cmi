<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kibb extends Model
{
    //
    protected $table = 'kibb';
    protected $fillable = ['nama_barang', 'kode_brg', 'register', 'lokasi', 'merk', 'thn_pengadaan', 'jumlah_brg', 'harga', 'nilai_tercatat', 'akumulasi', 'keterangan'];
}
