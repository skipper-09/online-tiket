@extends('Front-end.layout.base')
@section('content')

<section class="mt-4 mb-2">
  <div class="container">
    <h3 class="text-center ">Form Pemesanan Tiket</h3>

    <form method="POST" action="{{ route('tambah_pesanan') }}">
      {{ csrf_field() }}
      <div class="row ">
        <div class="col-md-12">
          <div class="form-group mb-2">
            <label for="name">Nama</label>
            <select name="id_konser" class="form-control">
              <option selected>Pilih Konser</option>
              @foreach ($konser as $k )
              <option value="{{$k->id}}">{{$k->nama_konser}} </option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col">
          <div class="form-group mb-2">
            <label for="name">Nama</label>
            <input type="text" name="nama" class="form-control" id="name" placeholder="Masukan Nama">
          </div>
        </div>
        <div class="col">
          <div class="form-group mb-2">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Masukan Email">
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="form-group mb-2 w-">
          <label for="no_hp">No Telepon</label>
          <input type="number" name="nohp" class="form-control" id="email" placeholder="No Telepon">
        </div>
      </div>
      <div class="col-12">
        <div class="form-group mb-2 w-">
          <label for="no_hp">Alamat</label>
          <textarea class="form-control" name="alamat" id="email" placeholder="Alamat" rows="4" cols="50"></textarea>
        </div>
      </div>

      <button class="btn btn-primary" type="submit">Pesan</button>
  </div>



  </form>
  </div>
</section>
@endsection