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
      <a href="/inventaris/kiba" class="btn btn-primary" role="button">KIB A</a>
      <a href="/inventaris/kibb" class="btn btn-outline-primary" role="button">KIB B</a>
      <a href="#" class="btn btn-outline-primary" role="button">KIB C</a>
      <a href="#" class="btn btn-outline-primary" role="button">KIB D</a>
      <a href="#" class="btn btn-outline-primary" role="button">KIB E</a>
      <a href="#" class="btn btn-outline-primary" role="button">KIB F</a>
    </div>
    <div class="container-fluid mb-2">
      <a href="/inventaris/kiba/create" class="btn btn-primary" role="button">TAMBAH DATA KIB A</a>
    </div>
				<table class="table shadow table-hover table-bordered table-striped">
  					<thead class="thead-dark">
    					<tr>
      						<th scope="col"><center>No</center></th>
      						<th scope="col"><center>Nama Barang</center></th>
      						<th scope="col"><center>Alamat</center></th>
      						<th scope="col"><center>Luas</center></th>
      						<th scope="col"><center>Tahun Pengadaan</center></th>
      						<th scope="col"><center>Nilai Perolehan</center></th>
      						<th scope="col"><center>Nama OPD</center></th>
      						<th scope="col"><center>Nama sub - OPD</center></th>
      						<th scope="col"><center>Nama sub - OPD capslock</center></th>
      						<th scope="col"><center>Kab/Kota</center></th>
      						<th scope="col"><center>Asal Perolehan</center></th>
      						<th scope="col"><center>Keterangan</center></th>
      						<th scope="col"><center>Kode Barang</center></th>
      						<th scope="col"><center>Jenis Barang</center></th>
    					</tr>
  					</thead>
  					<tbody>
              @foreach( $kiba as $inv_a )
    					<tr>
      						<th scope="row">{{ $loop->iteration }}</th>
      						<td>{{ $inv_a->nama_brg }}</td>
      						<td>{{ $inv_a->alamat }}</td>
      						<td>{{ $inv_a->luas }}</td>
      						<td>{{ $inv_a->thn_pengadaan }}</td>
      						<td>{{ $inv_a->nilai_perolehan }}</td>
      						<td>{{ $inv_a->nama_opd }}</td>
      						<td>{{ $inv_a->nama_sub_opd }}</td>
      						<td>{{ $inv_a->nama_sub_opd_caps }}</td>
      						<td>{{ $inv_a->kab_kota }}</td>
      						<td>{{ $inv_a->asal_perolehan }}</td>
      						<td>{{ $inv_a->keterangan }}</td>
      						<td>{{ $inv_a->kode_brg }}</td>
      						<td>{{ $inv_a->jenis_barang }}</td>
    					</tr>
              @endforeach
  					</tbody>
				</table>
	</div>
@endsection