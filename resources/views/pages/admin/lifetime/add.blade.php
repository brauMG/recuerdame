@extends('layouts.app', ['activePage' => 'Trayectoria', 'titlePage' => __('Trayectoria')])

@section('content')
    <div class="content">
        <div class="col-12">
            <h3 class="title-page">Trayectoria - Nueva Publicación</h3>
        </div>
        <div class="container-reqr-profile">
            <div class="row">
                <div class="col-12 flex-cards-profile">

                    <div class="outer-column-left">
                        <div class="inner-flex add-post-left">
                            <div class="inner-column-left">
                                <div class="media-container">
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
                                        <span class="pages-span">Titulo</span>
                                        <input type="text" class="form-control own-form-input text-left" id="title" name="title" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <span class="pages-span">Contenido del Post</span>
                                        <select name="type" id="type" class="form-control own-form-input own-select text-left" required>
                                            <option class="custom-select" value="null" selected>Sin Seleccionar</option>
                                            <option class="custom-select" value="text">Solamente Texto</option>
                                            <option class="custom-select" value="image">Imagen</option>
                                            <option class="custom-select" value="album">Varias Imagenes</option>
                                            <option class="custom-select" value="self_video">Video Propio</option>
                                            <option class="custom-select" value="provided_video_yt">Video (Youtube)</option>
                                            <option class="custom-select" value="provided_video_vm">Video (Vimeo)</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <span class="pages-span">Permitir Menciones</span>
                                        <select name="type" id="type" class="form-control own-form-input own-select text-left" required>
                                            <option class="custom-select" value="yes" selected>Si</option>
                                            <option class="custom-select" value="no">No</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <span class="pages-span">Fecha</span>
                                        <input type="date" class="form-control own-form-input text-left" id="date" name="date" value="">
                                    </div>
                                    <div class="form-group">
                                        <span class="pages-span">Lugar</span>
                                        <input type="text" class="form-control own-form-input text-left" id="place" name="place" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="outer-column-right">
                        <div class="inputs-container">
                            <div class="form-group">
                                <span class="pages-span">Descripción</span>
                                <textarea rows="23" class="form-control own-form-input text-left" id="description" name="description"></textarea>
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
