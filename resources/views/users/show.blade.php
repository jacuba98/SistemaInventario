<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Detalles de <strong> {{ $user->nombre }} </strong></h1>
                    <p><strong>Nombre:</strong> {{ $user->name }}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">
                        <i class='bx bx-arrow-back'></i>
                        Volver
                    </a>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success">
                        <i class="bx bx-edit me-1"></i>
                        Editar
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
