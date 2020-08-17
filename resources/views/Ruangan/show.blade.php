@extends('layout/layout')

@section('title', 'Inventaris SMKN 1 Cimahi')

@section('container')
<div class="container pt-2">
	<div class="row">
		<div class="col">
			<h1 align="center">WEB INVENTARIS SMKN 1 CIMAHI</h1>
			<h2 align="center">Ruangan</h2>
		</div>
	</div>
</div>
<div class="container-fluid border rounded py-3">
    <h3 class="text-center">{{ $ruangan->kibb_lokasi }}<br/>{{ $ruangan->nama_lokasi }}</h3>
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
                <th scope="row" class="text-center">{{ $loop->iteration }}
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
</div>
@endsection
