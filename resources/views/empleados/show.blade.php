
<h1>Detalles del Empleado</h1>
<p><strong>Nombre:</strong> {{ $registro->nombre }}</p>
<p><strong>Correo:</strong> {{ $registro->correo }}</p>
<p><strong>Telefono:</strong> {{ $registro->telefono }}</p>
<a href="{{ route('empleados.index') }}" class="btn btn-secondary">Volver</a>

