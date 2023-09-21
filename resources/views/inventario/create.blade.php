<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">NUEVO REGISTRO</h5>
                        <small class="text-muted float-end">Merged input group</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('inventario.store') }}" method="POST">
                            @csrf
                            <!-- Equipo -->
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Nombre</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class='bx bx-desktop'></i>
                                    </span>
                                    <x-text-input type="text" class="form-control" id="nombre"  name="nombre" placeholder="Lenovo" aria-label="Lenovo" aria-describedby="basic-icon-default-fullname2" required autofocus autocomplete="nombre" />
                                    <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                                </div>
                            </div>

                            <!-- ip -->
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Cantidad</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class='bx bx-broadcast'></i>
                                    </span>
                                    <x-text-input type="text" class="form-control" id="cantidad"  name="cantidad" placeholder="10.1.35.48" aria-label="10.1.35.48" aria-describedby="basic-icon-default-fullname2" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('Cantidad')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Numero -->
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Precio</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class='bx bx-hash' ></i>
                                    </span>
                                    <x-text-input type="text" class="form-control" id="precio"  name="precio" placeholder="SG6T-SHD8-LPOI-FDK9-43DS" aria-label="SG6T-SHD8-LPOI-FDK9-43DS" aria-describedby="basic-icon-default-fullname2" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('precio')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Hotel -->
                            <!--div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Hotel</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class='bx bxs-buildings' ></i>
                                    </span>
                                    <x-text-input type="text" class="form-control" id="name"  name="name" placeholder="Bahia Principe" aria-label="Bahia Principe" aria-describedby="basic-icon-default-fullname2" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                            </div-->

                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
