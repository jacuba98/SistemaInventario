<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        @if(session('toastr'))
                            <script>
                                var toastr = {!! session('toastr') !!};
                                toastr.show();
                            </script>
                        @endif
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h1 class="text-left mb-4">Inventario</h1>
                            <div class="text-right mb-4">
                                <a href="{{ route('inventario.index') }}" class="btn-ico" data-toggle="tooltip" data-placement="top" title="Limpiar Busqueda">
                                    <i class='bx bx-eraser icon-lg icon-margin'></i>
                                </a>
                                <a href="{{ route('inventario.create') }}" class="btn-ico" data-toggle="tooltip" data-placement="top" title="Agregar Nuevo Registro">
                                    <i class='bx bxs-user-plus icon-lg'></i>
                                </a>
                            </div>
                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearRegistroModal">
                            Agregar Nuevo Registro
                        </button>
                        
                        
                        <!-- Cuadro de búsqueda -->
                        <form action="{{ route('inventario.search') }}" method="post" class="mb-3">
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
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="employeeList">
                                    <!-- Aquí se mostrarán los empleados -->
                                    @foreach($inventario as $inv)
                                        <tr>
                                            <td>{{ $inv->nombre }}</td>
                                            <td>{{ $inv->cantidad }}</td>
                                            <td>{{ $inv->precio }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                        <img width="15" height="15" src="https://img.icons8.com/ios-glyphs/30/menu-2.png" alt="menu-2"/>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a href="{{ route('inventario.show', $inv->id) }}" class="dropdown-item">
                                                            <i class="bx bx-show-alt me-1"></i> Show
                                                        </a>
                                                        <a href="{{ route('inventario.edit', $inv->id) }}" class="dropdown-item" href="javascript:void(0);">
                                                            <i class="bx bx-edit me-1"></i> Edit
                                                        </a>
                                                        <form class="dropdown-item" action="{{ route('inventario.destroy', $inv->id) }}" method="POST" class="d-inline">
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
                        <div class="text-left mb-4">
                            <a href="{{ route('export') }}" class="btn btn-excel">
                                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="35px" height="35px"><rect width="16" height="9" x="28" y="15" fill="#21a366"/><path fill="#185c37" d="M44,24H12v16c0,1.105,0.895,2,2,2h28c1.105,0,2-0.895,2-2V24z"/><rect width="16" height="9" x="28" y="24" fill="#107c42"/><rect width="16" height="9" x="12" y="15" fill="#3fa071"/><path fill="#33c481" d="M42,6H28v9h16V8C44,6.895,43.105,6,42,6z"/><path fill="#21a366" d="M14,6h14v9H12V8C12,6.895,12.895,6,14,6z"/><path d="M22.319,13H12v24h10.319C24.352,37,26,35.352,26,33.319V16.681C26,14.648,24.352,13,22.319,13z" opacity=".05"/><path d="M22.213,36H12V13.333h10.213c1.724,0,3.121,1.397,3.121,3.121v16.425	C25.333,34.603,23.936,36,22.213,36z" opacity=".07"/><path d="M22.106,35H12V13.667h10.106c1.414,0,2.56,1.146,2.56,2.56V32.44C24.667,33.854,23.52,35,22.106,35z" opacity=".09"/><linearGradient id="flEJnwg7q~uKUdkX0KCyBa" x1="4.725" x2="23.055" y1="14.725" y2="33.055" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#18884f"/><stop offset="1" stop-color="#0b6731"/></linearGradient><path fill="url(#flEJnwg7q~uKUdkX0KCyBa)" d="M22,34H6c-1.105,0-2-0.895-2-2V16c0-1.105,0.895-2,2-2h16c1.105,0,2,0.895,2,2v16	C24,33.105,23.105,34,22,34z"/><path fill="#fff" d="M9.807,19h2.386l1.936,3.754L16.175,19h2.229l-3.071,5l3.141,5h-2.351l-2.11-3.93L11.912,29H9.526	l3.193-5.018L9.807,19z"/></svg>Exportar
                            </a>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>

        
    <div class="modal fade" id="crearRegistroModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Aquí coloca tus campos de formulario para agregar un nuevo registro -->
                    <form action="{{ route('inventario.store') }}" method="POST">
                        @csrf
                        <!-- Equipo -->
                        <div class="wave-group">
                            <input required="" type="text" class="input" id="nombre"  name="nombre" required autofocus>
                            <span class="bar"></span>
                            <label class="label">
                                <span class="label-char" style="--index: 0">N</span>
                                <span class="label-char" style="--index: 1">a</span>
                                <span class="label-char" style="--index: 2">m</span>
                                <span class="label-char" style="--index: 3">e</span>
                            </label>
                        </div>
                        <br>

                        <!-- ip -->
                        <div class="wave-group">
                            <input required="" type="text" class="input" id="cantidad"  name="cantidad" required autofocus>
                            <span class="bar"></span>
                            <label class="label">
                                <span class="label-char" style="--index: 0">C</span>
                                <span class="label-char" style="--index: 1">a</span>
                                <span class="label-char" style="--index: 2">n</span>
                                <span class="label-char" style="--index: 3">t</span>
                                <span class="label-char" style="--index: 3">i</span>
                                <span class="label-char" style="--index: 3">d</span>
                                <span class="label-char" style="--index: 3">a</span>
                                <span class="label-char" style="--index: 3">d</span>
                            </label>
                        </div>
                        <br>
                        <!-- Numero -->
                        <div class="wave-group">
                            <input required="" type="text" class="input" id="precio"  name="precio" required autofocus>
                            <span class="bar"></span>
                            <label class="label">
                                <span class="label-char" style="--index: 0">P</span>
                                <span class="label-char" style="--index: 1">r</span>
                                <span class="label-char" style="--index: 2">e</span>
                                <span class="label-char" style="--index: 3">c</span>
                                <span class="label-char" style="--index: 3">i</span>
                                <span class="label-char" style="--index: 3">o</span>
                            </label>
                        </div>
                        <!-- Agrega más campos según tus necesidades -->
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="document.querySelector('form').submit();">Guardar</button>
                    <button type="submit" class="btn btn-primary">Send</button>
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
                    url: "{{ route('inventario.search') }}",
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
