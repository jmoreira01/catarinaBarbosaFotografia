<h1 class="text-center"> Nova imagem </h1>
<div class="container">
    <div class="row bg-light efeito3d">
        <div class="col">
            <div class="container">
                <form method="POST" action="{{ url('/images') }}" enctype="multipart/form-data">
                    @csrf

                    <!-- ======================== Input Serviço ============================== -->
                    <div class="form-group my-3">
                        <h4 for="service" class="mb-2">Serviço</h4>
                        <select
                            type="text"
                            id="service_id"
                            name="service_id"
                            autocomplete="service"
                            style="width: 100%"
                            class="form-select inputbox mb-1
                            @error('service') is-invalid @enderror"
                            required>

                            @if(count($services)>0)
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}"> {{ $service->name }}</option>
                                @endforeach
                            @endif


                        </select>
                        @error('service')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    <!-- ======================== Input Imagem ============================== -->
                    <div class="form-group my-3">
                        <h4 for="image" class="mb-2">Imagem</h4>
                        <input
                            type="file"
                            id="image"
                            name="image"
                            onchange="loadFile(event)"
                            autocomplete="image"
                            style="width: 100%"
                            class="form-control inputbox
                                @error('image') is-invalid @enderror"
                            value="{{ old('image') }}"
                            required>
                                @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>



                    <!-- ======================== Botão ============================== -->
                    <a href="{{url('/images')}}" class="mt-2 mb-3 btn btn-outline-secondary"><i class="bi bi-arrow-return-left"></i> <strong> Voltar </strong> </a>

                    <button type="submit" class="mt-2 mb-3 ml-2 btn btn-outline-primary" style="width: 110px"> <strong> Guardar </strong> <i class="bi bi-check-lg"></i></button>

                </form>
            </div>
        </div>
        <div class="col text-center m-2">
            <img id="output" height="300px" class="rounded-3">
        </div>
    </div>


</div>

<script>
    function loadFile(event) {
        let output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    }
</script>
