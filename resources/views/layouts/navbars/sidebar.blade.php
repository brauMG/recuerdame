<div class="sidebar tarvi-sidebar" data-color="tarvi" data-background-color="purple">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo tarvi-logo-container">
        <img class="sidebar_logo" src="{{url('/material/login/logo.png')}}">
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'Tablero' ? ' active' : '' }}">
                <a class="nav-link" href="{{ url('/dashboard') }}">
                    <i class="material-icons-outlined material-icons-outlined">dashboard</i>
                    <p>{{ __('Tablero') }}</p>
                </a>
            </li>

            <li id="mi-cuenta" class="nav-item{{ $activePage == 'Mi Cuenta' ? ' active' : '' }}">
                <a class="nav-link" href="{{ url('/my_profile') }}">
                    <i class="material-icons material-icons-outlined">person_pin</i>
                    <p>{{ __('Mi Perfil') }}</p>
                </a>
            </li>

            <li class="nav-item {{ ($activePage == '') ? ' active' : '' }}">
                <a class="nav-link collapsed" id="account-nav" data-toggle="collapse" href="#cuenta" aria-expanded="false">
                    <i><img style="width:25px" src="{{ asset('material') }}/img/perfil.svg"></i>
                    <p>{{ __('Mis Datos') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="cuenta">
                    <ul class="nav">
                        <li id="mis-redes" class="nav-item{{ $activePage == 'Mis Redes Sociales' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ url('/my_social_media') }}">
                                <i class="material-icons material-icons-outlined">tag</i>
                                <p>{{ __('Mis Redes Sociales') }}</p>
                            </a>
                        </li>
                        <li id="mis-correos" class="nav-item{{ $activePage == 'Mis Correos' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ url('/my_emails') }}">
                                <i class="material-icons material-icons-outlined">contact_mail</i>
                                <p>{{ __('Mis Correos') }}</p>
                            </a>
                        </li>
                        <li id="mis-sitios" class="nav-item{{ $activePage == 'Mis Sitios' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ url('/my_sites') }}">
                                <i class="material-icons material-icons-outlined">language</i>
                                <p>{{ __('Mis Sitios') }}</p>
                            </a>
                        </li>
                        <li id="mis-numeros" class="nav-item{{ $activePage == 'Mis Números de Teléfono' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ url('/my_numbers') }}">
                                <i class="material-icons material-icons-outlined">contact_phone</i>
                                <p>{{ __('Mis Números de Teléfono') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item{{ $activePage == 'Tarjeta Virtual' ? ' active' : '' }}">
                <a class="nav-link" href="{{ url('/'.\Illuminate\Support\Facades\Auth::user()->url_slug) }}" id="custom_link">
                    <i class="material-icons material-icons-outlined">badge</i>
                    <p>{{ __('Tarjeta Virtual') }}</p>
                </a>
            </li>

            <li class="nav-item {{ ($activePage == '') ? ' active' : '' }}">
                <a class="nav-link collapsed" id="look-nav" data-toggle="collapse" href="#apariencia" aria-expanded="false">
                    <i><img style="width:25px" src="{{ asset('material') }}/img/apariencia.svg"></i>
                    <p>{{ __('Apariencia') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="apariencia">
                    <ul class="nav">
                        <li id="listado" class="nav-item{{ $activePage == 'Listado' ? ' active' : '' }}">
                            <a class="nav-link" href="{{url('/list')}}">
                                <i class="material-icons material-icons-outlined">filter_list</i>
                                <span class="sidebar-normal">{{ __('Ordenar Mis Sitios') }} </span>
                            </a>
                        </li>
                        <li id="temas" class="nav-item{{ $activePage == 'Temas' ? ' active' : '' }}">
                            <a class="nav-link" href="{{url('/themes')}}">
                                <i class="material-icons material-icons-outlined">style</i>
                                <span class="sidebar-normal">{{ __('Temas') }} </span>
                            </a>
                        </li>
                        <li id="fondos" class="nav-item{{ $activePage == 'Fondos' ? ' active' : '' }}">
                            <a class="nav-link" href="{{url('/backgrounds')}}">
                                <i class="material-icons material-icons-outlined">format_paint</i>
                                <span class="sidebar-normal">{{ __('Fondos') }} </span>
                            </a>
                        </li>
                        <li id="fuentes" class="nav-item{{ $activePage == 'Fuentes' ? ' active' : '' }}">
                            <a class="nav-link" href="{{url('/fonts')}}">
                                <i class="material-icons material-icons-outlined">format_color_text</i>
                                <span class="sidebar-normal">{{ __('Fuentes') }} </span>
                            </a>
                        </li>
                        <li id="botones" class="nav-item{{ $activePage == 'Botones' ? ' active' : '' }}">
                            <a class="nav-link" href="{{url('/buttons')}}">
                                <i class="material-icons material-icons-outlined">format_color_fill</i>
                                <span class="sidebar-normal">{{ __('Botones') }} </span>
                            </a>
                        </li>
                        <li id="colores" class="nav-item{{ $activePage == 'Colores' ? ' active' : '' }}">
                            <a class="nav-link" href="{{url('/colors')}}">
                                <i class="material-icons material-icons-outlined">format_color_fill</i>
                                <span class="sidebar-normal">{{ __('Colores de Iconos') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div class="logo side-user-card">
        @if(Auth::user()->profile_image == null)
            <div class="side-img-container">
                <img src="{{ URL::to('/') }}/profile/default.jpg">
            </div>
        @else
            <div class="side-img-container">
                <img src="{{ URL::to('/') }}/profile/{{Auth::user()->profile_image}}">
            </div>
        @endif
        <a href="/" class="simple-text logo-normal">
            <h5 class="text-white user-card-header">
                {{Auth::user()->username}}
            </h5>
            <span class="text-white span-tarvi">
                    {{'@'.Auth::user()->url_slug}}
                </span>
        </a>
        <div class="logout-btn-container">
            <a class="logout-btn" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                {{ __('Cerrar Sesión') }}
            </a>
        </div>
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
