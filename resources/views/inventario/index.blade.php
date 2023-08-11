<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">

                        <!-- Cuadro de búsqueda -->
                        <div class="search-box">
                            <input type="text" placeholder="Buscar..." />
                            <button type="button">Buscar</button>
                        </div>

                        <form action="{{ route('inventario.search') }}" method="POST">
                            @csrf
                            <input type="text" placeholder="Buscar...">
                            <button type="button">Buscar</button>
                        </form>
                        <h1 class="mb-4">Inventario</h1>
                    
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
                                        <a href="{{ route('inventario.show', $item->id) }}" class="btn btn-sm btn-info">Ver</a>
                                        <a href="{{ route('inventario.edit', $item->id) }}" class="btn btn-sm btn-primary">Editar</a>
                                        <form action="{{ route('inventario.destroy', $item->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    
                        <div class="mt-3">
                            <a href="{{ route('inventario.create') }}" class="btn btn-success">Agregar Nuevo Registro</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</x-app-layout>
