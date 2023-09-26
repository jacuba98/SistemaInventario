<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Editar</h1>
                    <div class="card-body">
                        <form action="{{ route('inventario.update', $registro->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="form-label" for="nombre">Nombre</label>
                                <x-text-input type="text" name="nombre" class="form-control" value="{{ $registro->nombre }}" required />
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="cantidad">Cantidad</label>
                                <x-text-input type="number" name="cantidad" class="form-control" value="{{ $registro->cantidad }}" required />
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="precio">Precio</label>
                                <x-text-input type="number" name="precio" class="form-control" value="{{ $registro->precio }}" required/>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class='bx bx-refresh' ></i>Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

