@extends('Back-end.layout.base')
@section('content')

<div class="mt-5 container">

  <form action="{{ route('store.cek-in') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Masukkan Kode</label>
      <input type="text" name="kode" id="" class="form-control" placeholder="" aria-describedby="kode">
    </div>
    <div class="mb-3">
      <button class="btn btn-primary btn-sm" type="submit">Cek In</button>
    </div>
  </form>
</div>

@endsection