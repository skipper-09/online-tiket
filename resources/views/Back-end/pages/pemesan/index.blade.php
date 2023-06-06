@extends('Back-end.layout.base')
@section('content')

<div class="container mt-4">
  <h3>Data Pemesan</h3>
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
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php
          $no = 1;
          @endphp
          @foreach ($pemesan as $p )
          <tr>
            <td>{{$no++ }}</td>
            <td>{{$p->nama }}</td>
            <td>{{$p->email }}</td>
            <td>{{$p->no_telepon }}</td>
            <td>{{$p->alamat }}</td>

            <td>
              <div class="d-flex gap-2 ">
                <a href="{{ route('edit.pemesan', [$p->id]) }}">
                  <button class="btn btn-sm btn-success mr-2"><i class="fas fa-pen mr-2"></i>Edit</button>
                </a>
                <a href="{{ route('hapus.pemesan', [$p->id]) }}" ">
                  <button class=" btn btn-sm btn-danger delete mr-2"><i class="fas fa-trash mr-2"></i>Hapus</button>
                </a>

              </div>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>



</div>


@endsection