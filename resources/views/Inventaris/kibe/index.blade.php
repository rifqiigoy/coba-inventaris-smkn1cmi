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
      <a href="/inventaris/kibc" class="btn btn-outline-primary" role="button">KIB C</a>
      <a href="/inventaris/kibd" class="btn btn-outline-primary" role="button">KIB D</a>
      <a href="/inventaris/kibe" class="btn btn-outline-primary active" role="button">KIB E</a>
      <a href="/inventaris/kibf" class="btn btn-outline-primary" role="button">KIB F</a>
    </div>
      <div class="container-fluid border rounded py-3">
        <h3 class="text-center">KIB E<br/>Aset Tetap Lainya</h3>
        <div class="mb-3">
            <a href="/inventaris/kibe/create" class="btn btn-primary" role="button">TAMBAH DATA KIB E</a>
        </div>
				<table class="table shadow table-hover table-bordered table-striped" style="font-size: 90%">
  					<thead class="thead-dark bg-dark" style="color: white">
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
              @foreach( $kibe as $inv_e )
    					<tr>
      						<th scope="row" class="text-center">{{ $inv_e->id }}<!--{{ $loop->iteration }}--></th>
      						<td>{{ $inv_e->nama }}</td>
      						<td>{{ $inv_e->kode }}</td>
      						<td>{{ $inv_e->register }}</td>
      						<td class="text-nowrap">{{ $inv_e->lokasi }}</td>
      						<td>{{ $inv_e->merk }}</td>
      						<td>{{ $inv_e->tahun }}</td>
      						<td>{{ $inv_e->jumlah }}</td>
      						<td>Rp. {{ $inv_e->harga }}</td>
      						<td>Rp. {{ $inv_e->nilai }}</td>
      						<td>Rp. {{ $inv_e->akumulasi }}</td>
      						<td>{{ $inv_e->keterangan }}</td>
    					</tr>
              @endforeach
  					</tbody>
				</table>
        <div>
          Halaman : {{ $kibe->currentPage() }} <br/>
          Jumlah Data : {{ $kibe->total() }} <br/>
          Data Per Halaman : {{ $kibe->perPage() }} <br/>
          <br/>
          {{ $kibe->links() }}
        </div>
      </div>
	</div>
@endsection