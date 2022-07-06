<x-app-layout>

    @push('style')
        <style>
            .bigdrop.select2-container .select2-results {max-height: 200px;}
            .bigdrop .select2-results {max-height: 200px;}
            .bigdrop .select2-choices {min-height: 150px; max-height: 150px; overflow-y: auto;}
        </style>
    @endpush

    <div class="py-4">

        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Editar Articulo: {{ $articulo->descripcion }}</h5>
                        <small class="text-muted float-end">articulo.edit</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('articulo.update', $articulo) }}" method="POST" onsubmit="return checkSubmit();">
                            @method('PUT')
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Articulo</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="descripcion" placeholder="Articulo" value="{{ old('descripcion', $articulo->descripcion)}}" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Categoria</label>
                                <select class="form-control js-example-basic-single" name="categoria_id">
                                    @foreach ($categoria as $item)
                                        <option {{(old('categoria_id', $articulo->categoria_id) == $item->id ? 'selected' : '')}} value="{{ $item->id }}">{{ $item->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Unidad Medida</label>
                                <select class="form-control js-example-basic-single" name="unidad_medida_id">
                                    @foreach ($unidad as $item)
                                        <option {{(old('unidad_medida_id', $articulo->unidad_medida_id) == $item->id ? 'selected' : '')}} value="{{ $item->id }}">{{ $item->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Porcentaje IVA</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="porc_iva" placeholder="IVA" value="{{old('porc_iva', $articulo->porc_iva)}}"
                                onkeyup="format(this)" onchange="format(this)" />
                            </div>

                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" id="estado_id" name="estado_id" {{ ($articulo->estado_id == 1 ? 'checked' : '') }} />
                                <label class="form-check-label" for="flexSwitchCheckChecked"
                                  >Estado</label
                                >
                              </div>

                            <button type="submit" class="btn rounded-pill btn-outline-primary">Editar</button>
                            <button type="button" onclick="return window.history.back();" class="btn rounded-pill btn-outline-danger">Cancelar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @push('js')
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="{{ asset('js/crear_articulo.js') }}"></script>
    @endpush
</x-app-layout>
