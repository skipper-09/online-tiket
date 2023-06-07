<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{ route('admin.pemesan',) }}">Online Tiket</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('admin.pemesan',) }}">Pemesan </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.cek-in') }}">Cek In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.laporan', ) }}">Laporan</a>
        </li>
      </ul>
      <div>
        <a href="{{ route('logout') }}">
          <button class="btn btn-primary btn-sm"> Logout</button>
        </a>
      </div>

    </div>
  </div>
</nav>