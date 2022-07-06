<x-app-layout>

    <div class="card my-4">
        <h5 class="card-header">
            Categorias
            <div class="my-2">
                <a href="{{ route('categoria.create') }}" class="text-primary">
                    <button type="button" class="btn rounded-pill btn-outline-primary">Crear</button>
                </a>
            </div>
        </h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Descripcion</th>
                        <th>Usuario</th>
                        {{-- <th>Users</th> --}}
                        {{-- <th>Status</th> --}}
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($categorias as $item)
                        <tr>
                            <td>
                                {{ $item->descripcion }}
                            </td>

                            <td>
                                {{ $item->usuario->name }}
                            </td>

                            <td>

                                    <a href="{{ route('categoria.create')}}">
<button type="button" class="btn rounded-pill btn-outline-warning">
                                    Editar</button>
                                    </a>


                                {{-- <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i
                                                class="bx bx-trash me-1"></i>
                                            Delete</a>
                                    </div>
                                </div> --}}
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
    <br>

</x-app-layout>
