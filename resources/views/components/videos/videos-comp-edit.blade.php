<div class="container">
<form method="POST" action="{{ url('videos/' . $video->id) }}">
    @csrf
    @method('PUT')


    <div class="form-group">
        <label for="url">Video</label>
        <input
            type="text"
            id="url"
            name="url"
            value="{{ $video -> url}}"
            autocomplete="url"
            class="form-control"
            >
    </div>

    <div class="form-group">
        <label for="service">Serviço</label>
        <select
            id="service_id"
            name="service_id"
            class="form-control mb-1"
            required >

                @foreach($services as $service)
                    <option value="{{$service->id}}" > {{$service -> name}} </option>
                @endforeach
        </select>
    </div>
    <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
</form>
</div>
