
<h1>Editar Registro</h1>
<form action="{{ route('empleados.update', $registro->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" class="form-control" value="{{ $registro->nombre }}" required>
    </div>
    <div class="form-group">
        <label for="correo">Correo</label>
        <input type="email" name="correo" class="form-control" value="{{ $registro->correo }}" required>
    </div>
    <div class="form-group">
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" class="form-control" value="{{ $registro->telefono }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>

