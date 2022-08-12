@extends('layouts.app', ['activePage' => 'Información', 'titlePage' => __('Información')])

@section('content')
    <div class="content">
        <form action="{{route('UpdateInformation', $profile->id)}}" method="POST" enctype="multipart/form-data" style="margin-bottom: unset !important;">
            @method('PUT')
            @csrf
            <div class="col-12 with-options">
                <h3 class="title-page option-title">Información</h3>
                <div class="form-group option-mentions">
                    <span class="pages-span">Genero</span>
                    <select name="gender" id="gender" class="form-control own-form-input own-select text-left ">
                        <option class="custom-select" value="null" @if($profile->gender === null) selected @endif>Sin Seleccionar</option>
                        <option class="custom-select" value="0" @if($profile->gender === '0') selected @endif>Femenino</option>
                        <option class="custom-select" value="1" @if($profile->gender === '1') selected @endif>Masculino</option>
                    </select>
                </div>
                <div class="form-group option-mentions">
                    <span class="pages-span">Menciones</span>
                    <select name="allow_mentions" id="allow_mentions" class="form-control own-form-input own-select text-left" required>
                        <option class="custom-select" value="0" @if($profile->allow_mentions === '0') selected @endif>Bloqueadas</option>
                        <option class="custom-select" value="1" @if($profile->allow_mentions === '1') selected @endif>Permitidas</option>
                    </select>
                </div>
                <button type="submit" class="social-card-btn poppings-font mr-auto ml-auto mt-4 option-save" id="submit_button">Guardar</button>
            </div>
            <div class="container-reqr-profile">
                <div class="row">
                    <div class="col-12 flex-cards-profile">

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

                        <div class="outer-column-left">
                            <div class="cover-container">
                                <div class="img-changer-container">
                                    <h6 id="new-cover" class="new-cover-pic-msg" style="display: none">Imagen Seleccionada, Presionar Guardar Para realizar el cambio</h6>
                                    @if($profile->cover_image === null)
                                        <img class="cover-pic" src="{{ URL('/') }}/material/default-pictures/cover.png">
                                        <button clave="id" onclick="document.getElementById('image-cover').click()" type="button" rel="tooltip" class="btn btn-sm btn-adjust btn-edit-cover">
                                            <i class="material-icons-outlined">edit</i>
                                        </button>
                                    @else
                                        <img class="cover-pic" src="{{ URL('/') }}/user-media/{{$profile->url_qr}}/cover-picture/{{$profile->cover_image}}">
                                        <button clave="id" onclick="document.getElementById('image-cover').click()" type="button" rel="tooltip" class="btn btn-sm btn-adjust btn-edit-cover">
                                            <i class="material-icons-outlined">edit</i>
                                        </button>
                                    @endif
                                </div>
                                <div class="hidden-input-container">
                                    <input type="file" id="image-cover" name="cover_image" onchange="validateImageCover()" style="display: none"/>
                                </div>
                            </div>
                            <div class="inner-flex">
                                <div class="inner-column-left">
                                    <div class="profile-container">
                                        <div class="img-changer-container">
                                            <h6 id="new-profile" class="new-profile-pic-msg" style="display: none">Imagen Seleccionada, Presionar Guardar Para realizar el cambio</h6>
                                            @if($profile->profile_image === null)
                                                <img class="profile-pic" src="{{ URL::to('/') }}/material/default-pictures/profile.png">
                                            @else
                                                <img class="profile-pic" src="{{ URL('/') }}/user-media/{{$profile->url_qr}}/profile-picture/{{$profile->profile_image}}">
                                            @endif
                                            <button clave="id" onclick="document.getElementById('image-profile').click()" type="button" rel="tooltip" class="btn btn-sm btn-adjust btn-edit-profile">
                                                <i class="material-icons-outlined">edit</i>
                                            </button>
                                        </div>
                                        <div class="hidden-input-container">
                                            <input type="file" id="image-profile" name="profile_image" onchange="validateImageProfile()" style="display: none"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="inner-column-right">
                                    <div class="inner-inputs-container">
                                        <div class="form-group">
                                            <span class="pages-span">Nombre en Enlace</span>
                                            <input type="text" placeholder="Sin espacios o caracteres especiales" value="{{$profile->url_qr}}" class="form-control own-form-input text-left @error('url_qr') is-invalid @enderror" id="url_qr" name="url_qr" onkeydown="return /[0-9a-zA-Z-_]/i.test(event.key)" required>
                                        </div>
                                        <div class="form-group">
                                            <span class="pages-span">Nombre</span>
                                            <input type="text" class="form-control own-form-input text-left " id="name" name="name" value="{{$profile->name}}" required>
                                        </div>
                                        <div class="form-group">
                                            <span class="pages-span">Apellidos</span>
                                            <input type="text" class="form-control own-form-input text-left " id="last_name" name="last_name" value="{{$profile->last_name}}" required>
                                        </div>
                                        <div class="form-group">
                                            <span class="pages-span">País de nacimiento</span>
                                            <input type="text" class="form-control own-form-input text-left" id="birth_country" name="birth_country" value="{{$profile->birth_country}}">
                                        </div>
                                        <div class="form-group">
                                            <span class="pages-span">Ciudad de nacimiento</span>
                                            <input type="text" class="form-control own-form-input text-left" id="birth_city" name="birth_city" value="{{$profile->birth_city}}">
                                        </div>
                                        <div class="form-group">
                                            <span class="pages-span">Estado donde nacio</span>
                                            <input type="text" class="form-control own-form-input text-left" id="birth_state" name="birth_state" value="{{$profile->birth_state}}">
                                        </div>
                                        <div class="form-group">
                                            <span class="pages-span">Lugar donde fallecio</span>
                                            <input type="text" class="form-control own-form-input text-left" id="passing_location" name="passing_location" value="{{$profile->passing_location}}">
                                        </div>
                                        <div class="form-group">
                                            <span class="pages-span">Idiomas hablados</span>
                                            <input type="text" class="form-control own-form-input text-left" id="languages" name="languages" value="{{$profile->languages}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="outer-column-right">
                            <div class="inputs-container">
                                <div class="form-group initial-right">
                                    <span class="pages-span">Diseño del Perfil</span> <a href="/preview-profiles/{{$profile->type}}.png" id="style_preview" class="link-decoration" target="_blank">(Vista Previa)</a>
                                    <select name="type" id="type" class="form-control own-form-input own-select text-left" onchange="setLink()" required>
                                        <option class="custom-select" value="1" @if($profile->type === '1') selected @endif>Diseño 1</option>
                                        <option class="custom-select" value="2" @if($profile->type === '2') selected @endif>Diseño 2</option>
                                        <option class="custom-select" value="3" @if($profile->type === '3') selected @endif>Diseño 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <span class="pages-span">En vida fue</span>
                                    <textarea rows="5" class="form-control own-form-input text-left " id="in_life" name="in_life">{{$profile->in_life}}</textarea>
                                </div>
                                <div class="form-group">
                                    <span class="pages-span">Pasatiempos</span>
                                    <textarea rows="5" class="form-control own-form-input text-left " id="hobbies" name="hobbies">{{$profile->birth_country}}</textarea>
                                </div>
                                <div class="form-group">
                                    <span class="pages-span">Día de nacimiento</span>
                                    <input type="date" class="form-control own-form-input text-left" id="birth_date" name="birth_date" value="{{$profile->birth_date}}" required>
                                </div>
                                <div class="form-group">
                                    <span class="pages-span">Día en que fallecio</span>
                                    <input type="date" class="form-control own-form-input text-left" id="passing_date" name="passing_date" value="{{$profile->passing_date}}" required>
                                </div>
                                <div class="form-group">
                                    <span class="pages-span">Familiares</span>
                                    <textarea rows="3" class="form-control own-form-input text-left " id="family_members" name="family_members">{{$profile->family_members}}</textarea>
                                </div>
                                <div class="form-group">
                                    <span class="pages-span">Citas</span>
                                    <textarea rows="3" class="form-control own-form-input text-left " id="quotes" name="quotes">{{$profile->hobbies}}</textarea>
                                </div>
                                <div class="form-group">
                                    <span class="pages-span">Datos interesantes</span>
                                    <textarea rows="3" class="form-control own-form-input text-left " id="interest_facts" name="interest_facts">{{$profile->interest_facts}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>

        function validateImageCover() {
            var formData = new FormData();
            var file = document.getElementById('image-cover').files[0];
            formData.append("Filedata", file);
            var t = file.type.split('/').pop().toLowerCase();
            let cover_msg = document.getElementById('new-cover');
            if (t !== "jpeg" && t !== "jpg" && t !== "png" && t !== "bmp" && t !== "gif") {
                alert('Please select a valid image file');
                document.getElementById('image-cover').value = '';
                return false;
            }
            else {
                cover_msg.removeAttribute('style');
                cover_msg.setAttribute('style', 'display:block');
            }
            return true;
        }

        function validateImageProfile() {
            var formData = new FormData();
            var file = document.getElementById('image-profile').files[0];
            formData.append("Filedata", file);
            var t = file.type.split('/').pop().toLowerCase();
            let profile_msg = document.getElementById('new-profile');
            if (t !== "jpeg" && t !== "jpg" && t !== "png" && t !== "bmp" && t !== "gif") {
                alert('Please select a valid image file');
                document.getElementById('image-profile').value = '';
                return false;
            }
            else {
                profile_msg.removeAttribute('style');
                profile_msg.setAttribute('style', 'display:block');
            }
            return true;
        }

        function setLink() {
            let type = document.getElementById('type').value;
            let preview = document.getElementById('style_preview');
            preview.removeAttribute('href');
            preview.setAttribute('href', '/preview-profiles/'+type+'.png');
        }

    </script>
@endsection
