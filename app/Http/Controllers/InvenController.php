<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\kiba;
use App\kibb;

//========================================================================
//CONTROLER INVENTARIS
//========================================================================
//Untuk mengambil data table di database
//======================================
class InvenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //==========================================================
    // DATA KIB-A
    //==========================================================
    public function index()
    {
        $kiba = kiba::all();
        return view('inventaris.kiba.index', ['kiba' => $kiba]);
    }
    //==========================================================
    // DATA KIB-B
    //==========================================================
    public function indexb()
    {
        $kibb = kibb::all();
        return view('inventaris.kibb.index', ['kibb' => $kibb]);
    }

//========================================================================
//========================================================================
//========================================================================

//========================================================================
//MENAMBAH DATA KE DATABASE
//========================================================================

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

//========================================================================
//CREATE KIB A
//========================================================================
    public function create()
    {
        return view('inventaris.kiba.create');
    }

//========================================================================
//CREATE KIB B
//========================================================================
    public function createb()
    {
        return view('inventaris.kibb.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeb(Request $request)
    {
        //$kibb = new kibb;
        //$kibb->nama_barang = $request->nama
        //$kibb->kode_brg = $request->kode
        //$kibb->register = $request->registrasi
        //$kibb->lokasi = $request->lokasi
        //$kibb->namamerk = $request->merk
        //$kibb->thn_pengadaan = $request->pengadaan
        //$kibb->jumlah_brg = $request->jumlah
        //$kibb->harga = $request->harga
        //$kibb->nilai_tercatat = $request->nilai
        //$kibb->akumulasi = $request->akumulasi
        //$kibb->keterangan = $request->keterangan

        //$kibb->save();
        //return redirect('/inventaris/kibb');
        kibb::create([
        'nama_barang' => $request->nama,
        'kode_brg' => $request->kode,
        'register' => $request->registrasi,
        'lokasi' => $request->lokasi,
        'merk' => $request->merk,
        'thn_pengadaan' => $request->pengadaan,
        'jumlah_brg' => $request->jumlah,
        'harga' => $request->harga,
        'nilai_tercatat' => $request->nilai,
        'akumulasi' => $request->akumulasi,
        'keterangan' => $request->keterangan,
        ]);

        return redirect('/inventaris/kibb');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
