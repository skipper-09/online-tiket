@extends('Back-end.layout.base')
@section('content')


<div class="container">
  <form method="POST" action="{{ route('update.pemesan',['id'=>$pemesan->id]) }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="row ">
      <div class="col-md-12">
        <div class="form-group mb-2">
          <label for="name">Nama</label>
          <select name="id_konser" class="form-control">
            <option selected>Pilih Konser</option>
            @foreach ($konser as $k )
            <option value="{{$k->id}}" {{$pemesan->konser_id == $k->id ? 'selected' : ''}}>{{$k->nama_konser}}
            </option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="col">
        <div class="form-group mb-2">
          <label for="name">Nama</label>
          <input type="text" name="nama" class="form-control" id="name" placeholder="Masukan Nama"
            value="{{$pemesan->nama}}">
        </div>
      </div>
      <div class="col">
        <div class="form-group mb-2">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="Masukan Email"
            value="{{$pemesan->email}}">
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="form-group mb-2 w-">
        <label for="no_hp">No Telepon</label>
        <input type="number" name="nohp" class="form-control" id="email" placeholder="No Telepon"
          value="{{$pemesan->no_telepon}}">
      </div>
    </div>
    <div class="col-12">
      <div class="form-group mb-2 w-">
        <label for="no_hp">Alamat</label>
        <textarea class="form-control" name="alamat" id="email" placeholder="Alamat" rows="4"
          cols="50">{{$pemesan->alamat}}</textarea>
      </div>
    </div>

    <button class="btn btn-primary" type="submit">Ubah Data</button>
</div>



</form>
</div>

@endsection