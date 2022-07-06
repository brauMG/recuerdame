@extends('layouts.app', ['activePage' => 'Tablero', 'titlePage' => __('Perfiles')])

@section('content')
    <div class="content">
        <div class="container-reqr">
            <div class="row">
                <div class="col-12 flex-cards">
                    <div class="col-12">
                        <h3 class="title-page">Perfiles</h3>
                    </div>
                    {{--here goes the profiles loop--}}
                    <div class="adaptative-col col-md-6 col-sm-6">
                        <div class="card card-stats card-social card-reqr">
                            <div class="card-header card-header-info card-header-icon">
                                <div class="card-image">
                                    <i><img width="100" src="{{ asset('material') }}/img/example.png"></i>
                                </div>
                                <div class="card-icons">
                                    <img class="card-img-icon" src="{{ asset('material') }}/img/copy.png">
                                    <img class="card-img-icon" src="{{ asset('material') }}/img/bin.png">
                                </div>
                            </div>
                            <div class="card-body pb-0">
                                <h4 class="card-title social-card-title poppings-font-bold">Mariana Fer Garcia</h4>
                                <div style="width: 100%; text-align: left">
                                    <p class="card-category">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="container">
                                    <button class="social-card-btn poppings-font">Gestionar Perfil</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="adaptative-col col-md-6 col-sm-6">
                        <div class="card card-stats card-social card-reqr">
                            <div class="card-header card-header-info card-header-icon">
                                <div class="card-image">
                                    <i><img width="100" src="{{ asset('material') }}/img/example.png"></i>
                                </div>
                                <div class="card-icons">
                                    <img class="card-img-icon" src="{{ asset('material') }}/img/copy.png">
                                    <img class="card-img-icon" src="{{ asset('material') }}/img/bin.png">
                                </div>
                            </div>
                            <div class="card-body pb-0">
                                <h4 class="card-title social-card-title poppings-font-bold">Mariana Fer Garcia</h4>
                                <div style="width: 100%; text-align: left">
                                    <p class="card-category">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="container">
                                    <button class="social-card-btn poppings-font">Gestionar Perfil</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="adaptative-col col-md-6 col-sm-6">
                        <div class="card card-stats card-social card-reqr">
                            <div class="card-header card-header-info card-header-icon">
                                <div class="card-image">
                                    <i><img width="100" src="{{ asset('material') }}/img/example.png"></i>
                                </div>
                                <div class="card-icons">
                                    <img class="card-img-icon" src="{{ asset('material') }}/img/copy.png">
                                    <img class="card-img-icon" src="{{ asset('material') }}/img/bin.png">
                                </div>
                            </div>
                            <div class="card-body pb-0">
                                <h4 class="card-title social-card-title poppings-font-bold">Mariana Fer Garcia</h4>
                                <div style="width: 100%; text-align: left">
                                    <p class="card-category">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="container">
                                    <button class="social-card-btn poppings-font">Gestionar Perfil</button>
                                </div>
                            </div>
                        </div>
                    </div>                    {{--here end the profiles loop--}}

                    <div class="adaptative-col">
                        <div class="container">
                            <button class="social-card-btn poppings-font">Agregar Nuevo</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
