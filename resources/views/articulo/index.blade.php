<x-app-layout>

    <div class="py-4">

        <div class="card">
            <h5 class="card-header">
                Articulos
                <a href="{{ route('articulo.create') }}" class="ms-4 btn rounded-pill btn-outline-primary">Crear Articulo</a>
            </h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Articulo</th>
                            <th>Categoria</th>
                            <th>Unidad Medida</th>
                            <th>Estado</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($articulos as $item)
                            <tr>
                                <td>
                                    {{$item->descripcion}}
                                </td>

                                <td>{{$item->categoria->descripcion}}</td>
                                <td>
                                    {{$item->unidad_medida_id}}
                                </td>
                                <td>
                                    <span class="badge bg-label-success me-1">{{$item->estado->descripcion}}</span>
                                </td>
                                <td>
                                    <a href="{{ route('articulo.edit', $item) }}" class="btn rounded-pill btn-outline-primary">Editar</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            <div class="mt-4 px-4">
                {!! $articulos->links() !!}
            </div>
        </div>
    </div>

    @push('js')

    @endpush

</x-app-layout>
