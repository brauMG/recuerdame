@extends('layouts.app', ['class' => 'off-canvas-sidebar body-qr-login', 'activePage' => 'login', 'title' => __('ReQRdame')])

@section('content')
    <div class="login-container max-height">
        <div class="row align-items-center max-height">
            <div class="col-12 ml-auto mr-auto max-height">
                <form class="form max-height" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="login_container-flex">
                        <div class="aside-login-column">

                        </div>
                        <div class="center-login-column">
                            <img class="login_logo_center" src="{{url('/material/login/logo.png')}}">
                            <div class="card card-login card-hidden mb-3 no-shadow">
                                <div class="card-header text-center">
                                    <h4 class="card-title"><strong>{{ __('¡Hola, qué gusto verte de nuevo!') }}</strong></h4>
                                    <p class="p-sub-text text-center">Registrate facilmente.</p>
                                    <a href="{{ route('register') }}" class="text-tarvi-color btn-sm login_btn-tarvi">
                                        Crear Cuenta
                                    </a>
                                    <div class="divider mt-4">O</div>
                                </div>
                                <div class="card-body pt-0">
                                    <p class="p-sub-text card-description text-center mt-1">Ingresa con tu usuario y contraseña.</p>
                                    <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <div class="input-group">
                                            <input type="email" name="email" class="form-control own-form-2 text-center font-weight-bold login_margin-input" placeholder="{{ __('Correo electrónico') }}" value="{{ old('email') }}" required>
                                        </div>
                                        @if ($errors->has('email'))
                                            <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
                                        <div class="input-group">
                                            <input type="password" name="password" id="password" class="form-control own-form-2 text-center font-weight-bold login_margin-input" placeholder="{{ __('Contraseña') }}" value="" required>
                                        </div>
                                        @if ($errors->has('password'))
                                            <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </div>
                                        @endif
                                    </div>

                                    <button type="submit" class="sign_btn-tarvi btn-sm mt-3" style="padding: 0.40625rem 4.50rem">Ingresar</button>
                                    <div class="form-check mt-4 text-left login_margin-input">
                                        <label class="form-check-label" style="color: black; font-weight: 500">
                                            <input class="form-check-input" type="checkbox" name="remember"> Recuerdame
                                            <span class="form-check-sign">
                                          <span class="check"></span>
                                      </span>
                                        </label>
                                    </div>
                                    <div class="form-check mt-3 text-left login_margin-input">
                                        <a href="http://tarvi.local/password/reset" class="text-tarvi-color text-left">
                                            <span style="font-size: 12px">Restablecer mi contraseña.</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aside-login-column">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
{{--HTML STRUCTURE FOR MOBILE--}}
{{--<div class="mobile-structure">--}}
{{--    <div class="card card-login card-hidden mb-3">--}}
{{--        <div class="card-header card-header-primary text-center">--}}
{{--            <h4 class="card-title"><strong>{{ __('Login') }}</strong></h4>--}}
{{--            <div class="social-line">--}}
{{--                <a href="#" class="btn btn-just-icon btn-link btn-white">--}}
{{--                    <i class="fa fa-facebook-square"></i>--}}
{{--                </a>--}}
{{--                <a href="#" class="btn btn-just-icon btn-link btn-white">--}}
{{--                    <i class="fa fa-twitter"></i>--}}
{{--                </a>--}}
{{--                <a href="#" class="btn btn-just-icon btn-link btn-white">--}}
{{--                    <i class="fa fa-google-plus"></i>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--            <p class="card-description text-center">{{ __('Or Sign in with ') }} <strong>braulio@firefish.com.mx</strong> {{ __(' and the password ') }}<strong>secret</strong> </p>--}}
{{--            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">--}}
{{--                <div class="input-group">--}}
{{--                    <div class="input-group-prepend">--}}
{{--                      <span class="input-group-text">--}}
{{--                        <i class="material-icons">email</i>--}}
{{--                      </span>--}}
{{--                    </div>--}}
{{--                    <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" value="{{ old('email', 'braulio@firefish.com.mx') }}" required>--}}
{{--                </div>--}}
{{--                @if ($errors->has('email'))--}}
{{--                    <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">--}}
{{--                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--            </div>--}}
{{--            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">--}}
{{--                <div class="input-group">--}}
{{--                    <div class="input-group-prepend">--}}
{{--                      <span class="input-group-text">--}}
{{--                        <i class="material-icons">lock_outline</i>--}}
{{--                      </span>--}}
{{--                    </div>--}}
{{--                    <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password...') }}" value="{{ !$errors->has('password') ? "secret" : "" }}" required>--}}
{{--                </div>--}}
{{--                @if ($errors->has('password'))--}}
{{--                    <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">--}}
{{--                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--            </div>--}}
{{--            <div class="form-check mr-auto ml-3 mt-3">--}}
{{--                <label class="form-check-label">--}}
{{--                    <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember me') }}--}}
{{--                    <span class="form-check-sign">--}}
{{--                      <span class="check"></span>--}}
{{--                    </span>--}}
{{--                </label>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="card-footer justify-content-center">--}}
{{--            <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Lets Go') }}</button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row">--}}
{{--        <div class="col-6">--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a href="{{ route('password.request') }}" class="text-light">--}}
{{--                    <small>{{ __('Forgot password?') }}</small>--}}
{{--                </a>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--        <div class="col-6 text-right">--}}
{{--            <a href="{{ route('register') }}" class="text-light">--}}
{{--                <small>{{ __('Create new account') }}</small>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--HTML STRUCTURE FOR DESKTOP--}}
{{--<div class="desktop-structure">--}}
{{--    <div class="login_container-flex">--}}
{{--        <div class="col-md-6 text-center text-dark bg-img-orange">--}}

{{--        </div>--}}
{{--        <div class="col-md-6 text-center text-dark">--}}
{{--            <div class="login_top-nav">--}}
{{--                <img class="login_logo" src="{{url('/material/login/logo.png')}}">--}}
{{--            </div>--}}
{{--            <div class="card card-login card-hidden mb-3 no-shadow">--}}
{{--                <div class="card-header text-center">--}}
{{--                    <h4 class="card-title"><strong>{{ __('¡Hola, qué gusto verte de nuevo!') }}</strong></h4>--}}
{{--                    <p class="p-sub-text text-center">Registrate facilmente.</p>--}}
{{--                    <a href="{{ route('register') }}" class="text-tarvi-color btn-sm login_btn-tarvi">--}}
{{--                        Crear Cuenta--}}
{{--                    </a>--}}
{{--                    <div class="divider mt-4">O</div>--}}
{{--                </div>--}}
{{--                <div class="card-body pt-0">--}}
{{--                    <p class="p-sub-text card-description text-center mt-1">Ingresa con tu usuario y contraseña.</p>--}}
{{--                    <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">--}}
{{--                        <div class="input-group">--}}
{{--                            <input type="email" name="email" class="form-control own-form-2 text-center font-weight-bold login_margin-input" placeholder="{{ __('Correo electrónico') }}" value="{{ old('email') }}" required>--}}
{{--                        </div>--}}
{{--                        @if ($errors->has('email'))--}}
{{--                            <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">--}}
{{--                                <strong>{{ $errors->first('email') }}</strong>--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                    <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">--}}
{{--                        <div class="input-group">--}}
{{--                            <input type="password" name="password" id="password" class="form-control own-form-2 text-center font-weight-bold login_margin-input" placeholder="{{ __('Contraseña') }}" value="" required>--}}
{{--                        </div>--}}
{{--                        @if ($errors->has('password'))--}}
{{--                            <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">--}}
{{--                                <strong>{{ $errors->first('password') }}</strong>--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                    </div>--}}

{{--                    <button type="submit" class="sign_btn-tarvi btn-sm mt-3" style="padding: 0.40625rem 4.50rem">Ingresar</button>--}}
{{--                    <div class="form-check mt-4 text-left login_margin-input">--}}
{{--                        <label class="form-check-label" style="color: black; font-weight: 500">--}}
{{--                            <input class="form-check-input" type="checkbox" name="remember"> Recuerdame--}}
{{--                            <span class="form-check-sign">--}}
{{--                                          <span class="check"></span>--}}
{{--                                      </span>--}}
{{--                        </label>--}}
{{--                    </div>--}}
{{--                    <div class="form-check mt-3 text-left login_margin-input">--}}
{{--                        <a href="http://tarvi.local/password/reset" class="text-tarvi-color text-left">--}}
{{--                            <span style="font-size: 12px">Restablecer mi contraseña.</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
