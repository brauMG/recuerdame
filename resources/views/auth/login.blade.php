@extends('layouts.app', ['class' => 'off-canvas-sidebar body-qr-login', 'activePage' => 'login', 'title' => __('ReQRdame')])

@section('content')
    <div class="login-container max-height">
        <div class="row align-items-center max-height">
            <div class="col-12 ml-auto mr-auto max-height">
                <form class="form max-height" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="login_container-flex">
                        <div class="center-login-column">
                            <img class="login_logo_center" src="{{url('/material/login/logo.png')}}">
                            <div class="card card-login card-hidden mb-3 no-shadow">
                                <div class="card-header text-center">
                                    <h4 class="card-title in-login"><strong>{{ __('¡Hola, qué gusto verte de nuevo!') }}</strong></h4>
                                    <p class="p-sub-text text-center">Deja tus datos y empieza a hacer memorias.</p>
                                    <a href="{{ route('register') }}" class="login-btn btn-sm">
                                        Regístrate
                                    </a>
                                    <div class="divider mt-4">O</div>
                                </div>
                                <div class="card-body pt-0">
                                    <p class="p-sub-text text-center mt-1">Ingresa con tu usuario y contraseña.</p>
                                    <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <div class="input-group">
                                            <input type="email" name="email" class="form-control login-input text-center font-weight-bold" placeholder="{{ __('Correo electrónico') }}" value="{{ old('email') }}" required>
                                        </div>
                                        @if ($errors->has('email'))
                                            <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
                                        <div class="input-group">
                                            <input type="password" name="password" id="password" class="form-control login-input text-center font-weight-bold" placeholder="{{ __('Contraseña') }}" value="" required>
                                        </div>
                                        @if ($errors->has('password'))
                                            <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </div>
                                        @endif
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
