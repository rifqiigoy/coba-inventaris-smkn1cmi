<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\kiba;
use App\kibb;
use App\kibc;
use App\kibd;
use App\kibe;

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
        $kiba = kiba::paginate(1);
        return view('inventaris.kiba.index', ['kiba' => $kiba]);
    }
    //==========================================================
    // DATA KIB-B
    //==========================================================
    public function indexb()
    {
        $kibb = kibb::paginate(50);
        return view('inventaris.kibb.index', ['kibb' => $kibb]);
    }
    //==========================================================
    // DATA KIB-C
    //==========================================================
    public function indexc()
    {
        $kibc = kibc::paginate(50);
        return view('inventaris.kibc.index', ['kibc' => $kibc]);
    }
    //==========================================================
    // DATA KIB-C
    //==========================================================
    public function indexd()
    {
        $kibd = kibd::paginate(50);
        return view('inventaris.kibd.index', ['kibd' => $kibd]);
    }
    //==========================================================
    // DATA KIB-C
    //==========================================================
    public function indexe()
    {
        $kibe = kibe::paginate(50);
        return view('inventaris.kibe.index', ['kibe' => $kibe]);
    }

//===========================================================================================================================================================
//===========================================================================================================================================================
//===========================================================================================================================================================


//========================================================================
//MENAMBAH DATA KE DATABASE ==============================================
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
//========================================================================
//CREATE KIB C
//========================================================================
    public function createc()
    {
        return view('inventaris.kibc.create');
    }
//========================================================================
//CREATE KIB D
//========================================================================
    public function created()
    {
        return view('inventaris.kibd.create');
    }
//========================================================================
//CREATE KIB D
//========================================================================
    public function createe()
    {
        return view('inventaris.kibe.create');
    }

//===========================================================================================================================================================
//===========================================================================================================================================================
//===========================================================================================================================================================


//========================================================================
//STORE DATA KE DATABASE =================================================
//========================================================================
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//========================================================================
//STORE DATA KIB B
//========================================================================

    public function storeb(Request $request)
    {
        kibb::create([
        'nama' => $request->nama,
        'kode' => $request->kode,
        'register' => $request->registrasi,
        'lokasi' => $request->lokasi,
        'merk' => $request->merk,
        'tahun' => $request->pengadaan,
        'jumlah' => $request->jumlah,
        'harga' => $request->harga,
        'nilai' => $request->nilai,
        'akumulasi' => $request->akumulasi,
        'keterangan' => $request->keterangan,
        ]);

        return redirect('/inventaris/kibb');
    }
//========================================================================
//STORE DATA KIB C
//========================================================================

    public function storec(Request $request)
    {
        kibc::create([
        'kode' => $request->kode,
        'nama' => $request->nama,
        'alamat' => $request->alamat,
        'luas' => $request->luas,
        'bulan' => $request->bulan,
        'tahun' => $request->tahun,
        'asal' => $request->asal,
        'umur' => $request->umur,
        'opd' => $request->opd,
        'sub_opd' => $request->sub_opd,
        'kota' => $request->kota,
        'keterangan' => $request->keterangan,
        ]);

        return redirect('/inventaris/kibc');
    }
//========================================================================
//STORE DATA KIB D
//========================================================================

    public function stored(Request $request)
    {
        kibd::create([
        'kode' => $request->kode,
        'nama' => $request->nama,
        'alamat' => $request->alamat,
        'luas' => $request->luas,
        'bulan' => $request->bulan,
        'tahun' => $request->tahun,
        'nilai' => $request->nilai,
        'umur' => $request->umur,
        'opd' => $request->opd,
        'sub_opd' => $request->sub_opd,
        'kota' => $request->kota,
        'keterangan' => $request->keterangan,
        ]);

        return redirect('/inventaris/kibd');
    }
//========================================================================
//STORE DATA KIB B
//========================================================================

    public function storee(Request $request)
    {
        kibe::create([
        'nama' => $request->nama,
        'kode' => $request->kode,
        'register' => $request->registrasi,
        'lokasi' => $request->lokasi,
        'merk' => $request->merk,
        'tahun' => $request->pengadaan,
        'jumlah' => $request->jumlah,
        'harga' => $request->harga,
        'nilai' => $request->nilai,
        'akumulasi' => $request->akumulasi,
        'keterangan' => $request->keterangan,
        ]);

        return redirect('/inventaris/kibe');
    }

//===========================================================================================================================================================
//===========================================================================================================================================================
//===========================================================================================================================================================



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
