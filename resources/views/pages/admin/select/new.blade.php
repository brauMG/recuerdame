<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo Perfil</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="material-icons">close</i>
            </button>
        </div>
        <form action="{{route('CreateProfile')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="_token"/>
                <div class="row">
                    <input type="hidden" name="type" value="1">
                    <input type="hidden" name="allow_mentions" value="1">

                    <div class="col-md-12">
                        <div class="form-group">
                            <span class="pages-span">Foto de Perfil</span>
                            <input type="file" class="form-control own-form-input text-left @error('name') is-invalid @enderror" id="image" name="profile_image" onchange="validateImage()" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <span class="pages-span">Nombre</span>
                            <input type="text" class="form-control own-form-input text-left @error('name') is-invalid @enderror" id="name" name="name" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <span class="pages-span">Apellidos</span>
                            <input type="text" class="form-control own-form-input text-left @error('last_name') is-invalid @enderror" id="last_name" name="last_name" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <span class="pages-span">Fecha de Nacimiento</span>
                            <input type="date" class="form-control own-form-input text-left @error('birth_date') is-invalid @enderror" id="birth_date" name="birth_date" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <span class="pages-span">Fecha de Fallecimiento</span>
                            <input type="date" class="form-control own-form-input text-left @error('passing_date') is-invalid @enderror" id="passing_date" name="passing_date" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <span class="pages-span">Nombre en Enlace (debe ser único)</span>
                            <input type="text" placeholder="Sin espacios o caracteres especiales" class="form-control own-form-input text-left @error('url_qr') is-invalid @enderror" id="url_qr" name="url_qr" onkeydown="return /[0-9a-zA-Z-_]/i.test(event.key)" required>
                        </div>
                    </div>

                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn close-btn" data-dismiss="modal"><i class="material-icons">close</i>Cerrar</button>
                <button type="submit" class="btn save-btn"><i class="material-icons">check</i>Guardar</button>
            </div>
        </form>
    </div>
</div>
<script>
    function validateImage() {
        var formData = new FormData();
        var file = document.getElementById('image').files[0];
        formData.append("Filedata", file);
        var t = file.type.split('/').pop().toLowerCase();
        if (t !== "jpeg" && t !== "jpg" && t !== "png" && t !== "bmp" && t !== "gif") {
            alert('Por favor selecciona un formato correcto');
            document.getElementById('image').value = '';
            return false;
        }
        return true;
    }
</script>
