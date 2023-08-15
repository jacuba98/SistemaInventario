<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        <h1 class="mb-4">Inventario</h1>
                        
                        <div class="text-right mb-4">
                            <a href="{{ route('inventario.index') }}" class="btn text-left">
                                <img width="35" height="35" src="https://img.icons8.com/color/48/broom.png" alt="broom"/>
                            </a>
                            <a href="{{ route('inventario.create') }}" class="btn">
                                <img width="35" height="35" src="https://img.icons8.com/fluency/48/add.png" alt="add"/>
                            </a>
                        </div>
                        <!-- Cuadro de búsqueda -->
                        <form action="{{ route('inventario.search') }}" method="POST">
                            @csrf
                            <div class="search-box">
                                <input type="text" name="search" placeholder="Buscar..." />
                                <button type="button">
                                    <img width="35" height="35" src="https://img.icons8.com/color/48/search--v1.png" alt="search--v1"/>
                                </button>
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
                                            <a href="{{ route('inventario.show', $item->id) }}">
                                                <img width="27" height="27" src="https://img.icons8.com/color/48/visible--v1.png" alt="visible--v1"/>
                                            </a>
                                            <a href="{{ route('inventario.edit', $item->id) }}">
                                                <img width="27" height="27" src="https://img.icons8.com/fluency/48/create-new.png" alt="create-new"/>
                                            </a>
                                            <form action="{{ route('inventario.destroy', $item->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="27px" height="27px" fill-rule="nonzero"><defs><linearGradient x1="18.405" y1="10.91" x2="33.814" y2="43.484" gradientUnits="userSpaceOnUse" id="color-1"><stop offset="0" stop-color="#ef3232"></stop><stop offset="1" stop-color="#e41e1e" stop-opacity="0.74902"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.33333,5.33333)"><path d="M39,10l-2.835,31.181c-0.093,1.03 -0.957,1.819 -1.991,1.819h-20.348c-1.034,0 -1.898,-0.789 -1.992,-1.819l-2.834,-31.181z" fill="url(#color-1)"></path><path d="M32,7c0,-1.105 -0.895,-2 -2,-2h-12c-1.105,0 -2,0.895 -2,2c0,0 0,0.634 0,1h16c0,-0.366 0,-1 0,-1z" fill="#d00101"></path><path d="M7,9.886v0c0,-0.523 0.358,-0.974 0.868,-1.086c2.305,-0.507 8.895,-1.8 16.132,-1.8c7.237,0 13.827,1.293 16.132,1.8c0.51,0.112 0.868,0.563 0.868,1.086v0c0,0.615 -0.499,1.114 -1.114,1.114h-31.772c-0.615,0 -1.114,-0.499 -1.114,-1.114z" fill-opacity="0.87843" fill="#d90000"></path></g></g></svg>
                                                </button>
                                            </form>
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
