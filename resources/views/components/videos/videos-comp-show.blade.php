<!--<div class="container">
    <form method="GET" action="{{ url('videos') }}">
        @csrf
        <div class="form-group">
            <label for="url">Video</label>
            <input
                type="text"
                id="url"
                name="url"
                value="{{ $video -> url}}"
                autocomplete="url"
                class="form-control"

                disabled>
        </div>

        <div class="form-group">
            <label for="service">Serviço</label>
            <select
                id="service_id"
                name="service_id"
                class="form-control
                mb-1"
            disabled>

                @foreach($services as $service)
                    <option value="{{$service->id}}" >
                        {{$service->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
    </form>
</div>
-->
