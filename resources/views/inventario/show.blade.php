
    <h1>Detalles del Producto</h1>
    <p><strong>Nombre:</strong> {{ $registro->nombre }}</p>
    <p><strong>Cantidad:</strong> {{ $registro->cantidad }}</p>
    <p><strong>Precio:</strong> {{ $registro->precio }}</p>
    <a href="{{ route('inventario.index') }}" class="btn btn-secondary">Volver</a>

