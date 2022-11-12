<h1 class="text-center"> Testemunhos </h1>
<div class="container bg-light efeito3d">
    <div>
        <!--================== NAME ==================-->
        <div class="form-group my-3 " >
            <h4 for="name">Nome</h4>
            <input
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                placeholder="Type your name"
                class="form-control inputbox"
                value="{{($testimonal->name)}}"
                disabled
                aria-describedby="nameHelp">
        </div>

        <!--================== DESCRIPTION ==================-->
        <div class="form-group">
            <h4  for="comment">Testemunho</h4>
            <textarea
                type="text"
                id="comment"
                name="comment"
                autocomplete="comment"
                class="form-control inputbox"
                style="height: 150px;"
                disabled
                aria-describedby="nameHelp">{{($testimonal->comment)}}
                </textarea>
        </div>

        <!--================== VISIBILITY ==================-->
        <div class="form-group my-3">
            <h4 for="visibility">Visibilidade
            </h4>

            <div class="form-check form-check-inline">
                <input
                    type="radio"
                    id="visibilityYES"
                    name="visibility"
                    autocomplete="visibility"
                    style="margin-left: 1px"
                    value="1"
                    {{($testimonal->visibility) == 1 ? 'checked' : '' }}
                    disabled
                    class="form-check-input">

                <label class="form-check-label"
                       for="visibilityYES"> &nbsp; Visivél
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
                for="visibilityNo">Não Visível
                </label>
            </div>

        </div>


        <!--================== BUTTON ==================-->
        <div class="row">
            <div class="col-auto me-auto">
                <a
                    href="{{url('/testimonals')}}"
                    class="mt-2 mb-3 btn btn-outline-secondary">
                    <i class="bi bi-arrow-return-left"></i>
                    <strong>Voltar</strong>
                </a>
                <a
                    href="{{url('testimonals/' . $testimonal->id . '/edit')}}"
                    class="mt-2 mb-3 ml-2 btn btn-outline-primary"
                    style="width: 110px">
                    <strong>Editar</strong>
                    <i class="bi bi-pen"></i>
                </a>
            </div>
            <div class="col-auto">
                <form action="{{url('testimonals/' . $testimonal->id)}}" method="POST">
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
