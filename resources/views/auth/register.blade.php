@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __('ReQRdame')])

@section('content')
    <div class="login-container max-height">
        <div class="row align-items-center max-height">
            <div class="col-12 ml-auto mr-auto max-height">
                <form class="form max-height" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="login_container-flex">
                        <div class="center-login-column">
                            <img class="login_logo_center" src="{{url('/material/login/logo.png')}}">
                            <div class="card card-login card-hidden mb-3 no-shadow">
                                <div class="card-header text-center">
                                    <h4 class="card-title in-login"><strong>{{ __('¡Hola, qué gusto verte de nuevo!') }}</strong></h4>
                                    <p class="p-sub-text text-center">¡Cada vida con únicas historias por contar, suscríbete!</p>
                                    <a href="{{ route('login') }}" class="login-btn btn-sm">
                                        Inicia Sesión
                                    </a>
                                    <div class="divider mt-4">O</div>
                                </div>
                                <div class="card-body pt-0">
                                    <p class="p-sub-text text-center mt-1">Registra tus datos para ingresar</p>

                                    <div class="form-flex-group mt-3">
                                        <div class="half-input bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <div class="input-group">
                                                <input type="text" name="name" class="form-control login-input text-center font-weight-bold" placeholder="{{ __('Nombre') }}" value="{{ old('name') }}" required>
                                            </div>
                                            @if ($errors->has('name'))
                                                <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="half-input bmd-form-group{{ $errors->has('last_name') ? ' has-danger' : '' }}">
                                            <div class="input-group">
                                                <input type="text" name="last_name" class="form-control login-input text-center font-weight-bold" placeholder="{{ __('Apellido') }}" value="{{ old('last_name') }}" required>
                                            </div>
                                            @if ($errors->has('last_name'))
                                                <div id="last_name-error" class="error text-danger pl-3" for="last_name" style="display: block;">
                                                    <strong>{{ $errors->first('last_name') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-flex-group mt-3">
                                        <div class="half-input bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                            <div class="input-group">
                                                <input type="email" name="email" class="form-control login-input text-center font-weight-bold" placeholder="{{ __('Correo') }}" value="{{ old('email') }}" required>
                                            </div>
                                            @if ($errors->has('email'))
                                                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="half-input bmd-form-group{{ $errors->has('user_type') ? ' has-danger' : '' }}">
                                            <div class="input-group">
                                                <select style="color: #afb5bf" name="user_type" class="form-control login-input text-center font-weight-bold" placeholder="{{ __('Tipo de Usuario') }}" value="{{ old('user_type') }}" required>
                                                    <option value="1" selected>Administrador</option>
                                                    <option value="2">Seguidor</option>
                                                </select>
                                            </div>
                                            @if ($errors->has('user_type'))
                                                <div id="user_type-error" class="error text-danger pl-3" for="user_type" style="display: block;">
                                                    <strong>{{ $errors->first('user_type') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-flex-group mt-3">
                                        <div class="half-input bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                            <div class="input-group">
                                                <input type="password" name="password" id="password" class="form-control login-input text-center font-weight-bold" placeholder="{{ __('Contraseña') }}" value="" required>
                                            </div>
                                            @if ($errors->has('password'))
                                                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="half-input bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }}">
                                            <div class="input-group">
                                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control login-input text-center font-weight-bold" placeholder="{{ __('Confirmar Contraseña') }}" value="" required>
                                            </div>
                                            @if ($errors->has('password_confirmation'))
                                                <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <button type="submit" class="login-btn btn-sm mt-4">Ingresar</button>
                                    <div class="form-check mt-4 text-left">
                                        <label class="form-check-label" style="color: black; font-weight: 500">
                                            <input class="form-check-input" type="checkbox" name="remember"> Recuerdame
                                            <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                        </label>
                                    </div>
                                    <div class="form-check mt-3 text-left">
                                        <a href="http://reqrdame.local/password/reset" class="reqrdame-color text-left">
                                            <span style="font-size: 12px">Restablecer mi contraseña.</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
