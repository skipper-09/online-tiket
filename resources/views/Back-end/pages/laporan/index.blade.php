@extends('Back-end.layout.base')
@section('content')

<div class="container mt-4">
  <h3>Data Laporan</h3>
  <div class="card mt-3">
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama </th>
            <th>Email</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Kode Konser</th>
            <th>Cek In</th>

          </tr>
        </thead>
        <tbody>
          @php
          $no = 1;
          @endphp
          @foreach ($laporan as $p )
          <tr>
            <td>{{$no++ }}</td>
            <td>{{$p->pemesan->nama }}</td>
            <td>{{$p->pemesan->email }}</td>
            <td>{{$p->pemesan->no_telepon }}</td>
            <td>{{$p->pemesan->alamat }}</td>
            <td>{{$p->kode}}</td>
            <td>{{$p->digunakan == 0 ? "Belum Cek In" : "Sudah Cek In" }}</td>



          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>



</div>


@endsection