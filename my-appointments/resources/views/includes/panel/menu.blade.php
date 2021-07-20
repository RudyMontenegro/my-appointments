<!-- Navigation -->
<!-- Heading -->
<h6 class="navbar-heading text-muted">Gestionar Datos</h6>
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="/home">
            <i class="ni ni-tv-2 text-primary"></i> Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('specialties')}}">
            <i class="ni ni-planet text-blue"></i>Especialidades
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('doctors')}}">
            <i class="ni ni-single-02 text-blue"></i>Medicos 
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('patients')}}">
            <i class="ni ni-satisfied text-blue"></i> Pacientes 
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit('formLogout');" >
            <i class="ni ni-key-25 text-blue"></i> Cerrar sesión
        </a>l
        <form action="{{ route('logout') }}" method="POST" style="display: none;" id="formLogout">
            @csrf
        </form>
    </li>
</ul>
<!-- Divider -->
<hr class="my-3">
<!-- Heading -->
<h6 class="navbar-heading text-muted">Reportes</h6>
<!-- Navigation -->
<ul class="navbar-nav mb-md-3">
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="ni ni-collection"></i> Frecuencia de Citas
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="ni ni-sound-wave"></i> Medico mas activos
        </a>
    </li>
  
</ul>