@extends('layouts.app_data')
@push('css')
<link rel="stylesheet" href="{{ asset('datatable/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('datatable/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('datatable/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('datatable/css/buttons.bootstrap4.min.css') }}">
@endpush
<style>
    .form-control {
        border: 0px !important;
    }
   .line {
        height: 2px;
        width: 100%; /* Cambiado a 100% para que ocupe todo el ancho */
        background-color: gray; /* Color por defecto */
        transition: background-color 0.3s; /* Transiciones más rápidas */
        margin-top: 5px;
    }

    .line.success {
        background-color: rgb(0, 225, 255);
    }

    .line.error {
        background-color: red;
    }

    .error-message {
        color: red;
        font-size: 0.75em;
    }
    </style>
<style>
    .table td{
        padding: 2px !important;
        margin: 0 !important;
    }
    .userTest_wrapper button {
      background:linear-gradient(45deg, #00dcff, #959ba1) !important;
      color: white !important;
      border: none !important;
      border-radius: 5px !important;
      padding: 3px 5px !important;
      margin: 2px !important;
      transition: background 0.3s, box-shadow 0.3s !important;
  }
  .userTest_wrapper button:hover {
      background: linear-gradient(45deg, #829dbb, #bcc5cf) !important;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2) !important;
  }

  /* Estilo para el contenedor de botones */
  .dataTables_wrapper button {
      margin-bottom: 10px !important;
  }
  </style>
@section('content')
<section class= "content-header">
    <div class="container-fluid">
        <div class="row mb-2 ml-5">
            <div class="col-sm-6">
                {{-- <a class="btn mx-2 my-2 info-md" href="{{route('user.create')}}"> <i class="bi bi-person-plus-fill"></i></a> --}}
            </div><!-- /.col -->
            <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><i
                                    class="c-info-md nav-icon bi bi-house-door-fill"></i></a></li>
                        <li class="breadcrumb-item active"><i class="fa fa-user-circle"
                            aria-hidden="true"></i></li>
                    </ol>
        </div><!-- /.row -->
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div  class=" card card-info ">{{-- card-outline card-info --}} {{-- <div class="card-icon"> <i class=" c-info-md nav-icon fas fa-users"></i> </div> --}}
                        <div class="card-header mx-2 mb-2 p-3 rounded-sm info-md merriweather-light">
                            <div class="row">
                                <div class="col-6">
                                    {{ __('Listado de los Usuarios') }}
                                </div>
                                <div class="col-6 col-6 text-right ">
                                    <button type="button" class="btn mx-2"
                                    data-toggle="modal" data-target="#store-modal"
                                    style="background: white">
                                        <i class=" fas fa-plus"></i> <i class=" fas fa-user"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0 table-responsive">
                        <div class="col-sm-12 userTest_wrapper dataTables_wrapper
                        dt-bootstrap4 pt-2 table-responsive">
                            <table class="userTest table table-striped" role="grid">
                                <thead class="letra-th merriweather-light c-info-md">
                                    <tr>
                                        <th>{{ __('Nro') }}</th>
                                        <th>{{ __('Imagen') }}</th>
                                        <th>{{ __('Name') }}</th>
                                        <th>{{ __('Last Name') }}</th>
                                        <th>{{ __('Email') }}</th>
                                        <th>{{ __('Opciones') }}</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <?php $contador = 1; ?>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $contador++ }}</td>
                                            <td>
                                                <style>
                                                    .img-size-30{
                                                width: 30px !important;
                                                }
                                                </style>
                                                @if ($user->image)
                                                    <img src="{{ asset('storage/' . $user->image) }}" alt="{{ $user->name }}" class="img-size-30 img-circle">
                                                @else
                                                    <span>No image</span>
                                                @endif
                                            </td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->surname1 }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                {{-- <a class="btn btn-primary"
                                                href="{{ route('user.edit', $user->id) }}">
                                                <i class="fa fa-user-circle"aria-hidden="true"></i>

                                            </a> --}}
                                            <button class="btn btn-sm btn-outline-info edit-button"
                                            data-id="{{ $user->id }}" data-toggle="modal"
                                            data-target="#edit-user"><i class="fa fa-edit" aria-hidden="true" alt="editar"></i>
                                            </button>

                                            <form id="delete-form-{{ $user->id }}" method="POST" action="{{ route('user.destroy', $user->id) }}" style="display:inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="button" onclick="confirmDelete({{ $user->id }}, event);">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>


   @include('pages.user.store')
   @include('pages.user.edit')
@endsection

@push('js')
<script src="{{ asset('datatable/js/jquery-3.6.0.min.js') }}"></script>

<!-- DataTables JS -->
<script src="{{ asset('datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('datatable/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('datatable/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('datatable/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('datatable/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('datatable/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('datatable/js/jszip.min.js') }}"></script>
<script src="{{ asset('datatable/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('datatable/js/vfs_fonts.js') }}"></script>

