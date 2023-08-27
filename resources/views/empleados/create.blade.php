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
                        <form>
                            <!-- Numero de Colaborador -->
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Numero de Colaborador</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class='bx bxl-slack-old'></i>
                                    </span>
                                    <x-text-input type="text" class="form-control" id="noCol"  name="noCol" placeholder="0038628" aria-label="0038628" aria-describedby="basic-icon-default-fullname2" required autofocus autocomplete="noCol" />
                                    <x-input-error :messages="$errors->get('noCol')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Nombre de empleado -->
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Nombre Completo</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class='bx bx-user'></i>
                                    </span>
                                    <x-text-input type="text" class="form-control" id="name"  name="name" placeholder="Katrina Jones" aria-label="Katrina Jones" aria-describedby="basic-icon-default-fullname2" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Correo electronico -->
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Correo electronico</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class='bx bx-envelope' ></i>
                                    </span>
                                    <x-text-input type="email" class="form-control" id="correo"  name="correo" placeholder="ejemplo@correo.com" aria-label="ejemplo@correo.com" aria-describedby="basic-icon-default-fullname2" required autofocus autocomplete="correo" />
                                    <x-input-error :messages="$errors->get('correo')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Puesto -->
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Puesto</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class='bx bxs-id-card' ></i>
                                    </span>
                                    <x-text-input type="text" class="form-control" id="puesto"  name="puesto" placeholder="Chef de partida" aria-label="Chef de partida" aria-describedby="basic-icon-default-fullname2" required autofocus autocomplete="puesto" />
                                    <x-input-error :messages="$errors->get('puesto')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Departamento -->
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Departamento</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class='bx bx-building' ></i>
                                    </span>
                                    <x-text-input type="text" class="form-control" id="departamento"  name="departamento" placeholder="Alimentos & bebidas" aria-label="Alimentos & bebidas" aria-describedby="basic-icon-default-fullname2" required autofocus autocomplete="departamento" />
                                    <x-input-error :messages="$errors->get('departamento')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Hotel -->
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Hotel</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class='bx bx-building-house'></i>
                                    </span>
                                    <x-text-input type="text" class="form-control" id="hotel"  name="hotel" placeholder="Akumal" aria-label="Akumal" aria-describedby="basic-icon-default-fullname2" required autofocus autocomplete="hotel" />
                                    <x-input-error :messages="$errors->get('hotel')" class="mt-2" />
                                </div>
                            </div>

                            <!-- AD -->
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">AD</label>
                                <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class='bx bx-at' ></i>
                                    </span>
                                    <x-text-input type="text" class="form-control" id="ad"  name="ad" placeholder="jkatrina" aria-label="jkatrina" aria-describedby="basic-icon-default-fullname2" required autofocus autocomplete="ad" />
                                    <x-input-error :messages="$errors->get('ad')" class="mt-2" />
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
