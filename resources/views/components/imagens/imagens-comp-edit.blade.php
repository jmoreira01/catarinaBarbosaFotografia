<h1 class="text-center"> Editar imagem </h1>
<div class="container">
    <div class="row bg-light efeito3d">
        <div class="col">

            <form method="POST" action="{{ url('images/'.$image->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!-- ======================== Input Serviço ============================== -->
                <div class="form-group mt-3">
                    <h4 for="service">Serviço</h4>
                    <select
                        type="text"
                        id="service_id"
                        name="service_id"
                        autocomplete="service"
                        style="width: 100%"
                        class="form-select inputbox
                @error('country') is-invalid @enderror"
                        required>

                        @if(count($services)>0)
                            @foreach($services as $service)
                                <option
                                    value="{{ $service->id }}" {{$service->id == $image->service_id  ? 'selected' : ''}}> {{ $service->name }}</option>
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
                <a href="{{url('/images')}}" class="mt-2 mb-3 btn btn-outline-secondary"><i
                        class="bi bi-arrow-return-left"></i> Voltar</a>

                <button type="submit" class="mt-2 mb-3 ml-2 btn btn-outline-primary" style="width: 110px"> <strong>Guardar </strong>  <i
                        class="bi bi-check-lg"></i></button>


            </form>
        </div>
        <div class="col text-center m-2">
            @if ($image->image)
                <img id="output" class="w-50 img-responsive rounded-3" src="{{ asset('storage/'.$image->image) }}"
                     alt="" title=""></a>
            @else
                <p>No Image</p>
            @endif
        </div>
    </div>
</div>

<script>
    function loadFile(event) {
        let output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    }
</script>
