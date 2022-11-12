<x-embed-styles />


<div class="m-4">
    <div class="videos-header text-center align-content-lg-center">
    <h1>Videos</h1>
        <div class="col-1">
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4"
         style="
         justify-content: center;
         text-align: center">

        @foreach($videos as $video)

        <div class="col efeito3d">
            <div class="card" style="
                width: 576px;
                height: 155px;
                display:inline;
                margin-left: auto;
                margin-right: auto;
                ">
                <div class="video">
                    <x-embed url="{{ $video->url}}"/>
                </div>
                <br>
                <button class="tag-service">{{$video -> service -> name}}</button>

                <div class="card-body">
                    <div class="btn-group" role="group" aria-label="Basic outlined example">

                        <a
                            href="{{url('videos/' . $video->id . '/edit')}}"
                            class="mt-2 mb-3 ml-2 btn btn-outline-primary"
                            style="width: 110px; border-radius: 5px">
                            <strong>Editar</strong>
                            <i class="bi bi-pen"></i>
                        </a>

                        &nbsp;&nbsp;

                        <form action="{{url('videos/' . $video->id)}}"
                              method="POST">
                            @csrf
                            @method('DELETE')
                            <button
                                type="submit"
                                class="mt-2 mb-3 mr-2 btn btn-danger"
                                style="width: 110px">
                                <strong>Eliminar</strong>
                                <i class="bi bi-trash3"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        @endforeach
            <div class="col efeito3d">
                <br><br>
                    <a href="{{url('videos/create')}}"
                       style="font-size: 120px;
                       text-decoration: none;

                       ">
                        <i class="bi bi-play-btn"></i>
                        <p  style="font-size: 50px">Adicionar <br> Vídeo</p>
                    </a>
            </div>
    </div>
</div>

