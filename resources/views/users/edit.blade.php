<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Editar</h1>
                    <div class="card-body">
                        <form action="{{ route('users.update', $users->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="form-label" for="name">Nombre</label>
                                <x-text-input type="text" name="name" class="form-control" value="{{ $users->name }}" required />
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Email</label>
                                <x-text-input type="email" name="email" class="form-control" value="{{ $users->email }}" required />
                            </div>
                            <button type="submit" class="btn btn-primary"><i class='bx bx-refresh' ></i>Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
