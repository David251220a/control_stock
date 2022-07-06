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
                        <h5 class="mb-0">Crear Articulo</h5>
                        <small class="text-muted float-end">articulo.create</small>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Articulo</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="descripcion" placeholder="Articulo" />
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Categoria</label>
                                <select class="form-control js-example-basic-single" name="categoria_id">
                                    @foreach ($categoria as $item)
                                        <option value="{{ $item->id }}">{{ $item->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Unidad Medida</label>
                                <select class="form-control js-example-basic-single" name="unidad_medida_id">
                                    @foreach ($unidad as $item)
                                        <option value="{{ $item->id }}">{{ $item->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Porcentaje IVA</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="porc_iva" placeholder="IVA" />
                            </div>

                            <button type="submit" class="btn rounded-pill btn-outline-primary">Guardar</button>
                            <button type="button" onclick="return window.history.back();" class="btn rounded-pill btn-outline-danger">Cancelar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @push('js')
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function() {
                // $('.js-example-basic-single').select2({ dropdownCssClass: "bigdrop" });
                $('.js-example-basic-single').select2();
            });
        </script>
    @endpush
</x-app-layout>

