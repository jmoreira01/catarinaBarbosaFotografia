<h1 style="text-align: center"> Novo Vídeo</h1>
<br>
<div class="container bg-light efeito3d">
    <form method="POST" action="{{ url('videos') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group my-3">
            <h4 for="video"> Video Url</label>
            <input
                type="text"
                id="url"
                name="url"
                autocomplete="url"
                class="form-control inputbox
                @error('url') is-invalid @enderror"
                value="{{ old('url') }}"
                required>

            @error('url')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <h4 for="service">Serviço</h4>
            <select
                id="service_id"
                name="service_id"
                class="form-control inputbox
                mb-1">

                @foreach($services as $service)
                    <option value="{{$service->id}}" > {{$service -> name}} </option>
                @endforeach
            </select>
        </div>


        <button
            type="submit"
            class="mt-2 mb-3 ml-2 btn btn-outline-primary"
            style="width: 110px">
            <strong>Guardar</strong>
            <i class="bi bi-check-lg"></i>
        </button>
    </form>
</div>
