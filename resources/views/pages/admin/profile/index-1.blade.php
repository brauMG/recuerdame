@extends('layouts.app-alt', ['activePage' => 'Perfil', 'titlePage' => __('Perfil')])

@section('content')
    <div class="content-profile-1">
        <div class="container-cover-1">
            @if($profile->cover_image === null)
                <img class="cover-1" src="{{ URL::to('/') }}/material/default-pictures/cover.png">
            @else
                <img class="cover-1" src="{{ URL('/') }}/user-media/{{$profile->url_qr}}/cover-picture/{{$profile->cover_image}}">
            @endif
        </div>
        <div class="container-main-1">
            <div class="container-info-1">
                <div class="container-profile-img-1">
                    @if($profile->profile_image === null)
                        <img class="pic-1" src="{{ URL::to('/') }}/material/default-pictures/profile.png">
                    @else
                        <img class="pic-1" src="{{ URL('/') }}/user-media/{{$profile->url_qr}}/profile-picture/{{$profile->cover_image}}">
                    @endif
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
            <div class="content-tab content--active">
                <div class="feed-tab">
                    {{--here starts the foreach--}}
                    <div class="post-container">
                        <div class="line-wrapper">
                            •
                        </div>

                        <div class="post-wrapper">

                            <header class="cf">
                                <h1 class="post-title">
                                    This is the post title
                                </h1>
                                <p class="post-metadata">21 de Agosto de 2015, en The Place</p>
                            </header>

                            <p class="post-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in elementum justo. Integer faucibus mauris non imperdiet luctus. Donec ut quam sit amet mauris bibendum convallis in a risus. Ut ultricies sagittis risus, vitae pulvinar enim imperdiet non. Vestibulum at scelerisque est.
                            </p>
                            <img class="img-content" src="https://upload.wikimedia.org/wikipedia/commons/d/df/Family_Portrait.jpg" />

                        </div>
                    </div>
                    {{--here ends the foreach--}}
                    {{--here starts the foreach--}}
                    <div class="post-container">
                        <div class="line-wrapper">
                            •
                        </div>

                        <div class="post-wrapper">

                            <header class="cf">
                                <h1 class="post-title">
                                    Another post title
                                </h1>
                                <p class="post-metadata">09 de Julio de 2018, en The Other Place</p>
                            </header>

                            <p class="post-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim aliquam commodo. Nulla nec semper ligula, quis mollis turpis. Cras ullamcorper feugiat velit, ac fermentum magna dapibus at. Pellentesque et iaculis mi. Donec venenatis, nibh eu placerat sodales, odio leo sollicitudin risus, in lacinia felis urna et est. Fusce sollicitudin vestibulum diam, ac tempus urna sagittis in. Suspendisse potenti. Duis ac arcu vitae eros fermentum lobortis nec dignissim nisl. Phasellus egestas egestas tincidunt. Aliquam mollis nibh vitae iaculis porttitor. Donec risus dui, rhoncus sed diam at, feugiat finibus dolor. Donec auctor quis nisl quis dictum. Donec dapibus ullamcorper tortor, id viverra lectus. Nam finibus massa laoreet nunc blandit condimentum et eget ipsum. Etiam molestie felis vitae quam condimentum consequat.
                            </p>
                            <img class="img-content" src="https://media.cntraveler.com/photos/5c0840017732ca62ae9f72e9/16:9/w_2580%2Cc_limit/Hallstatt%2520GettyImages-899427986.jpg" />

                        </div>
                    </div>
                    {{--here ends the foreach--}}
                </div>
            </div>
            <div class="content-tab">
                <div class="bio-tab">
                    Tab Bio
                    {{--here starts the foreach--}}
                </div>
            </div>
            <div class="content-tab">
                <div class="mentions-tab">
                    Tab Mentions
                    {{--here starts the foreach--}}
                </div>
            </div>
            <div class="content-tab">
                <div class="gallery-tab">
                    Tab Gallery
                    {{--here starts the foreach--}}
                </div>
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
