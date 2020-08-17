@extends('layout/layout')

@section('title', 'Inventaris SMKN 1 Cimahi')

@section('container')
	<div class="container-fluid mt-2 pt-3">
      <h1 align="center">FORM TAMBAH DATA KIB B</h1><br><br>
      <form method="post" action="/inventaris/kibb">
        @csrf
        <div class="container border rounded w-50">
          <div class="form-group w-75 mx-auto mt-3">
            <label for="nama">Nama Barang :</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukan Nama Barang" name="nama">
          </div>
          <div class="form-group w-75 mx-auto">
            <label for="kode">Kode Barang Barang :</label>
            <input type="text" class="form-control" id="kode" placeholder="Masukan Kode Barang" name="kode">
          </div>
          <div class="form-group w-75 mx-auto">
            <label for="registrasi">Nomor Registrasi Barang :</label>
            <input type="text" class="form-control" id="registrasi" placeholder="Masukan Nomor Registrasi" name="registrasi">
          </div>
          <div class="form-group w-75 mx-auto">
            <label for="lokasi">Lokasi Barang :</label>
            <input type="text" class="form-control" id="lokasi" placeholder="Masukan Lokasi Barang" name="lokasi">
          </div>
          <div class="form-group w-75 mx-auto">
            <label for="merk">Merek / Type Barang :</label>
            <input type="text" class="form-control" id="merk" placeholder="Masukan Merek / Type Barang" name="merk">
          </div>
          <div class="form-group w-75 mx-auto">
            <label for="pengadaan">Tahun Pengadaan Barang :</label>
            <input type="text" class="form-control" id="pengadaan" placeholder="Masukan Tahun Pengadaan Barang" name="pengadaan">
          </div>
          <div class="form-group w-75 mx-auto">
            <label for="jumlah">Jumlah Barang :</label>
            <input type="text" class="form-control" id="jumlah" placeholder="Masukan Jumlah Barang" name="jumlah">
          </div>
          <div class="form-group w-75 mx-auto">
            <label for="harga">Harga Satuan Barang :</label>
            <input type="text" class="form-control" id="harga" placeholder="Masukan Harga Satuan Barang" name="harga">
          </div>
          <div class="form-group w-75 mx-auto">
            <label for="nilai">Nilai Tercatat Barang :</label>
            <input type="text" class="form-control" id="nilai" placeholder="Masukan Nilai Tercatat Barang" name="nilai">
          </div>
          <div class="form-group w-75 mx-auto">
            <label for="akumulasi">Akumulasi Penyusutan Barang :</label>
            <input type="text" class="form-control" id="akumulasi" placeholder="Masukan Akumulasi Penyusutan Barang" name="akumulasi">
          </div>
          <div class="form-group w-75 mx-auto">
            <label for="keterangan">Keterangan Barang :</label>
            <input type="text" class="form-control" id="keterangan" placeholder="Masukan Keterangan Barang" name="keterangan">
          </div>
          <div class="form-group w-75 mx-auto">
            <button type="submit" class="btn btn-primary">Tambah Data</button>
          </div>
        </div>
      </form>
	</div>
@endsection
