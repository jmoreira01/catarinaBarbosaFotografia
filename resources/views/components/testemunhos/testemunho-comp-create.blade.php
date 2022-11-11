<h1 class="text-center"> Serviços </h1>
<div class="container bg-light rounded-3">
    <form method="POST" action="{{ url('testimonals')}}">
        @csrf


        <!--================== NAME ==================-->
        <div class="form-group">
            <label for="name">Nome</label>
            <input
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                placeholder="Insira o seu nome"
                class="form-control"
                aria-describedby="nameHelp"
                >

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
                aria-describedby="nameHelp"></textarea>
        </div>

        <!--================== VISIBILITY ==================-->
        <div class="form-floating my-3">
                <input
                    type="radio"
                    id="visibilityNo"
                    name="visibility"
                    autocomplete="visibility"
                    value="0"
                    checked
                    class="form-check-input"
                    hidden>
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

