<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h1 class="text-left mb-4">Lista de Empleados</h1>

                            @if(Session::has('success'))
                                <script>
                                    toastr.success('{{ Session::get("success") }}');
                                </script>
                            @endif


                            <div class="text-right mb-4">
                                <a href="{{ route('empleados.index') }}" class="btn-ico" data-toggle="tooltip" data-placement="top" title="Limpiar Busqueda">
                                    <i class='bx bx-eraser icon-lg icon-margin'></i>
                                </a>
                                <a href="{{ route('empleados.create') }}" class="btn-ico" data-toggle="tooltip" data-placement="top" title="Agregar Nuevo Registro">
                                    <i class='bx bxs-user-plus icon-lg'></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Cuadro de búsqueda -->
                        <form action="{{ route('empleados.search') }}" method="post" class="mb-3">
                            @csrf
                            <div class="search-box">
                                <input type="text" id="searchInput" name="query" placeholder="Buscar por nombre o correo" class="form-control">
                                <i class="bx bx-search-alt me-1 icon-lg"></i>
                            </div>
                        </form>

                        <!--div id="searchResults">
                            < Aquí se mostrarán los resultados de la búsqueda >
                        </div-->
                        
                        <div class="table-responsive text-nowrap" id="searchResults">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Puesto</th>
                                        <th>Hotel</th>
                                        <th>AD</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="employeeList">
                                    <!-- Aquí se mostrarán los empleados -->
                                    @foreach($empleados as $empleado)
                                        <tr>
                                            <td>{{ $empleado->name }}</td>
                                            <td>{{ $empleado->puesto }}</td>
                                            <td>{{ $empleado->hotel->nombre }}</td> 
                                            <td>{{ $empleado->ad }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                        <img width="15" height="15" src="https://img.icons8.com/ios-glyphs/30/menu-2.png" alt="menu-2"/>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a href="{{ route('empleados.show', $empleado->id) }}" class="dropdown-item">
                                                            <i class="bx bx-show-alt me-1"></i> Show
                                                        </a>
                                                        <a href="{{ route('empleados.edit', $empleado->id) }}" class="dropdown-item" href="javascript:void(0);">
                                                            <i class="bx bx-edit me-1"></i> Edit
                                                        </a>
                                                        <form class="dropdown-item" action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" class="d-inline" id="miFormulario">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit">
                                                                <i class="bx bx-trash me-1"></i> Eliminar
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>                                                                                        
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
        <div id="toastr-container"></div>
    </div>
    <script>
        // Aquí se mostrarán los mensajes Toastr
        function mostrarToastr(message, type) {
            toastr[type](message, type.charAt(0).toUpperCase() + type.slice(1));
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#searchInput').on('input', function() {
                var query = $(this).val();

                $.ajax({
                    url: "{{ route('empleados.search') }}",
                    type: "POST",
                    data: {
                        query: query,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#searchResults').html(response);
                    }
                });
            });
        });
    </script>
</x-app-layout>
