<h1 class="text-center"> Serviços </h1>
<div class="container bg-light efeito3d">
    <div>
        @csrf
        <!--================== NAME ==================-->
        <div class="form-group my-3">
            <h4 for="name">Nome</h4>
            <input
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                placeholder="Type your name"
                class="form-control inputbox"
                value="{{($service->name)}}"
                disabled
                aria-describedby="nameHelp">
        </div>

        <!--================== DESCRIPTION ==================-->
        <div class="form-group">
            <h4 for="description">Descrição</h4>
            <textarea type="text"
                id="description"
                name="description"
                autocomplete="description"
                class="form-control inputbox"
                style="height: 150px;"
                disabled
                aria-describedby="nameHelp">{{($service->description)}}</textarea>
        </div>


        <!--================== BUTTON ==================-->
        <div class="row">
            <div class="col-auto me-auto">
                <a
                    href="{{url('/services')}}"
                    class="mt-2 mb-3 btn btn-outline-secondary">
                    <i class="bi bi-arrow-return-left"></i>
                    <strong>Voltar</strong>
                </a>
                <a
                    href="{{url('services/' . $service->id . '/edit')}}"
                    class="mt-2 mb-3 ml-2 btn btn-outline-primary"
                    style="width: 110px">
                    <strong>Editar</strong>
                    <i class="bi bi-pen"></i>
                </a>
            </div>
            <div class="col-auto">
                <form action="{{url('services/' . $service->id)}}" method="POST">
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
