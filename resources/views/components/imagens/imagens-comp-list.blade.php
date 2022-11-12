<div class="container align-items-center">
    <div class="row align-items-start">
        <div class="col-10">
            <h1 class="text-center"> Imagens </h1>
        </div>
        <div class="col-2 align-items-end">
            <a href="{{url('/images/create')}}" type="button" class="btn btn-success" style="width: 100%">
                <i class="bi bi-plus-circle"></i></a>
        </div>
    </div>
</div>

@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<div class="container efeito3d">

    <table class="table table-striped">
        <thead>
        <tr class="text-center">
            <th scope="col" class="align-middle">Imagem</th>
            <th scope="col" class="align-middle">Serviço</th>
            <th scope="col" class="align-middle"></th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($images as $image)
            <tr>

                <td class="align-middle text-center">
                    @if ($image->image)
                        <img class="w-auto img-responsive rounded-3" src="{{ asset('storage/'.$image->image) }}" alt="" title="" style="max-height: 100px"></a>
                    @else
                        <p>No Image</p>
                    @endif
                </td>
                <td class="align-middle text-center">{{$image->service->name}} </td>
                <td class="align-middle text-center">
                    <div class="pr-1 m-1">
                        <a href="{{url('images/' . $image->id)}}" type="button" class="btn btn-outline-success"
                           style="width: 75px"> <strong> Ver </strong>  <i class="bi bi-eye"></i> </a>
                    </div>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>

