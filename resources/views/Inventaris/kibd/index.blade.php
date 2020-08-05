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
      <a href="/inventaris/kibd" class="btn btn-outline-primary active" role="button">KIB D</a>
      <a href="/inventaris/kibe" class="btn btn-outline-primary" role="button">KIB E</a>
      <a href="/inventaris/kibf" class="btn btn-outline-primary" role="button">KIB F</a>
    </div>
      <div class="container-fluid border rounded py-3">
        <h3 class="text-center">KIB D<br/>Jalan, Irigasi, dan Jaringan</h3>
        <div class="mb-3">
            <a href="/inventaris/kibd/create" class="btn btn-primary" role="button">TAMBAH DATA KIB D</a>
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
                  <th scope="col"><center>Nilai Perolehan</center></th>
                  <th scope="col"><center>Umur Ekonomis</center></th>
                  <th scope="col"><center>Nama OPD</center></th>
                  <th scope="col"><center>Nama Sub-OPD</center></th>
                  <th scope="col"><center>Kab/Kota</center></th>
                  <th scope="col"><center>Keterangan</center></th>
              </tr>
            </thead>
            <tbody>
              @foreach( $kibd as $inv_d )
              <tr>
                  <th scope="row" class="text-center">{{ $inv_d->id }}<!--{{ $loop->iteration }}--></th>
                  <td>{{ $inv_d->kode }}</td>
                  <td>{{ $inv_d->nama }}</td>
                  <td>{{ $inv_d->alamat }}</td>
                  <td>{{ $inv_d->luas }}</td>
                  <td>{{ $inv_d->bulan }}</td>
                  <td>{{ $inv_d->tahun }}</td>
                  <td>{{ $inv_d->nilai }}</td>
                  <td>{{ $inv_d->umur }}</td>
                  <td>{{ $inv_d->opd }}</td>
                  <td>{{ $inv_d->sub_opd }}</td>
                  <td>{{ $inv_d->kota }}</td>
                  <td>{{ $inv_d->keterangan }}</td>
              </tr>
              @endforeach
            </tbody>
        </table>
        <div>
          Halaman : {{ $kibd->currentPage() }} <br/>
          Jumlah Data : {{ $kibd->total() }} <br/>
          Data Per Halaman : {{ $kibd->perPage() }} <br/>
          <br/>
          {{ $kibd->links() }}
        </div>
      </div>
  </div>
@endsection