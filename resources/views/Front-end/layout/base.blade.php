<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Online Tiket || </title>

  {{-- css --}}
  @include('Front-end.layout.partials.css')
</head>

<body>




  <!-- Navbar -->
  @include('Front-end.layout.component.nav')
  <!-- /.navbar -->



  <!-- Content Wrapper. Contains page content -->
  <div class="">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->


  {{-- js --}}
  @include('Front-end.layout.partials.js')
  {{-- endjs --}}




</body>

</html>