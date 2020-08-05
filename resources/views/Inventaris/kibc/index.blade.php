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
      <a href="/inventaris/kibb" class="btn btn-outline-primary" role="button">KIB B</a>
      <a href="/inventaris/kibc" class="btn btn-outline-primary active" role="button">KIB C</a>
      <a href="/inventaris/kibd" class="btn btn-outline-primary" role="button">KIB D</a>
      <a href="/inventaris/kibe" class="btn btn-outline-primary" role="button">KIB E</a>
      <a href="/inventaris/kibf" class="btn btn-outline-primary" role="button">KIB F</a>
    </div>
      <div class="container-fluid border rounded py-3">
        <h3 class="text-center">KIB C<br/>Gedung dan Bangunan</h3>

        <div class="mb-3">
            <a href="/inventaris/kibc/create" class="btn btn-primary" role="button">TAMBAH DATA KIB C</a>
        </div>
				<table class="table shadow table-hover table-bordered table-striped" style="font-size: 90%">
  					<thead class="thead-dark bg-dark" style="color: white">
    					<tr>
      						<th scope="col"><center>No</center></th>
      						<th scope="col"><center>Kode Barang</center></th>
      						<th scope="col"><center>Nama Barang</center></th>
      						<th scope="col"><center>Alamat</center></th>
      						<th scope="col"><center>Luas</center></th>
      						<th scope="col"><center>Bulan Pengadaan</center></th>
      						<th scope="col"><center>Tahun Pengadaan</center></th>
      						<th scope="col"><center>Asal / Dokumen</center></th>
      						<th scope="col"><center>Umur Ekonomis</center></th>
      						<th scope="col"><center>Nama OPD</center></th>
      						<th scope="col"><center>Nama Sub-OPD</center></th>
      						<th scope="col"><center>Kab/Kota</center></th>
                  <th scope="col"><center>Keterangan</center></th>
    					</tr>
  					</thead>
  					<tbody>
              @foreach( $kibc as $inv_c )
    					<tr>
      						<th scope="row" class="text-center">{{ $inv_c->id }}<!--{{ $loop->iteration }}--></th>
      						<td>{{ $inv_c->kode }}</td>
      						<td>{{ $inv_c->nama }}</td>
      						<td>{{ $inv_c->alamat }}</td>
      						<td>{{ $inv_c->luas }}</td>
      						<td>{{ $inv_c->bulan }}</td>
      						<td>{{ $inv_c->tahun }}</td>
      						<td>{{ $inv_c->asal }}</td>
      						<td>{{ $inv_c->umur }}</td>
      						<td>{{ $inv_c->opd }}</td>
      						<td>{{ $inv_c->sub_opd }}</td>
      						<td>{{ $inv_c->kota }}</td>
                  <td>{{ $inv_c->keterangan }}</td>
    					</tr>
              @endforeach
  					</tbody>
				</table>
        <div>
          Halaman : {{ $kibc->currentPage() }} <br/>
          Jumlah Data : {{ $kibc->total() }} <br/>
          Data Per Halaman : {{ $kibc->perPage() }} <br/>
          <br/>
          {{ $kibc->links() }}
        </div>
      </div>
	</div>
@endsection