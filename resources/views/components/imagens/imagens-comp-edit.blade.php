<h1 class="text-center"> Editar imagem </h1>
<div class="container">
    <div class="row bg-light rounded-3">
        <div class="col">
            <div class="container my-3">
                <form method="POST" action="{{ url('images/'.$image->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!-- ======================== Input Serviço ============================== -->
                    <div class="form-group">
                        <label for="service" >Serviço</label>
                        <select
                            type="text"
                            id="service_id"
                            name="service_id"
                            autocomplete="service"
                            style="width: 100%"
                            class="form-select
                @error('country') is-invalid @enderror"
                            required>

                            @if(count($services)>0)
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}" {{$service->id == $image->service_id  ? 'selected' : ''}}> {{ $service->name }}</option>
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
                        <label for="image" class="mb-2">Imagem</label>
                        <input
                            type="file"
                            id="image"
                            name="image"
                            onchange="loadFile(event)"
                            autocomplete="image"
                            style="width: 100%"
                            class="form-control
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

                    <button type="submit" class="m-2 btn btn-primary">Salvar</button>

                    <a href="{{url('/images')}}" class="m-2 btn btn-outline-info">Voltar</a>

                </form>
            </div>
        </div>
        <div class="col text-center m-2">
            @if ($image->image)
                <img id="output" class="w-100 img-responsive rounded-3" src="{{ asset('storage/'.$image->image) }}" alt="" title=""></a>
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
