<h1 class="text-center"> Serviços </h1>
<div class="container bg-light rounded-3">
    <form method="POST" action="{{ url('testimonals/' . $testimonal->id) }}">

        @csrf
        @method('PUT')

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
                aria-describedby="nameHelp"
                disabled>

        </div>

        <!--================== TESTIMONALS ==================-->
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
                <a href="{{url('/testimonals')}}" class="mt-2 mb-5 mr-2 btn btn-outline-info">Voltar</a>
                <button type="submit" class="mt-2 mb-5 btn btn-outline-success">Salvar</button>
            </div>
        </div>
</form>
</div>
