<div class="sidebar alt-sidebar" data-color="reqrdame" data-background-color="purple">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo tarvi-logo-container">
        <img class="sidebar_logo alt-sidebar_logo" src="{{url('/material/login/logo.png')}}">
    </div>
    <div class="sidebar-wrapper alt-sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i><img class="sidebar-icon alt-sidebar-icon" src="{{ asset('material') }}/img/home.png"></i>
                </a>
            </li>

            <li id="mi-cuenta" class="nav-item">
                <a class="nav-link" href="/">
                    <i><img class="sidebar-icon alt-sidebar-icon" src="{{ asset('material') }}/img/perfil.png"></i>
                </a>
            </li>

            <li id="mi-cuenta" class="nav-item">
                <a class="nav-link" href="/">
                    <i><img class="sidebar-icon alt-sidebar-icon" src="{{ asset('material') }}/img/archivo.png"></i>
                </a>
            </li>

            <li id="mi-cuenta" class="nav-item">
                <a class="nav-link" href="/">
                    <i><img class="sidebar-icon alt-sidebar-icon" src="{{ asset('material') }}/img/contacto.png"></i>
                </a>
            </li>

            <li id="mi-cuenta" class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i><img class="sidebar-icon alt-sidebar-icon" src="{{ asset('material') }}/img/cerrar.png"></i>
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
