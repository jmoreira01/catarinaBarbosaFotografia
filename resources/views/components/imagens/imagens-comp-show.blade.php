<<<<<<< Updated upstream
=======
<h1 class="text-center"> Imagens </h1>
<div class="container bg-light rounded-3">
    <div>

        <!-- ======================== Input Serviço ============================== -->
        <div class="form-group my-3">
            <label for="service" class="my-2">Imagem</label>
            <br>
            <input
                type="text"
                id="service_id"
                name="service_id"
                autocomplete="service"
                style="width: 100%"
                class="form-control"
                value="{{($image->service->name)}}"
                disabled>

        </div>

        <!-- ======================== Imagem ============================== -->
        <div class="col text-center m-2">
            @if ($image->image)
                <img class="w-25 img-responsive rounded-3" src="{{ asset('storage/'.$image->image) }}" alt="" title=""></a>
            @else
                <p>No Image</p>
            @endif
        </div>


        <!-- ======================== Botão ============================== -->

        <div class="row">
            <div class="col-auto me-auto">
                <a href="{{url('/images')}}" class="mt-2 mb-5 mr-2 btn btn-outline-info">Voltar</a>
                <a href="{{url('images/' . $image->id . '/edit')}}" class="mt-2 mb-5 ml-2 btn btn-warning" style="width: 110px">Editar <i class="bi bi-pen"></i> </a>
            </div>
            <div class="col-auto">
                <form action="{{url('images/' . $image->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="mt-2 mb-5 mr-2 btn btn-danger" style="width: 110px">Eliminar <i class="bi bi-trash3"></i> </button>
                </form>
            </div>
        </div>

    </div>
</div>




>>>>>>> Stashed changes
