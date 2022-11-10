<<<<<<< Updated upstream

=======
<h1 class="text-center"> Nova imagem </h1>
<div class="container">
    <div class="row bg-light rounded-3">
        <div class="col">
            <div class="container">
                <form method="POST" action="{{ url('/images') }}" enctype="multipart/form-data">
                    @csrf

                    <!-- ======================== Input Serviço ============================== -->
                    <div class="form-group my-3">
                        <label for="service" class="mb-2">Serviço</label>
                        <br>
                        <select
                            type="text"
                            id="service_id"
                            name="service_id"
                            autocomplete="service"
                            style="width: 100%"
                            class="form-control
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

                    <button type="submit" class="m-2 btn btn-primary">Criar</button>

                    <a href="{{url('/images')}}" class="m-2 btn btn-outline-info">Voltar</a>

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
>>>>>>> Stashed changes
