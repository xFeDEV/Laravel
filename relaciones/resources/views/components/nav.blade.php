
<nav class="navbar mb-3 text-white" style="background-color: #7531F2;">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('users.index')}}">
        <i class='bx bx-user-circle bx-lg bx-tada-hover' style='color:#ffffff'></i>
      </a>
      <span class="navbar-text">
        <a href="{{route('roles.index')}}"><i class='bx bxs-user-badge bx-lg bx-tada-hover' style='color:#ffffff'></i></a>
      </span>
      <span class="navbar-text">
        <a href="{{route('users.create')}}" class="btn btn-light">Crear usuario</a>
      </span>
      <span class="navbar-text">
        <a href="{{route('roles.create')}}" class="btn btn-light">Crear rol</a>
      </span>
    </div>
  </nav>

 {{--  <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
    <div class="bg-dark p-4">
      <h5 class="text-body-emphasis h4">Collapsed content</h5>
      <span class="text-body-secondary">Toggleable via the navbar brand.</span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav> --}}