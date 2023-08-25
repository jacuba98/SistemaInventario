<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        @include('custom.message')
                        <h1 class="mb-4">Inventario</h1>
                        
                        <div class="text-right mb-4">
                            <a href="{{ route('inventario.index') }}" class="btn text-left" data-toggle="tooltip" data-placement="top" title="Limpiar Busqueda">
                                <img width="30" height="30" src="https://img.icons8.com/ios/50/broom.png" alt="broom"/>
                            </a>
                            <a href="{{ route('inventario.create') }}" class="btn" data-toggle="tooltip" data-placement="top" title="Agregar Nuevo Registro">
                                <img width="30" height="30" src="https://img.icons8.com/ios/50/plus-2-math.png" alt="plus-2-math"/>
                            </a>
                        </div>
                        <!-- Cuadro de búsqueda -->
                        <form action="{{ route('inventario.search') }}" method="POST">
                            @csrf
                            <div class="search-box">
                                
                                <input type="text" name="search" placeholder="Buscar..." />
                                <i class="bx bx-search-alt me-1"></i>
                            </div>
                        </form>

                        <div class="mb-4">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inventario as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nombre }}</td>
                                        <td>{{ $item->cantidad }}</td>
                                        <td>{{ $item->precio }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <img width="15" height="15" src="https://img.icons8.com/ios-glyphs/30/menu-2.png" alt="menu-2"/>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a href="{{ route('inventario.show', $item->id) }}" class="dropdown-item">
                                                        <i class="bx bx-show-alt me-1"></i> Show
                                                    </a>
                                                    <a href="{{ route('inventario.edit', $item->id) }}" class="dropdown-item" href="javascript:void(0);">
                                                        <i class="bx bx-edit me-1"></i> Edit
                                                    </a>
                                                    <form class="dropdown-item" action="{{ route('inventario.destroy', $item->id) }}" method="POST" class="d-inline">
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
                    
                        <!--div class="mt-3">
                            <a href="{{ route('inventario.create') }}" class="btn btn-success">Nuevo Registro</a>
                        </div-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</x-app-layout>
