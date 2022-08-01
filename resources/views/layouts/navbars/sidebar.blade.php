@inject('url_qr', 'App\Services\GetProfileURL')
<div class="sidebar" data-color="reqrdame" data-background-color="purple">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo tarvi-logo-container">
        <img class="sidebar_logo" src="{{url('/material/login/logo.png')}}">
        <h5 class="user-card-header">
            Hola {{Auth::user()->name}}
        </h5>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'Tablero' ? ' active' : '' }}">
                <a class="nav-link" href="{{ url('/inicio-admin') }}">
                    <i><img class="sidebar-icon" src="{{ asset('material') }}/img/home.png"></i>
                    <p class="sidebar-element-text">{{ __('Inicio') }}</p>
                </a>
            </li>

            <li id="mi-cuenta" class="nav-item{{ $activePage == 'Perfil' ? ' active' : '' }}">
                <a class="nav-link" @if($url_qr->get() !== '') href="{{ url('/'.$url_qr->get()) }}" @else href="{{ url('/comprobando') }}" @endif>
                    <i><img class="sidebar-icon" src="{{ asset('material') }}/img/perfil.png"></i>
                    <p class="sidebar-element-text">{{ __('Perfil') }}</p>
                </a>
            </li>

            <li class="nav-item{{ $activePage == 'Información' ? ' active' : '' }}">
                <a class="nav-link" href="{{ url('/informacion') }}" id="custom_link">
                    <i><img class="sidebar-icon" src="{{ asset('material') }}/img/configuracion.png"></i>
                    <p class="sidebar-element-text">{{ __('Información') }}</p>
                </a>
            </li>

            <li id="mi-cuenta" class="nav-item{{ $activePage == 'Menciones' ? ' active' : '' }}">
                <a class="nav-link" href="{{ url('/menciones') }}">
                    <i><img class="sidebar-icon" src="{{ asset('material') }}/img/menciones.png"></i>
                    <p class="sidebar-element-text">{{ __('Menciones') }}</p>
                </a>
            </li>

            <li id="mi-cuenta" class="nav-item{{ $activePage == 'Trayectoria' ? ' active' : '' }}">
                <a class="nav-link" href="{{ url('/trayectoria') }}">
                    <i><img class="sidebar-icon" src="{{ asset('material') }}/img/trayectoria.png"></i>
                    <p class="sidebar-element-text">{{ __('Trayectoria') }}</p>
                </a>
            </li>

            <li id="mi-cuenta" class="nav-item{{ $activePage == 'Galeria' ? ' active' : '' }}">
                <a class="nav-link" href="{{ url('/galeria') }}">
                    <i><img class="sidebar-icon" src="{{ asset('material') }}/img/galeria.png"></i>
                    <p class="sidebar-element-text">{{ __('Galeria') }}</p>
                </a>
            </li>

            <li id="mi-cuenta" class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i><img class="sidebar-icon" src="{{ asset('material') }}/img/cerrar.png"></i>
                    <p class="sidebar-element-text">{{ __('Cerrar Sesión') }}</p>
                </a>
            </li>

        </ul>
    </div>
</div>
<script>
    var cuenta = document.getElementById('cuenta');
    var apariencia = document.getElementById('cuenta');

    var account_nav = document.getElementById('account-nav');
    var look_nav = document.getElementById('account-nav');

    // en mis datos
    if ($('#mis-correos').hasClass('active') === true) {
        account_nav.classList.remove('collapsed');
        cuenta.classList.add('show');
    }
    if ($('#mis-numeros').hasClass('active') === true) {
        account_nav.classList.remove('collapsed');
        cuenta.classList.add('show');
    }
    if ($('#mis-redes').hasClass('active') === true) {
        account_nav.classList.remove('collapsed');
        cuenta.classList.add('show');
    }
    if ($('#mis-sitios').hasClass('active') === true) {
        account_nav.classList.remove('collapsed');
        cuenta.classList.add('show');
    }

    // en apariencia
    if ($('#listado').hasClass('active') === true) {
        account_nav.classList.remove('collapsed');
        cuenta.classList.add('show');
    }
    if ($('#temas').hasClass('active') === true) {
        account_nav.classList.remove('collapsed');
        cuenta.classList.add('show');
    }
    if ($('#fondos').hasClass('active') === true) {
        account_nav.classList.remove('collapsed');
        cuenta.classList.add('show');
    }
    if ($('#fuentes').hasClass('active') === true) {
        account_nav.classList.remove('collapsed');
        cuenta.classList.add('show');
    }
    if ($('#botones').hasClass('active') === true) {
        account_nav.classList.remove('collapsed');
        cuenta.classList.add('show');
    }
    if ($('#colores').hasClass('active') === true) {
        account_nav.classList.remove('collapsed');
        cuenta.classList.add('show');
    }

</script>
