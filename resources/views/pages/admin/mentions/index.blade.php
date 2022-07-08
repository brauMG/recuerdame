@extends('layouts.app', ['activePage' => 'Menciones', 'titlePage' => __('Menciones')])

@section('content')
    <div class="content">
        <div class="col-12">
            <h3 class="title-page">Información</h3>
        </div>
        <div class="container-reqr-mentions">
            <div class="row">
                <div class="col-12 flex-cards-profile align-items-baseline">

                    <div class="card reqrdame-card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped data-table" id="table">
                                    <thead class="thead-color">
                                    <th class="text-left">Usuario</th>
                                    <th class="text-left">Comentario</th>
                                    <th class="text-left">En Respuesta</th>
                                    <th class="text-left">Fecha</th>
                                    <th class="text-left">Acciones</th>
                                    </thead>
                                    <tbody>
                                        {{--start foreach--}}
                                        <tr>
                                            <td class="text-left">
                                                Nombre de Usuario
                                            </td>
                                            <td class="text-left">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </td>
                                            <td class="text-left">
                                                Nam tellus nisl, euismod a velit id, ornare feugiat nisl. Maecenas ultricies ante non neque tempus, in vulputate massa commodo. Quisque mollis ligula at augue interdum vulputate.
                                            </td>
                                            <td class="text-left">
                                                7 de Julio - 13:21 p.m
                                            </td>
                                            <td>
                                                <a clave="id" onclick="hide(this);" type="button" rel="tooltip" class="btn btn-adjust btn-mentions-status" style="display: block">
                                                    Visible
                                                </a>
                                                <a clave="id" onclick="deleted(this);" type="button" rel="tooltip" class="btn btn-adjust btn-mentions-delete" style="display: block">
                                                    Eliminar
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">
                                                Nombre de Usuario
                                            </td>
                                            <td class="text-left">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </td>
                                            <td class="text-left">

                                            </td>
                                            <td class="text-left">
                                                7 de Julio - 10:54 a.m
                                            </td>
                                            <td>
                                                <a clave="id" onclick="hide(this);" type="button" rel="tooltip" class="btn btn-adjust btn-mentions-status" style="display: block">
                                                    Visible
                                                </a>
                                                <a clave="id" onclick="deleted(this);" type="button" rel="tooltip" class="btn btn-adjust btn-mentions-delete" style="display: block">
                                                    Eliminar
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">
                                                Nombre de Usuario
                                            </td>
                                            <td class="text-left">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </td>
                                            <td class="text-left">
                                                Nam tellus nisl, euismod a velit id, ornare feugiat nisl. Maecenas ultricies ante non neque tempus, in vulputate massa commodo. Quisque mollis ligula at augue interdum vulputate.
                                            </td>
                                            <td class="text-left">
                                                7 de Julio - 13:21 p.m
                                            </td>
                                            <td>
                                                <a clave="id" onclick="hide(this);" type="button" rel="tooltip" class="btn btn-adjust btn-mentions-status" style="display: block">
                                                    Visible
                                                </a>
                                                <a clave="id" onclick="deleted(this);" type="button" rel="tooltip" class="btn btn-adjust btn-mentions-delete" style="display: block">
                                                    Eliminar
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">
                                                Nombre de Usuario
                                            </td>
                                            <td class="text-left">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </td>
                                            <td class="text-left">

                                            </td>
                                            <td class="text-left">
                                                7 de Julio - 10:54 a.m
                                            </td>
                                            <td>
                                                <a clave="id" onclick="hide(this);" type="button" rel="tooltip" class="btn btn-adjust btn-mentions-status" style="display: block">
                                                    Visible
                                                </a>
                                                <a clave="id" onclick="deleted(this);" type="button" rel="tooltip" class="btn btn-adjust btn-mentions-delete" style="display: block">
                                                    Eliminar
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

        {{--function deleted(button){--}}
        {{--    console.warn('delete');--}}
        {{--    var clave = $(button).attr('clave');--}}
        {{--    $('#myModal').load( '{{ url('/my_sites/delete') }}/'+clave,function(response, status, xhr){--}}
        {{--        if (status === "success") {--}}
        {{--            $('#myModal').modal('show');--}}
        {{--        }--}}
        {{--    } );--}}
        {{--}--}}
    </script>
@endsection
