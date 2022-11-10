<x-embed-styles />
<div class="row">
    <div class="column">
<td>
    <a href="{{url('videos/create')}}" type="button" class="btn btn-success">Inserir</a>
</td>
</div>
    <div class="column"></div>
<div class="container" style="
       text-align: center;">
    <table class="table">
    <thead class="thead">
    <tr>
        <th scope="col">VIDEO</th>
    </tr>
    </thead>
    <tbody>

    @foreach($videos as $video)
        <tr>
            <th scope="row">
                <div class="video" style="
                width: 560px;
                height: 315px;
                display: block;
                margin-left: auto;
                margin-right: auto;
                ">
                    <x-embed url="{{ $video->url}}"/>
                </div>
                <button class="tag-service">{{$video -> service -> name}}</button>

                <br>
                <br>

                <div>
                <a href="{{url('videos/' . $video->id . '/edit')}}" type="button" class="btn btn-primary">Editar</a>
                <form action="{{url('videos/' . $video->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                </div>
            </th>
        </tr>
    @endforeach
    </tbody>
    </table>

</div>
</div>
