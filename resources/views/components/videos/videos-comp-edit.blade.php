<h1 style="text-align: center">Editar Video</h1>
<br>
<div class="container bg-light efeito3d">
<form method="POST" action="{{ url('videos/' . $video->id) }}">
    @csrf
    @method('PUT')


    <div class="form-group my-3">
        <h4 for="url">Video</h4>
        <input
            type="text"
            id="url"
            name="url"
            value="{{ $video -> url}}"
            autocomplete="url"
            class="form-control inputbox"
            required
            >
    </div>

    <div class="form-group">
        <h4 for="service">Serviço</h4>
        <select
            id="service_id"
            name="service_id"
            class="form-control mb-1 inputbox"
            required >

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
