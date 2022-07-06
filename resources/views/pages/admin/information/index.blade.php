@extends('layouts.app', ['activePage' => 'Información', 'titlePage' => __('Información')])

@section('content')
    <div class="content">
        <div class="col-12">
            <h3 class="title-page">Información</h3>
        </div>
        <div class="container-reqr-profile">
            <div class="row">
                <div class="col-12 flex-cards-profile">

                    <div class="outer-column-left">
                        <div class="cover-container">
                            <div class="img-changer-container">
                                <img class="cover-pic" src="{{ asset('material') }}/profile/cover.png">
                                <button clave="id" onclick="deletedCover(this);" type="button" rel="tooltip" class="btn btn-sm btn-adjust btn-delete-cover">
                                    <i class="material-icons-outlined">delete</i>
                                </button>
                                <button clave="id" onclick="document.getElementById('image').click()" type="button" rel="tooltip" class="btn btn-sm btn-adjust btn-edit-cover">
                                    <i class="material-icons-outlined">edit</i>
                                </button>
                            </div>
                            <div class="hidden-input-container">
                                <input type="file" id="image-cover" name="cover_image" onchange="validateImageCover()" style="display: none"/>
                                <h6 class="new-image-msg" hidden>Imagen Seleccionada, Presionar Guardar Para realizar el cambio</h6>
                            </div>
                        </div>
                        <div class="inner-flex">
                            <div class="inner-column-left">
                                <div class="profile-container">
                                    <div class="img-changer-container">
                                        <img class="profile-pic" src="{{ asset('material') }}/profile/profile.png">
                                        <button clave="id" onclick="deletedProfile(this);" type="button" rel="tooltip" class="btn btn-sm btn-adjust btn-delete-profile">
                                            <i class="material-icons-outlined">delete</i>
                                        </button>
                                        <button clave="id" onclick="document.getElementById('image').click()" type="button" rel="tooltip" class="btn btn-sm btn-adjust btn-edit-profile">
                                            <i class="material-icons-outlined">edit</i>
                                        </button>
                                    </div>
                                    <div class="hidden-input-container">
                                        <input type="file" id="image-profile" name="profile_image" onchange="validateImageProfile()" style="display: none"/>
                                        <h6 class="new-image-msg" hidden>Imagen Seleccionada, Presionar Guardar Para realizar el cambio</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="inner-column-right">
                                <div class="inner-inputs-container">
                                    <div class="form-group">
                                        <span class="pages-span">Nombre</span>
                                        <input type="text" class="form-control own-form-input text-left " id="name" name="name" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <span class="pages-span">Apellidos</span>
                                        <input type="text" class="form-control own-form-input text-left " id="last_name" name="last_name" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <span class="pages-span">Genero</span>
                                        <select name="gender" id="gender" class="form-control own-form-input own-select text-left ">
                                            <option class="custom-select" value="null" selected>Sin Seleccionar</option>
                                            <option class="custom-select" value="0">Femenino</option>
                                            <option class="custom-select" value="1">Masculino</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <span class="pages-span">País de nacimiento</span>
                                        <input type="text" class="form-control own-form-input text-left" id="birth_country" name="birth_country" value="">
                                    </div>
                                    <div class="form-group">
                                        <span class="pages-span">Ciudad de nacimiento</span>
                                        <input type="text" class="form-control own-form-input text-left" id="birth_city" name="birth_city" value="">
                                    </div>
                                    <div class="form-group">
                                        <span class="pages-span">Estado de nacimiento</span>
                                        <input type="text" class="form-control own-form-input text-left" id="birth_state" name="birth_state" value="">
                                    </div>
                                    <div class="form-group">
                                        <span class="pages-span">Lugar donde fallecio</span>
                                        <input type="text" class="form-control own-form-input text-left" id="passing_location" name="passing_location" value="">
                                    </div>
                                    <div class="form-group">
                                        <span class="pages-span">Idiomas hablados</span>
                                        <input type="text" class="form-control own-form-input text-left" id="languages" name="languages" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="outer-column-right">
                        <div class="inputs-container">
                            <div class="form-group">
                                <span class="pages-span">Día de nacimiento</span>
                                <input type="date" class="form-control own-form-input text-left" id="birth_date" name="birth_date" value="" required>
                            </div>
                            <div class="form-group">
                                <span class="pages-span">Día en que fallecio</span>
                                <input type="date" class="form-control own-form-input text-left" id="passing_date" name="passing_date" value="" required>
                            </div>
                            <div class="form-group">
                                <span class="pages-span">En vida fue</span>
                                <textarea rows="5" class="form-control own-form-input text-left " id="in_life" name="in_life"></textarea>
                            </div>
                            <div class="form-group">
                                <span class="pages-span">Pasatiempos</span>
                                <textarea rows="5" class="form-control own-form-input text-left " id="hobbies" name="hobbies"></textarea>
                            </div>
                            <div class="form-group">
                                <span class="pages-span">Citas</span>
                                <textarea rows="2" class="form-control own-form-input text-left " id="quotes" name="quotes"></textarea>
                            </div>
                            <div class="form-group">
                                <span class="pages-span">Familiares</span>
                                <textarea rows="2" class="form-control own-form-input text-left " id="family_members" name="family_members"></textarea>
                            </div>
                            <div class="form-group">
                                <span class="pages-span">Datos interesantes</span>
                                <textarea rows="3" class="form-control own-form-input text-left " id="interest_facts" name="interest_facts"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        function validateImageCover() {
            var formData = new FormData();
            var file = document.getElementById('image-cover').files[0];
            formData.append("Filedata", file);
            var t = file.type.split('/').pop().toLowerCase();
            if (t !== "jpeg" && t !== "jpg" && t !== "png" && t !== "bmp" && t !== "gif") {
                alert('Please select a valid image file');
                document.getElementById('image-cover').value = '';
                return false;
            }
            return true;
        }

        function validateImageProfile() {
            var formData = new FormData();
            var file = document.getElementById('image-profile').files[0];
            formData.append("Filedata", file);
            var t = file.type.split('/').pop().toLowerCase();
            if (t !== "jpeg" && t !== "jpg" && t !== "png" && t !== "bmp" && t !== "gif") {
                alert('Please select a valid image file');
                document.getElementById('image-profile').value = '';
                return false;
            }
            return true;
        }

        function deletedCover(button){
            console.warn('delete');
            var clave = $(button).attr('clave');
            $('#myModal').load( '{{ url('/informacion/delete-cover') }}/'+clave,function(response, status, xhr){
                if (status === "success") {
                    $('#myModal').modal('show');
                }
            } );
        }

        function deletedProfile(button){
            console.warn('delete');
            var clave = $(button).attr('clave');
            $('#myModal').load( '{{ url('/informacion/delete-profile') }}/'+clave,function(response, status, xhr){
                if (status === "success") {
                    $('#myModal').modal('show');
                }
            } );
        }
    </script>
@endsection
