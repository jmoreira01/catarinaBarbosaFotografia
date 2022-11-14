<div class="container align-items-center">
    <div class="row align-items-start">
        <div class="col-10">
            <h1 class="text-center"> Testemunhos </h1>
        </div>
        <div class="col-2 align-items-end">
            <a href="{{url('/testimonals/create')}}" type="button" class="btn btn-success" style="min-width: 100%">
                <i class="bi bi-plus-circle"></i>
            </a>
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
        <tr>
            <th scope="col" class="align-middle">Nome</th>
            <th scope="col" class="align-middle">Testemunho</th>
            <th scope="col" class="align-middle text-center"></th>
            <th scope="col" class="align-middle text-center"></th>

        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($testimonals as $testimonal)
            <tr>
                <td class="align-middle">{{$testimonal->name}}</td>
                <td class="align-middle">{{$testimonal->comment}}</td>
                <td class="align-middle text-center">
                    @if($testimonal->visibility == 0)
                        <i class="bi bi-dash-circle" style="color: red; font-size: 25px; align-items: center"></i>
                    @else
                        <i class="bi bi-check-circle" style="color: green; font-size: 25px; align-items: center" ></i>
                    @endif
                </td>
                <td class="align-middle text-center">
                    <div class="pr-1 m-1">
                        <a href="{{url('testimonals/' . $testimonal->id)}}" type="button" class="btn btn-outline-success"
                           ><strong>Ver</strong> <i class="bi bi-eye"></i></a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
