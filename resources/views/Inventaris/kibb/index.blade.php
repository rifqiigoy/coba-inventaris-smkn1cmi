@extends('layout/layout')

@section('title', 'Inventaris SMKN 1 Cimahi')

@section('container')
	<div class="container pt-2">
		<div class="row">
			<div class="col">
				<h1 align="center">WEB INVENTARIS SMKN 1 CIMAHI</h1>
				<h2 align="center">Tabel Inventaris</h2>

			</div>
		</div>
	</div>
	<div class="container-fluid mt-2 pt-3">
    <div class="btn-group mb-2">
      <a href="/inventaris/kiba" class="btn btn-outline-primary" role="button">KIB A</a>
      <a href="/inventaris/kibb" class="btn btn-primary" role="button">KIB B</a>
      <a href="#" class="btn btn-outline-primary" role="button">KIB C</a>
      <a href="#" class="btn btn-outline-primary" role="button">KIB D</a>
      <a href="#" class="btn btn-outline-primary" role="button">KIB E</a>
      <a href="#" class="btn btn-outline-primary" role="button">KIB F</a>
    </div>
    <div class="container-fluid mb-2">
      <a href="/inventaris/kibb/create" class="btn btn-primary" role="button">TAMBAH DATA KIB B</a>
    </div>
				<table class="table shadow table-hover table-bordered table-striped">
  					<thead class="thead-dark">
    					<tr>
      						<th scope="col"><center>No</center></th>
      						<th scope="col"><center>Jenis Barang/ Nama Barang</center></th>
      						<th scope="col"><center>Kode Barang</center></th>
      						<th scope="col"><center>Register</center></th>
      						<th scope="col"><center>Lokasi</center></th>
      						<th scope="col"><center>Merk/ Type</center></th>
      						<th scope="col"><center>Tahun Pengadaan</center></th>
      						<th scope="col"><center>Jumlah Barang</center></th>
      						<th scope="col"><center>Harga Satuan (Rp)</center></th>
      						<th scope="col"><center>Nilai Tercatat (Rp)</center></th>
      						<th scope="col"><center>Akumulasi Penyusutan (Rp)</center></th>
      						<th scope="col"><center>Keterangan</center></th>
    					</tr>
  					</thead>
  					<tbody>
              @foreach( $kibb as $inv_b )
    					<tr>
      						<th scope="row">{{ $loop->iteration }}</th>
      						<td>{{ $inv_b->nama_barang }}</td>
      						<td>{{ $inv_b->kode_brg }}</td>
      						<td>{{ $inv_b->register }}</td>
      						<td>{{ $inv_b->lokasi }}</td>
      						<td>{{ $inv_b->merk }}</td>
      						<td>{{ $inv_b->thn_pengadaan }}</td>
      						<td>{{ $inv_b->jumlah_brg }}</td>
      						<td>{{ $inv_b->harga }}</td>
      						<td>{{ $inv_b->nilai_tercatat }}</td>
      						<td>{{ $inv_b->akumulasi }}</td>
      						<td>{{ $inv_b->keterangan }}</td>
    					</tr>
              @endforeach
  					</tbody>
				</table>
	</div>
@endsection