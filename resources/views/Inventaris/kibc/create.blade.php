@extends('layout/layout')

@section('title', 'Inventaris SMKN 1 Cimahi')

@section('container')
	<div class="container-fluid mt-2 pt-3">
      <h1 align="center">FORM TAMBAH DATA KIB C</h1><br><br>
      <form method="post" action="/inventaris/kibc">
        @csrf
        <div class="container border rounded w-50">
          <div class="form-group w-75 mx-auto">
            <label for="kode">Kode Barang Barang :</label>
            <input type="text" class="form-control" id="kode" placeholder="Masukan Kode Barang" name="kode">
          </div>
          <div class="form-group w-75 mx-auto mt-3">
            <label for="nama">Nama Barang :</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Barang" name="nama">
          </div>          
          <div class="form-group w-75 mx-auto">
            <label for="alamat">Alamat Barang :</label>
            <input type="text" class="form-control" id="alamat" placeholder="Alamat Barang" name="alamat">
          </div>
          <div class="form-group w-75 mx-auto">
            <label for="luas">Luas Barang :</label>
            <input type="text" class="form-control" id="luas" placeholder="Masukan Luas Barang" name="luas">
          </div>
          <div class="form-group w-75 mx-auto">
            <label for="bulan">Bulan Pengadaan Barang :</label>
            <input type="text" class="form-control" id="bulan" placeholder="Bulan Pengadaan Barang" name="bulan">
          </div>
          <div class="form-group w-75 mx-auto">
            <label for="tahun">Tahun Pengadaan Barang :</label>
            <input type="text" class="form-control" id="tahun" placeholder="Masukan Tahun Pengadaan Barang" name="tahun">
          </div>
          <div class="form-group w-75 mx-auto">
            <label for="asal">Asal Dokumen :</label>
            <input type="text" class="form-control" id="asal" placeholder="Masukan Asal Dokumen" name="asal">
          </div>
          <div class="form-group w-75 mx-auto">
            <label for="umur">Umur Ekonomis Barang :</label>
            <input type="text" class="form-control" id="umur" placeholder="Masukan Umur Ekonomis Barang" name="umur">
          </div>
          <div class="form-group w-75 mx-auto">
            <label for="opd">Nama OPD :</label>
            <input type="text" class="form-control" id="opd" placeholder="Masukan Nama OPD" name="opd">
          </div>
          <div class="form-group w-75 mx-auto">
            <label for="sub_opd">Nama sub-POD :</label>
            <input type="text" class="form-control" id="sub_opd" placeholder="Masukan Nama sub-OPD" name="sub_opd">
          </div>
          <div class="form-group w-75 mx-auto">
            <label for="kota">Kab/Kota :</label>
            <input type="text" class="form-control" id="kota" placeholder="Masukan Kab/Kota Barang" name="kota">
          </div>
          <div class="form-group w-75 mx-auto">
            <button type="submit" class="btn btn-primary">Tambah Data</button>
          </div>
        </div>
      </form>
	</div>
@endsection