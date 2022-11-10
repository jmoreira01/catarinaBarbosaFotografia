<h1 class="text-center"> Serviços </h1>
<div class="container bg-light rounded-3">
    <div>
        @csrf
        <!--================== NAME ==================-->
        <div class="form-group">
            <label for="name">Nome</label>
            <input
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                placeholder="Type your name"
                class="form-control"
                value="{{($service->name)}}"
                disabled
                aria-describedby="nameHelp">
        </div>

        <!--================== DESCRIPTION ==================-->
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea
                type="text"
                id="description"
                name="description"
                autocomplete="description"
                class="form-control"
                style="height: 150px"
                disabled
                aria-describedby="nameHelp">
                {{($service->description)}}
                </textarea>
        </div>


        <!--================== BUTTON ==================-->
        <div class="row">
            <div class="col-auto me-auto">
                <a href="{{url('/services')}}" class="mt-2 mb-5 mr-2 btn btn-outline-info">Voltar</a>
                <a href="{{url('services/' . $service->id . '/edit')}}" class="mt-2 mb-5 ml-2 btn btn-warning" style="width: 110px">Editar <i class="bi bi-pen"></i> </a>
            </div>
            <div class="col-auto">
                <form action="{{url('services/' . $service->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="mt-2 mb-5 mr-2 btn btn-danger" style="width: 110px">Eliminar <i class="bi bi-trash3"></i> </button>
                </form>
            </div>
        </div>


    </div>
</div>
