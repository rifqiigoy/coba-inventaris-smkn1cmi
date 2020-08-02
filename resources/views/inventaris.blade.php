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
    					<tr>
      						<th scope="row">1</th>
      						<td>Mark</td>
      						<td>Mark</td>
      						<td>Mark</td>
      						<td>Mark</td>
      						<td>Mark</td>
      						<td>Mark</td>
      						<td>Mark</td>
      						<td>Mark</td>
      						<td>Mark</td>
      						<td>Mark</td>
      						<td>Mark</td>
      						<td>Mark</td>
      						<td>Mark</td>
    					</tr>
  					</tbody>
				</table>
	</div>
@endsection