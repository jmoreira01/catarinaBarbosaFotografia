<x-embed-styles/>

<div style="margin-top: 150px; text-align: center">
<h1 class="text-gallery">{{ $service->name }}</h1>
</div>
@if((count($images) > 0))
    <div class="gallery-content" style="margin-bottom: 150px; margin-top: 100px;">
        <h2 style="margin-bottom: 30px;">Galeria de Fotos</h2>
        <div class="photo-gallery">
            @foreach($images as $image)
                <div class="pic" style="height: 420px;">
                    <img src="{{ asset('storage/'.$image->image) }}" style="height: 420px;">
                </div>
            @endforeach
        </div>
    </div>
@else
@endif



@if((count($videos) > 0))
    <div class="gallery-content" style="margin-bottom: 150px; margin-top: 300px;">
        <h2 style="margin-bottom: 30px;">Galeria de Videos</h2>
        <div class="photo-gallery">
            @foreach($videos as $video)
                <div class="video">
                    <x-embed url="{{ $video->url}}"/>
                </div>
            @endforeach
        </div>
    </div>
@else
@endif
