@extends('layouts.app-alt', ['activePage' => 'Perfil', 'titlePage' => __('Perfil')])

@section('content')
    <div class="content-profile-1">
        <div class="container-cover-1">
            @if($profile->cover_image === null)
                <img class="cover-1" src="{{ URL::to('/') }}/cover-pictures/cover.png">
            @else
                <img class="cover-1" src="{{ URL::to('/') }}/cover-pictures/{{$profile->cover_image}}">
            @endif
        </div>
        <div class="container-main-1">
            <div class="container-info-1">
                <div class="container-profile-img-1">
                    <img class="pic-1" src="{{ URL::to('/') }}/profile-pictures/{{$profile->profile_image}}">
                </div>
                <h2 class="profile-name">{{$profile->name}} <strong class="strong">{{$profile->last_name}}</strong></h2>
            </div>
            <div class="container-empty-element-1">

            </div>
            <div class="tab tabs--active container-element-1">
                <img class="element-icon" src="{{ asset('material') }}/profile/g-trayectoria.png">
                <h5 class="element-text">Trayectoria</h5>
            </div>
            <div class="tab container-element-1">
                <img class="element-icon" src="{{ asset('material') }}/profile/g-perfil.png">
                <h5 class="element-text">Perfil</h5>
            </div>
            <div class="tab container-element-1">
                <img class="element-icon" src="{{ asset('material') }}/profile/g-menciones.png">
                <h5 class="element-text">Menciones</h5>
            </div>
            <div class="tab container-element-1">
                <img class="element-icon" src="{{ asset('material') }}/profile/g-galeria.png">
                <h5 class="element-text">Galeria</h5>
            </div>
        </div>
        <div class="container--content">
            <div class="feed-tab content-tab content--active">
                <div class="line-wrapper">
                    •
                </div>

                <div class="post-wrapper">

                    <header class="cf">
                        <h1 class="post-title">
                            This is the post title
                        </h1>
                        <p class="post-metadata">21 de Agosto de 2020, en The Place</p>
                    </header>

                    <p class="post-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in elementum justo. Integer faucibus mauris non imperdiet luctus. Donec ut quam sit amet mauris bibendum convallis in a risus. Ut ultricies sagittis risus, vitae pulvinar enim imperdiet non. Vestibulum at scelerisque est.
                    </p>
                    <img class="img-content" src="https://www.tesla.com/sites/default/files/red-tesla-model-s.jpg" />

                </div>
                {{--here starts the foreach--}}
            </div>
            <div class="bio-tab content-tab">
                Tab Bio
                {{--here starts the foreach--}}
            </div>
            <div class="mentions-tab content-tab">
                Tab Mentions
                {{--here starts the foreach--}}
            </div>
            <div class="gallery-tab content-tab">
                Tab Gallery
                {{--here starts the foreach--}}
            </div>
        </div>
    </div>

    <script>
        const tabs = document.querySelectorAll(".tab");
        const contents = document.querySelectorAll(".content-tab");

        for (let i = 0; i < tabs.length; i++) {
            tabs[i].addEventListener("click", () => {
                for (let j = 0; j < contents.length; j++) {
                    contents[j].classList.remove("content--active");
                }
                for (let jj = 0; jj < tabs.length; jj++) {
                    tabs[jj].classList.remove("tabs--active");
                }
                contents[i].classList.add("content--active");
                tabs[i].classList.add("tabs--active");
            });
        }

    </script>
@endsection
