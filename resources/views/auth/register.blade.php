@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __('ReQRdame')])

@section('content')
    <style>
        .form-control::-webkit-input-placeholder {
            color: black !important;
            font-weight: 500 !important;
            font-size: 14px !important;
        }
    </style>
    <div class="container" style="height: auto;">
        <div class="row align-items-center">
            <div class="col-12 ml-auto mr-auto">
                <form class="form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="desktop-structure">
                        <div class="login_container-flex">
                            <div class="col-md-6 text-center text-dark bg-img-orange">

                            </div>
                            <div class="col-md-6 text-center text-dark">
                                <div class="login_top-nav">
                                    <a href="{{ route('login') }}" class="text-tarvi-color btn-sm login_btn-tarvi" style="position: absolute; left: 25px; top: 8px;">
                                        Inicia Sesión
                                    </a>
                                    <img class="login_logo" src="{{url('/material/login/logo.png')}}">
                                </div>
                                <div class="card card-login card-hidden mb-3 mt-0 no-shadow">
                                    <div class="card-header text-center pb-0">
                                        <h4 class="card-title mb-3"><strong>{{ __('¡Todos los beneficios de tener tu propia biografía al alcance de tu mano, suscríbete! ') }}</strong></h4>
                                        <div class="divider mt-3">O</div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <p class="p-sub-text card-description text-center mt-0" style="margin-bottom: 0px !important;">Ingresa tus datos.</p>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input placeholder="Nombre" type="text" class="form-control own-form-2 text-center font-weight-bold" id="name" name="name" value="{{ old('name') }}" required>
                                                @error('name')
                                                <span class="text-danger mt-1">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input placeholder="Nombre de Usuario" type="text" class="form-control own-form-2 text-center font-weight-bold" id="username" name="username" value="{{ old('username') }}" required>
                                                @error('username')
                                                <span class="text-danger mt-1">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input placeholder="Correo" type="text" class="form-control own-form-2 text-center font-weight-bold" id="email" name="email" value="{{ old('email') }}" required>
                                                @error('email')
                                                <span class="text-danger mt-1">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <select name="topic" class="form-control own-form-2 text-center font-weight-bold" required>
                                                    <option disabled selected>Giro de la cuenta</option>
                                                    @foreach($topics as $topic)
                                                        <option class="form-control" value="{{$topic->id}}">{{$topic->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <select name="country" class="form-control own-form-2 text-center font-weight-bold" required>
                                                    <option disabled selected>País</option>
                                                    @foreach($countries as $code => $country)
                                                        <option class="custom-select" value="{{$code}}" @if($country == "Mexico") selected @else @endif>{{$country}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @if ($errors->has('country'))
                                                <div id="name-error" class="error text-danger pl-3" for="country" style="display: block;">
                                                    <strong>{{ $errors->first('country') }}</strong>
                                                </div>
                                            @endif
                                            <div class="form-group col-md-6">
                                                <select name="gender" id="gender" class="form-control own-form-2 text-center font-weight-bold" required>
                                                    <option disabled selected>Género</option>
                                                    <option class="custom-select" value="0">Femenino</option>
                                                    <option class="custom-select" value="1">Masculino</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <select name="is_company" id="is_company_desktop" class="form-control own-form-2 text-center font-weight-bold" required onclick="verify_type_desktop()">
                                                    <option disabled selected>Tipo de Cuenta</option>
                                                    <option class="custom-select" value="0">Personal</option>
                                                    <option class="custom-select" value="1">Empresarial</option>
                                                </select>
                                                @error('is_company')
                                                <span class="text-danger mt-1">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            @if ($errors->has('country'))
                                                <div id="name-error" class="error text-danger pl-3" for="country" style="display: block;">
                                                    <strong>{{ $errors->first('country') }}</strong>
                                                </div>
                                            @endif
                                            <div class="form-group col-md-6">
                                                <input placeholder="URL que deseas" type="text" class="form-control own-form-2 text-center font-weight-bold" id="url_slug" name="url_slug" value="{{ old('url_slug') }}" required>
                                                @error('url_slug')
                                                <span class="text-danger mt-1">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <input type="password" name="password" id="password" class="form-control own-form-2 text-center font-weight-bold" placeholder="{{ __('Contraseña') }}" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control own-form-2 text-center font-weight-bold" placeholder="{{ __('Confirmar Contraseña') }}" required>
                                                @if ($errors->has('password_confirmation'))
                                                    <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-row" id="role_form_desktop" style="display: none">
                                            <div class="form-group col-md-12">
                                                <label class="own-label">Rol en la Empresa</label>
                                                <select name="company_role" id="company_role_desktop" class="form-control own-form-2 text-center font-weight-bold">
                                                    <option class="custom-select" value="Empleado">Empleado</option>
                                                    <option class="custom-select" value="Gerente">Gerente</option>
                                                    <option class="custom-select" value="Director">Director</option>
                                                    <option class="custom-select" value="Dueño">Dueño</option>
                                                    <option class="custom-select" value="Socio">Socio</option>
                                                    <option class="custom-select" value="Otro">Otro</option>
                                                </select>
                                                @error('company_role')
                                                <span class="text-danger mt-1">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <button id="register_btn-tarvi" type="submit" class="register_btn-tarvi btn-sm" style="padding: 0.40625rem 4.50rem">Ingresar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        var is_company = document.getElementById('is_company');
        var role_form = document.getElementById('role_form');
        var company_role = document.getElementById('company_role');

        function verify_type() {
            if(is_company.value === '1') {
                role_form.style.display = 'block';
                company_role.required = true;
            }
            else {
                role_form.style.display = 'none';
                company_role.required = false;
                company_role.value = null;
            }
        }

        var is_company_desktop = document.getElementById('is_company_desktop');
        var role_form_desktop = document.getElementById('role_form_desktop');
        var company_role_desktop = document.getElementById('company_role_desktop');
        var register_tarvi = document.getElementById('register_btn-tarvi');

        function verify_type_desktop() {
            if(is_company_desktop.value === '1') {
                role_form_desktop.style.display = 'block';
                company_role_desktop.required = true;
                register_tarvi.setAttribute('style', 'margin-top: -15px !important')

            }
            else {
                role_form_desktop.style.display = 'none';
                company_role_desktop.required = false;
                company_role_desktop.value = null;
                register_tarvi.setAttribute('style', 'margin-top: 15px !important')
            }
        }
    </script>
@endsection
