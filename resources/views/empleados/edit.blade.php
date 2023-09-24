<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Editar Registro</h1>
                    <form action="{{ route('empleados.update', $registro->id) }}" method="POST" id="miFormulario">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="no_empleado">No. Colaborador</label>
                            <x-text-input type="text" name="no_empleado" class="form-control" value="{{ $registro->no_empleado }}" readonly />
                        </div>
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <x-text-input type="text" name="name" class="form-control" value="{{ $registro->name }}" required />
                        </div>
                        <div class="form-group">
                            <label for="email">Correo</label>
                            <x-text-input type="email" name="email" class="form-control" value="{{ $registro->email }}" required />
                        </div>
                        <div class="form-group">
                            <label for="puesto">Puesto</label>
                            <x-text-input type="text" name="puesto" class="form-control" value="{{ $registro->puesto }}" required />
                        </div>
                        <div class="form-group">
                            <label for="departamento">Departamento</label>
                            <x-text-input type="text" name="departamento" class="form-control" value="{{ $registro->departamento }}" required />
                        </div>

                        <div class="form-group">
                            <label for="hotel_id">Selecciona un hotel:</label>
                            <select class="form-control" id="hotel_id" name="hotel_id" aria-label="Default select example">
                                @foreach ($hoteles as $hotel)
                                    <option value="{{ $hotel->id }}" {{ $hotel->id == $hotelSeleccionado->id ? 'selected' : '' }}>
                                        {{ $hotel->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="ad">AD</label>
                            <x-text-input type="text" name="ad" class="form-control" value="{{ $registro->ad }}" required />
                        </div>

                        <button type="submit" class="btn btn-primary"><i class='bx bx-refresh' ></i> Actualizar</button>
                    </form>
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
</x-app-layout>



