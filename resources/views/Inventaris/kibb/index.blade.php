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
		<a href="/inventaris/kibb" class="btn btn-outline-primary active" role="button">KIB B</a>
		<a href="/inventaris/kibc" class="btn btn-outline-primary" role="button">KIB C</a>
		<a href="/inventaris/kibd" class="btn btn-outline-primary" role="button">KIB D</a>
		<a href="/inventaris/kibe" class="btn btn-outline-primary" role="button">KIB E</a>
		<a href="/inventaris/kibf" class="btn btn-outline-primary" role="button">KIB F</a>
    </div>
    {{-- <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
          Jenis KIB
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/inventaris/kiba">KIB A</a>
          <a class="dropdown-item" href="/inventaris/kibb">KIB B</a>
          <a class="dropdown-item" href="/inventaris/kibc">KIB C</a>
          <a class="dropdown-item" href="/inventaris/kibd">KIB D</a>
          <a class="dropdown-item" href="/inventaris/kibe">KIB E</a>
          <a class="dropdown-item" href="/inventaris/kibf">KIB F</a>
        </div>
    </div> --}}
	<div class="container-fluid border rounded py-3">
		<h3 class="text-center">KIB B<br />Peralatan dan Mesin</h3>
		<div class="mb-3">
			<a href="/inventaris/kibb/create" class="btn btn-primary" role="button">TAMBAH DATA KIB B</a>
		</div>
		<table class="table shadow table-hover table-bordered table-striped" style="font-size: 90%">
			<thead class="thead-dark bg-dark" style="color: white">
				<tr>
					<th scope="col">
						<center>No</center>
					</th>
					<th scope="col">
						<center>Jenis Barang/ Nama Barang</center>
					</th>
					<th scope="col">
						<center>Kode Barang</center>
					</th>
					<th scope="col">
						<center>Register</center>
					</th>
					<th scope="col">
						<center>Lokasi</center>
					</th>
					<th scope="col">
						<center>Merk/ Type</center>
					</th>
					<th scope="col">
						<center>Tahun Pengadaan</center>
					</th>
					<th scope="col">
						<center>Jumlah Barang</center>
					</th>
					<th scope="col">
						<center>Harga Satuan (Rp)</center>
					</th>
					<th scope="col">
						<center>Nilai Tercatat (Rp)</center>
					</th>
					<th scope="col">
						<center>Akumulasi Penyusutan (Rp)</center>
					</th>
					<th scope="col">
						<center>Keterangan</center>
					</th>
				</tr>
			</thead>
			<tbody>
				@foreach( $kibb as $inv_b )
				<tr>
					<th scope="row" class="text-center">{{ $inv_b->id }}
						<!--{{ $loop->iteration }}-->
					</th>
					<td>{{ $inv_b->nama }}</td>
					<td>{{ $inv_b->kode }}</td>
					<td>{{ $inv_b->register }}</td>
					<td class="text-nowrap">{{ $inv_b->lokasi }}</td>
					<td>{{ $inv_b->merk }}</td>
					<td>{{ $inv_b->tahun }}</td>
					<td>{{ $inv_b->jumlah }}</td>
					<td>Rp. {{ $inv_b->harga }}</td>
					<td>Rp. {{ $inv_b->nilai }}</td>
					<td>Rp. {{ $inv_b->akumulasi }}</td>
					<td>{{ $inv_b->keterangan }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div>
			Halaman : {{ $kibb->currentPage() }} <br />
			Jumlah Data : {{ $kibb->total() }} <br />
			Data Per Halaman : {{ $kibb->perPage() }} <br />
			<br />
			{{ $kibb->links() }}
		</div>
	</div>
</div>
@endsection
