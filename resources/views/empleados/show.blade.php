<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Detalles del empleado: <strong>{{ $registro->name }}</strong></h1>
                    <p><strong>No. Colaborador:</strong> {{ $registro->no_empleado }}</p>
                    <p><strong>Nombre:</strong> {{ $registro->name }}</p>
                    <p><strong>Correo:</strong> {{ $registro->email }}</p>
                    <p><strong>Puesto:</strong> {{ $registro->puesto }}</p>
                    <p><strong>Departamento:</strong> {{ $registro->departamento }}</p>
                    <p><strong>Hotel:</strong> {{ $hotel->nombre }}</p>
                    <p><strong>AD:</strong> {{ $registro->ad }}</p>
                    <a href="{{ route('empleados.index') }}" class="btn btn-secondary"><i class='bx bx-arrow-back'></i>Volver</a>
                    <a href="{{ route('empleados.edit', $registro->id) }}" class="btn btn-success">
                        <i class="bx bx-edit me-1"></i>
                        Editar
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
