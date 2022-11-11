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
                value="{{($testimonal->name)}}"
                disabled
                aria-describedby="nameHelp">
        </div>

        <!--================== DESCRIPTION ==================-->
        <div class="form-group">
            <label for="comment">Testemunho</label>
            <textarea
                type="text"
                id="comment"
                name="comment"
                autocomplete="comment"
                class="form-control"
                style="height: 150px"
                disabled
                aria-describedby="nameHelp">{{($testimonal->comment)}}
                </textarea>
        </div>

        <!--================== VISIBILITY ==================-->
        <div class="form-floating my-3">
            <label for="visibility">Visibilidade
            </label>
            <br>
            <br>
            <div class="form-check form-check-inline">
                <input
                    type="radio"
                    id="visibilityYES"
                    name="visibility"
                    autocomplete="visibility"
                    value="1"
                    {{($testimonal->visibility) == 1 ? 'checked' : '' }}
                    disabled
                    class="form-check-input ">

                <label class="form-check-label"
                       for="visibilityYES">Yes
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input
                    type="radio"
                    id="visibilityNo"
                    name="retired"
                    autocomplete="retired"
                    value="0"
                    {{($testimonal->visibility) == 0 ? 'checked' : '' }}
                    disabled
                    class="form-check-input">

                <label class="form-check-label"
                for="visibilityNo">No
                </label>
            </div>

        </div>


        <!--================== BUTTON ==================-->
        <div class="row">
            <div class="col-auto me-auto">
                <a href="{{url('/testimonals')}}" class="mt-2 mb-5 mr-2 btn btn-outline-info">Voltar</a>
                <a href="{{url('testimonals/' . $testimonal->id . '/edit')}}" class="mt-2 mb-5 ml-2 btn btn-warning" style="width: 110px">Editar <i class="bi bi-pen"></i> </a>
            </div>
            <div class="col-auto">
                <form action="{{url('testimonals/' . $testimonal->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="mt-2 mb-5 mr-2 btn btn-danger" style="width: 110px">Eliminar <i class="bi bi-trash3"></i> </button>
                </form>
            </div>
        </div>
    </div>
</div>
