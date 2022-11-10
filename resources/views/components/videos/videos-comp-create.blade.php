<div class="container" style="margin: auto;
  width: 30%;
  padding: 30px;
  margin-top: 100px;">
    <form method="POST" action="{{ url('videos') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="video"> Video Url</label>
            <input
                type="text"
                id="url"
                name="url"
                autocomplete="url"
                class="form-control
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
            <label for="service">Serviço</label>
            <select
                id="service_id"
                name="service_id"
                class="form-control
                mb-1">

                @foreach($services as $service)
                    <option value="{{$service->id}}" > {{$service -> name}} </option>
                @endforeach
            </select>
        </div>


        <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
    </form>
</div>
