@extends('layouts.app', ['activePage' => 'Tablero', 'titlePage' => __('Perfiles')])

@section('content')
    <div class="content">
        <div class="container-reqr">
            <div class="row">
                <div class="col-12 flex-cards">
                    {{--show messages from controller--}}
                    @if (session('mensaje'))
                        <div class="message-container-success">
                            {{session('mensaje')}}
                        </div>
                    @endif
                    @if (session('mensaje-error'))
                        <div class="message-container-alert">
                            {{session('mensaje-error')}}
                        </div>
                    @endif
                    @if (session('mensaje-warning'))
                        <div class="message-container-warning">
                            {{session('mensaje-warning')}}
                        </div>
                    @endif
                    {{--show messages from controller--}}

                    {{--show errors from controller--}}
                    @if(isset($errors) && $errors->any())
                        <div class="container">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    @if(session()->has('success'))
                        <div class="container">
                            <div class="alert alert-success">
                                <ul>
                                    @foreach(session()->get('success') as $message)
                                        <li>{{$message}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    {{--show errors from controller--}}

                        <div class="col-12">
                        <h3 class="title-page">Perfiles</h3>
                    </div>
                    @if(count($profiles) === 0)
                        <div class="col-12">
                            <div class="card card-stats card-social card-reqr default-card">
                                <div class="card-header card-header-info card-header-icon">
                                    <div style="text-align: center">
                                        <img class="default-select-image" src="{{ URL::to('/') }}/material/default-pictures/profile.png">
                                    </div>
                                    <h4 class="card-title social-card-title poppings-font-bold card-default-text-header">Hola {{\Illuminate\Support\Facades\Auth::user()->name}}</h4>
                                </div>
                                <div class="card-body pb-0">
                                    <div style="width: 100%; text-align: left">
                                        <p class="card-category p-default">
                                            Parece que aún no tienes un perfil que administrar, puedes agregar uno con el siguiente botón
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                    {{--here goes the profiles loop--}}
                    @foreach($profiles as $profile)
                            @if(count($profiles) === 1)
                            <div class="col-12">
                                <div class="card card-stats card-social card-reqr default-card">
                             @elseif(count($profiles) === 2)
                             <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="card card-stats card-social card-reqr">
                             @else
                             <div class="adaptative-col">
                                <div class="card card-stats card-social card-reqr">
                             @endif

                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-image">
                                        @if($profile->profile_image === null)
                                            <img class="select-image" src="{{ URL::to('/') }}/material/default-pictures/profile.png">
                                        @else
                                            <i><img class="select-image" src="{{ URL('/') }}/user-media/{{$profile->url_qr}}/cover-picture/{{$profile->profile_image}}"></i>
                                        @endif
                                    </div>
                                    <div class="card-icons">
                                        <img class="card-img-icon" src="{{ asset('material') }}/img/copy.png">
                                        <img class="card-img-icon" src="{{ asset('material') }}/img/bin.png" clave="{{$profile->id}}" onclick="deleted(this);">
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h4 class="card-title social-card-title poppings-font-bold">{{$profile->name.' '.$profile->last}}</h4>
                                    <div style="width: 100%; text-align: left">
                                        <p class="card-category">
                                            @php($fecha_nacimiento = strtotime($profile->birth_date))
                                            @php($fecha_fallecimiento = strtotime($profile->passing_date))
                                            Nacio el {{date('j', $fecha_nacimiento)}} de
                                            @if(date('m', $fecha_nacimiento) === '01') Enero @endif
                                            @if(date('m', $fecha_nacimiento) === '02') Febrero @endif
                                            @if(date('m', $fecha_nacimiento) === '03') Marzo @endif
                                            @if(date('m', $fecha_nacimiento) === '04') Abril @endif
                                            @if(date('m', $fecha_nacimiento) === '05') Mayo @endif
                                            @if(date('m', $fecha_nacimiento) === '06') Junio @endif
                                            @if(date('m', $fecha_nacimiento) === '07') Julio @endif
                                            @if(date('m', $fecha_nacimiento) === '08') Agosto @endif
                                            @if(date('m', $fecha_nacimiento) === '09') Septiembre @endif
                                            @if(date('m', $fecha_nacimiento) === '10') Octubre @endif
                                            @if(date('m', $fecha_nacimiento) === '11') Noviembre @endif
                                            @if(date('m', $fecha_nacimiento) === '12') Diciembre @endif
                                            del año {{date('Y', $fecha_nacimiento)}}
                                            <br>
                                            Fallecio el {{date('j', $fecha_fallecimiento)}} de
                                            @if(date('m', $fecha_fallecimiento) === '01') Enero @endif
                                            @if(date('m', $fecha_fallecimiento) === '02') Febrero @endif
                                            @if(date('m', $fecha_fallecimiento) === '03') Marzo @endif
                                            @if(date('m', $fecha_fallecimiento) === '04') Abril @endif
                                            @if(date('m', $fecha_fallecimiento) === '05') Mayo @endif
                                            @if(date('m', $fecha_fallecimiento) === '06') Junio @endif
                                            @if(date('m', $fecha_fallecimiento) === '07') Julio @endif
                                            @if(date('m', $fecha_fallecimiento) === '08') Agosto @endif
                                            @if(date('m', $fecha_fallecimiento) === '09') Septiembre @endif
                                            @if(date('m', $fecha_fallecimiento) === '10') Octubre @endif
                                            @if(date('m', $fecha_fallecimiento) === '11') Noviembre @endif
                                            @if(date('m', $fecha_fallecimiento) === '12') Diciembre @endif
                                            del año {{date('Y', $fecha_fallecimiento)}}
                                        </p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="container">
                                        <form action="{{route('ManageProfile', $profile->id)}}" method="POST">
                                            @method('PUT')
                                            @csrf
                                            @if($user->current_profile != $profile->id)
                                                <button type="submit" class="social-card-btn poppings-font">Gestionar Este Perfil</button>
                                            @else
                                                <button class="social-card-btn poppings-font" disabled>Perfil Actual</button>
                                            @endif
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{--here end the profiles loop--}}
                    @endif

                    <div class="adaptative-col add-column">
                        <div class="container">
                            <button class="social-card-btn poppings-font" onclick="add_profile();">Agregar Nuevo</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        function add_profile() {
            $('#myModal').load('{{ url('/agregar-perfil') }}', function (response, status, xhr) {
                if (status === "success")
                    $('#myModal').modal('show');
            });
        }

        function deleted(button){
            console.warn('delete');
            var clave = $(button).attr('clave');
            $('#myModal').load( '{{ url('/eliminar-perfil') }}/'+clave,function(response, status, xhr) {
                if (status === "success") {
                    $('#myModal').modal('show');
                }
            } );
        }
    </script>
@endsection