<script>
$(document).ready(function() {
    $(".userTest").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "language": {
            "sEmptyTable": "No hay datos disponibles en la tabla",
            "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
            "sInfoEmpty": "Mostrando 0 a 0 de 0 entradas",
            "sInfoFiltered": "(filtrado de _MAX_ entradas totales)",
            "sLengthMenu": "Mostrar _MENU_ entradas",
            "sLoadingRecords": "Cargando...",
            "sProcessing": "Procesando...",
            "sSearch": "Buscar:",
            "sZeroRecords": "No se encontraron resultados",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
        "buttons": [
            { extend: "copy", text: "Copiar", className: "btn btn-primary" },
            { extend: "csv", text: "CSV", className: "btn btn-primary" },
            { extend: "excel", text: "Excel", className: "btn btn-primary" },
            { extend: "pdf", text: "PDF", className: "btn btn-primary" },
            { extend: "print", text: "Imprimir", className: "btn btn-primary" },
            // { extend: "colvis", text: "Columnas", className: "btn btn-primary" }
        ]
    }).buttons().container().appendTo('.userTest_wrapper .col-md-6:eq(0)');
});
</script>
<script>
    $(document).ready(function() {
        $('.edit-button').on('click', function() {
            var userId = $(this).data('id'); // Obtiene el ID del usuario desde el botón

            // Realiza una solicitud GET para obtener los datos del usuario
            $.get('/user/' + userId + '/edit', function(data) {
                // Llena los campos del formulario con los datos del usuario
                $('.user_id').val(data.id);
                $('.name').val(data.name);
                $('.surname1').val(data.surname1);
                $('.ci').val(data.ci);
                $('.email').val(data.email);
                $('.password').val(''); // Mantén la contraseña vacía para no mostrarla

                // Cambia la acción del formulario para incluir el ID del usuario
                $('.edit-form').attr('action', '{{ url('user') }}/' + data.id);

                // Muestra el modal
                $('#edit-user').modal('show');
            });
        });
    });
        </script>
<script>
    $(document).ready(function() {
        // Selecciona los formularios de usuario
        const editForm = $('.edit-form');
        const createForm = $('.create-form');

        // Función para validar las entradas
        function validateInput(input) {
            const line = $('.line-' + input.attr('name'));
            const errorMessage = $('.error-' + input.attr('name'));

            // Limpia los mensajes de error y la línea
            line.removeClass('success error').css('width', '0');
            errorMessage.hide().text("");

            let isValid = true;

            // Lógica de validación
            if (input.attr('name') === 'name') {
                const namePattern = /^[a-zA-Z]+$/;
                if (!namePattern.test(input.val())) {
                    isValid = false;
                    errorMessage.text("Por favor, ingresa un nombre válido.");
                }
            } else if (input.attr('name') === 'email') {
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(input.val())) {
                    isValid = false;
                    errorMessage.text("Por favor, ingresa un correo electrónico válido.");
                }
            } else if (input.attr('name') === 'password') {
                if (input.val().length < 6) {
                    isValid = false;
                    errorMessage.text("La contraseña debe tener al menos 6 caracteres.");
                }
            } else if (input.attr('name') === 'surname1') {
                const surnamePattern = /^[a-zA-Z]+$/;
                if (!surnamePattern.test(input.val())) {
                    isValid = false;
                    errorMessage.text("Por favor, ingresa un apellido válido.");
                }
            } else if (input.attr('name') === 'ci') {
                const ciPattern = /^\d+$/;
                if (!ciPattern.test(input.val())) {
                    isValid = false;
                    errorMessage.text("Por favor, ingresa un CI válido.");
                }
            }

            // Despliega la línea de color según la validez
            if (isValid) {
                line.addClass('success').css('width', '100%');
            } else {
                line.addClass('error').css('width', '100%');
                errorMessage.show();
            }

            return isValid;
        }

        // Función para validar el formulario
        function validateForm(form) {
            let formIsValid = true;
            const inputs = form.find('.form-control');

            inputs.each(function() {
                if (!validateInput($(this))) {
                    formIsValid = false;
                }
            });

            return formIsValid;
        }

        // Validar entradas en el evento de entrada
        $('.form-control').on('input', function() {
            const form = $(this).closest('.user-form');
            const submitBtn = form.find('.submit-btn');

            const formIsValid = validateForm(form);
            submitBtn.prop('disabled', !formIsValid); // Habilita o deshabilita el botón
        });

        // Validar al enviar el formulario
        $('.user-form').on('submit', function(event) {
            event.preventDefault(); // Evita el envío del formulario por defecto

            const form = $(this);
            const formIsValid = validateForm(form);

            if (!formIsValid) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Por favor, corrige los errores en el formulario antes de enviarlo.',
                    confirmButtonText: 'Aceptar'
                });
            } else {
                // Si el formulario es válido, envíalo
                this.submit(); // Envía el formulario
            }
        });
    });
</script>
<script>
function confirmDelete(userId, event) {
    event.preventDefault(); // Previene el envío inmediato del formulario

    Swal.fire({
        title: '¿Estás seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: '¡Estoy seguro!',
        cancelButtonText: 'No, cancelar eliminación'
    }).then((result) => {
        if (result.isConfirmed) {
            // Proceder con la eliminación
            deleteUser (userId); // Llama a la función de eliminación
            // Enviar el formulario para eliminar el usuario
            document.getElementById('delete-form-' + userId).submit();
            Swal.fire('Eliminado!', 'El usuario ha sido eliminado.', 'success');
        } else {
            // Si el usuario cancela, no hacer nada
            Swal.fire('Cancelado', 'El usuario está a salvo :)', 'error');
        }
    });
}

function deleteUser (userId) {
    // Lógica para eliminar al usuario
    console.log("Usuario eliminado:", userId);
}
    </script>

<script>
    function capitalizeFirstLetter(input) {
    const value = input.value;
    // Convierte la primera letra a mayúscula y el resto a minúscula
    const formattedValue = value.charAt(0).toUpperCase() + value.slice(1).toLowerCase();
    input.value = formattedValue;
}
</script>

@endpush
