<h1 class="text-center"> Editar Serviço </h1>
<div class="container bg-light efeito3d">
    <form method="POST" action="{{ url('testimonals/' . $testimonal->id) }}">

        @csrf
        @method('PUT')

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
                value="{{($testimonal->name)}}"
                aria-describedby="nameHelp"
                disabled>

        </div>

        <!--================== TESTIMONALS ==================-->
        <div class="form-group">
            <h4 for="comment">Testemunho</h4>
            <textarea
                type="text"
                id="comment"
                name="comment"
                autocomplete="comment"
                class="form-control inputbox"
                style="height: 150px"
                disabled
                aria-describedby="nameHelp">{{($testimonal->comment)}}
                </textarea>
        </div>

        <!--================== VISIBILITY ==================-->
        <div class="form-group my-3">
            <h4 for="visibility">Visibilidade &nbsp;
            </h4>
            <div class="form-check form-check-inline">
                <input
                    type="radio"
                    id="visibilityYes"
                    name="visibility"
                    autocomplete="visibility"
                    value="1"
                    {{($testimonal->visibility) == 1 ? 'checked' : '' }}
                    class="form-check-input
                    @error('visibility') is-invalid @enderror"
                @error('visibility')
                <span class="invalid-feedback"
                      role="alert">
                    <strong>{{ $message }}
                    </strong>
                </span>
                @enderror
                <label
                    class="form-check-label"
                    for="visibilityYes">Visível
                </label>

            </div>
            <div class="form-check form-check-inline">
                <input
                    type="radio"
                    id="visibilityNo"
                    name="visibility"
                    autocomplete="visibility"
                    value="0"
                    {{($testimonal->visibility) == 0 ? 'checked' : '' }}
                    class="form-check-input
                    @error('visibility') is-invalid
                    @enderror"
                @error('visibility')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}
                    </strong>
                </span>
                @enderror
                <label
                    class="form-check-label"
                    for="visibilityNo">Não Visível
                </label>
            </div>
        </div>


        <!--================== BUTTON ==================-->
        <div class="row">
            <div class="col-auto me-auto">
                <a href="{{url('/testimonals')}}" class="mt-2 mb-3 btn btn-outline-secondary"><i class="bi bi-arrow-return-left"></i> Voltar</a>
                <button type="submit" class="mt-2 mb-3 ml-2 btn btn-outline-primary" style="width: 110px">Salvar <i class="bi bi-check-lg"></i></button>
            </div>
        </div>
</form>
</div>
