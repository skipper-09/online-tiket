@extends('Back-end.layout.base')

@section('content')

<div class="mt-5 container">
  @foreach ($detail as $d )

  <h2 class="text-cneter">Nama {{$d->pemesan->nama}}</h2>

  <div class="row">
    <div class="col-md-6">
      <label for="email">Email : {{$d->pemesan->email}}</label>
    </div>
    <div class="col-md-6">
      <label for="email">No Telepon {{$d->pemesan->no_telepon}}</label>
    </div>
    <div class="col-md-6">
      <label for="email">ALamat {{$d->pemesan->alamat}}</label>
    </div>
  </div>
  @endforeach
  <a href="{{ route('admin.cek-in') }}">
    <button class="btn btn-primary mt-2">Kembali</button>
  </a>
</div>


@endsection