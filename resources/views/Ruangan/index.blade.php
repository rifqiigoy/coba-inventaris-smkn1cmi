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
<div class="container mt-5">
    <div class="row">
        <div class="col-6 mx-auto">
            <ul class="list-group">
                @foreach ($ruangan as $ruang)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      {{ $ruang->kibb_lokasi }} / {{ $ruang->nama_lokasi}}
                      <a href="/ruangan/{{ $ruang->id }}" class="badge badge-info">Detail</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
