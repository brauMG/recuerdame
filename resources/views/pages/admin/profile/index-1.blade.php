@extends('layouts.app-alt', ['activePage' => 'Perfil', 'titlePage' => __('Perfil')])

@section('content')
    <div class="content-profile-1">
        <div class="container-cover-1">
            <img class="cover-1" src="{{ asset('material') }}/profile/cover.png">
        </div>
        <div class="container-main-1">
            <div class="container-info-1">
                <div class="container-profile-img-1">
                    <img class="pic-1" src="{{ asset('material') }}/profile/pic1.png">
                </div>
                <h2 class="profile-name">Mariana <strong class="strong">Fer Garcia</strong></h2>
            </div>
            <div class="container-empty-element-1">

            </div>
            <div class="container-empty-element-1">

            </div>
            <div class="container-element-1">
                <img class="element-icon" src="{{ asset('material') }}/profile/g-trayectoria.png">
                <h5 class="element-text">Trayectoria</h5>
            </div>
            <div class="container-element-1">
                <img class="element-icon" src="{{ asset('material') }}/profile/g-perfil.png">
                <h5 class="element-text">Perfil</h5>
            </div>
            <div class="container-element-1">
                <img class="element-icon" src="{{ asset('material') }}/profile/g-menciones.png">
                <h5 class="element-text">Menciones</h5>
            </div>
            <div class="container-element-1">
                <img class="element-icon" src="{{ asset('material') }}/profile/g-galeria.png">
                <h5 class="element-text">Galeria</h5>
            </div>
        </div>
        <div class="container-feed-1">
            Tab Feed
            {{--here starts the foreach--}}
        </div>
        <div class="container-bio-1">
            Tab Bio
            {{--here starts the foreach--}}
        </div>
        <div class="container-mentions-1">
            Tab Mentions
            {{--here starts the foreach--}}
        </div>
        <div class="container-galley-1">
            Tab Gallery
            {{--here starts the foreach--}}
        </div>
    </div>
@endsection
