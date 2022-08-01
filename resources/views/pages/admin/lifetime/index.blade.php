@extends('layouts.app', ['activePage' => 'Trayectoria', 'titlePage' => __('Trayectoria')])

@section('content')
    <div class="content">
        <div style="display: flex; flex-wrap: wrap; align-items: center;">
            <div class="col-6">
                <h3 class="title-page">Trayectoria</h3>
            </div>
            <div class="col-6" style="text-align: end">
                <a href="{{ route('CreatePost') }}" class="btn btn-mentions-status">Nueva Publicación <i class="material-icons">add_circle_outline</i></a>
            </div>
        </div>
        <div class="container-reqr-mentions">
            <div class="row">
                <div class="col-12 flex-cards-profile align-items-baseline">

                    <div class="card reqrdame-card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped data-table" id="table">
                                    <thead class="thead-color">
                                    <th class="text-left">Titulo</th>
                                    <th class="text-left">Descripción</th>
                                    <th class="text-left">Contenido</th>
                                    <th class="text-left">Fecha</th>
                                    <th class="text-left">Lugar</th>
                                    <th class="text-left">Acciones</th>
                                    </thead>
                                    <tbody>
                                    {{--start foreach--}}
                                    <tr>
                                        <td class="text-left">
                                            Titulo del Post
                                        </td>
                                        <td class="text-left">
                                            Lorem ipsum dolor sit amet
                                        </td>
                                        <td class="text-left">
                                            TEXTO
                                        </td>
                                        <td class="text-left">
                                            7 de Julio
                                        </td>
                                        <td class="text-left">
                                            Ciudad de Mexico
                                        </td>
                                        <td>
                                            <a clave="id" onclick="hide(this);" type="button" rel="tooltip" class="btn btn-adjust btn-mentions-status" style="display: block">
                                                Editar
                                            </a>
                                            <a clave="id" onclick="deleted(this);" type="button" rel="tooltip" class="btn btn-adjust btn-mentions-delete" style="display: block">
                                                Eliminar
                                            </a>
                                            <a clave="id" onclick="deleted(this);" type="button" rel="tooltip" class="btn btn-adjust btn-mentions-delete" style="display: block">
                                                Con Menciones
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-left">
                                            Titulo del Post
                                        </td>
                                        <td class="text-left">
                                            Lorem ipsum dolor sit amet
                                        </td>
                                        <td class="text-left">
                                            IMAGEN
                                        </td>
                                        <td class="text-left">
                                            7 de Julio
                                        </td>
                                        <td class="text-left">
                                            Ciudad de Mexico
                                        </td>
                                        <td>
                                            <a clave="id" onclick="hide(this);" type="button" rel="tooltip" class="btn btn-adjust btn-mentions-status" style="display: block">
                                                Editar
                                            </a>
                                            <a clave="id" onclick="deleted(this);" type="button" rel="tooltip" class="btn btn-adjust btn-mentions-delete" style="display: block">
                                                Eliminar
                                            </a>
                                            <a clave="id" onclick="deleted(this);" type="button" rel="tooltip" class="btn btn-adjust btn-mentions-delete" style="display: block">
                                                Sin Menciones
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-left">
                                            Titulo del Post
                                        </td>
                                        <td class="text-left">
                                            Lorem ipsum dolor sit amet
                                        </td>
                                        <td class="text-left">
                                            VIDEO
                                        </td>
                                        <td class="text-left">
                                            7 de Julio
                                        </td>
                                        <td class="text-left">
                                            Ciudad de Mexico
                                        </td>
                                        <td>
                                            <a clave="id" onclick="hide(this);" type="button" rel="tooltip" class="btn btn-adjust btn-mentions-status" style="display: block">
                                                Editar
                                            </a>
                                            <a clave="id" onclick="deleted(this);" type="button" rel="tooltip" class="btn btn-adjust btn-mentions-delete" style="display: block">
                                                Eliminar
                                            </a>
                                            <a clave="id" onclick="deleted(this);" type="button" rel="tooltip" class="btn btn-adjust btn-mentions-delete" style="display: block">
                                                Con Menciones
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-left">
                                            Titulo del Post
                                        </td>
                                        <td class="text-left">
                                            Lorem ipsum dolor sit amet
                                        </td>
                                        <td class="text-left">
                                            AUDIO
                                        </td>
                                        <td class="text-left">
                                            7 de Julio
                                        </td>
                                        <td class="text-left">
                                            Ciudad de Mexico
                                        </td>
                                        <td>
                                            <a clave="id" onclick="hide(this);" type="button" rel="tooltip" class="btn btn-adjust btn-mentions-status" style="display: block">
                                                Editar
                                            </a>
                                            <a clave="id" onclick="deleted(this);" type="button" rel="tooltip" class="btn btn-adjust btn-mentions-delete" style="display: block">
                                                Eliminar
                                            </a>
                                            <a clave="id" onclick="deleted(this);" type="button" rel="tooltip" class="btn btn-adjust btn-mentions-delete" style="display: block">
                                                Con Menciones
                                            </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="text-left">
                                            Titulo del Post
                                        </td>
                                        <td class="text-left">
                                            Lorem ipsum dolor sit amet
                                        </td>
                                        <td class="text-left">
                                            ENLACE
                                        </td>
                                        <td class="text-left">
                                            7 de Julio
                                        </td>
                                        <td class="text-left">
                                            Ciudad de Mexico
                                        </td>
                                        <td>
                                            <a clave="id" onclick="hide(this);" type="button" rel="tooltip" class="btn btn-adjust btn-mentions-status" style="display: block">
                                                Editar
                                            </a>
                                            <a clave="id" onclick="deleted(this);" type="button" rel="tooltip" class="btn btn-adjust btn-mentions-delete" style="display: block">
                                                Eliminar
                                            </a>
                                            <a clave="id" onclick="deleted(this);" type="button" rel="tooltip" class="btn btn-adjust btn-mentions-delete" style="display: block">
                                                Sin Menciones
                                            </a>
                                        </td>
                                    </tr>

                                    {{--end foreach--}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        var table = $('.data-table').DataTable({
                responsive: true,
                order: [[ 3, "desc" ]],
                lengthMenu: [
                    [10, 25, 50, -1],
                    ['10', '25', '50', 'Mostrar todo']
                ],
                dom: 'Blfrtip',
                buttons: [
                    { extend: 'pdf', text: 'Exportar a PDF',charset: 'UTF-8' },
                    { extend: 'csv', text: 'Exportar a EXCEL',charset: 'UTF-8'  }
                ],
                language: {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla =(",
                    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    },
                    "buttons": {
                        "copy": "Copiar",
                        "colvis": "Visibilidad",
                        "print": "Imprimir",
                        "csv": "Excel"
                    }
                },

            }
        );

    </script>
@endsection
