<div class="gallery-content" style="margin-bottom: 150px;margin-top: 200px">
    <h1 class="text-gallery">Galeria de Fotos</h1>
    <h2 style="margin-bottom: 25px">{{ $service->name }}</h2>
        <div class="photo-gallery">
            @foreach($images as $image)
                <div class="pic">
                    <img src="{{ asset('storage/'.$image->image) }}">
                </div>
            @endforeach
        </div>
    </div>
