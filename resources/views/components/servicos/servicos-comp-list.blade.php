<div class="container align-items-center">
    <div class="row align-items-start">
        <div class="col-10">
            <h1 class="text-center"> Serviços </h1>
        </div>
        <div class="col-2 align-items-end">
            <a href="{{url('/services/create')}}" type="button" class="btn btn-success" style="width: 100%">
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
<div class="container">

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col" class="align-middle">Nome</th>
            <th scope="col" class="align-middle">Descrição</th>
            <th scope="col" class="align-middle"></th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($services as $service)
            <tr>
                <td class="align-middle">{{$service->name}}</td>
                <td class="align-middle">{{$service->description}} </td>
                <td class="align-middle text-center">
                    <div class="pr-1 m-1">
                        <a href="{{url('services/' . $service->id)}}" type="button" class="btn btn-outline-success"
                           style="width: 75px">Ver <i class="bi bi-eye"></i> </a>
                    </div>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>

