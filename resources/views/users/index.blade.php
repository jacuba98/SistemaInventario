<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h1 class="text-left mb-4">Lista de Usuarios</h1>
                            <div class="text-right mb-4">
                                <a href="{{ route('users.index') }}" class="btn-ico" data-toggle="tooltip" data-placement="top" title="Limpiar Busqueda">
                                    <i class='bx bx-eraser icon-lg icon-margin'></i>
                                </a>
                                <a href="{{ route('users.create') }}" class="btn-ico" data-toggle="tooltip" data-placement="top" title="Agregar Nuevo Registro">
                                    <i class='bx bxs-user-plus icon-lg'></i>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Cuadro de búsqueda -->
                        <form action="{{ route('users.search') }}" method="post" class="mb-3">
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
                                        <th>Correo Electrónico</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="employeeList">
                                    <!-- Aquí se mostrarán los empleados -->
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                        <img width="15" height="15" src="https://img.icons8.com/ios-glyphs/30/menu-2.png" alt="menu-2"/>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a href="{{ route('users.show', $user->id) }}" class="dropdown-item">
                                                            <i class="bx bx-show-alt me-1"></i> Show
                                                        </a>
                                                        <a href="{{ route('users.edit', $user->id) }}" class="dropdown-item" href="javascript:void(0);">
                                                            <i class="bx bx-edit me-1"></i> Edit
                                                        </a>
                                                        <form class="dropdown-item" action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
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
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#searchInput').on('input', function() {
                var query = $(this).val();

                $.ajax({
                    url: "{{ route('users.search') }}",
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
