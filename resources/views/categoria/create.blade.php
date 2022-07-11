<x-app-layout>

    @push('style')
        <style>
            .bigdrop.select2-container .select2-results {
                max-height: 200px;
            }

            .bigdrop .select2-results {
                max-height: 200px;
            }

            .bigdrop .select2-choices {
                min-height: 150px;
                max-height: 150px;
                overflow-y: auto;
            }
        </style>
    @endpush
    <div class="py-4">

        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Crear Categoria</h5>
                        <small class="text-muted float-end">categoria.create</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('categoria.store') }}" method="POST" onsubmit="return checkSubmit();">

                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Categoria</label>
                                <input type="text" class="form-control" id="basic-default-fullname"
                                    name="descripcion" placeholder="Categoria" value="{{ old('descripcion') }}" />
                            </div>
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" id="estado_id" name="estado_id"
                                    checked="">
                                <label class="form-check-label" for="flexSwitchCheckChecked">Estado</label>
                            </div>


                            <button type="submit" class="btn rounded-pill btn-outline-primary">Guardar</button>
                            <button type="button" onclick="return window.history.back();"
                                class="btn rounded-pill btn-outline-danger">Cancelar</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>


    </div>
    @push('js')
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        {{-- <script src="{{ asset('js/crear_articulo.js') }}"></script> --}}
    @endpush
</x-app-layout>
