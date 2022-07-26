<div class="wrapper ">
    @include('layouts.navbars.sidebar-alt')
    <div class="main-panel alt-main-panel">
        @include('layouts.navbars.navs.auth-alt')
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"></div>
        <div class="container">
            @if(isset($errors) && $errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session()->has('success'))
                <div class="alert alert-success">
                    <ul>
                        @foreach(session()->get('success') as $message)
                            <li>{{$message}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        @yield('content')
    </div>
</div>
