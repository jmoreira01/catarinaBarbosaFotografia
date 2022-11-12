<h1 class="text-center"> Novo Testemunho </h1>
<div class="container bg-light efeito3d ">
    <form method="POST" action="{{ url('testimonals')}}">
        @csrf


        <!--================== NAME ==================-->
        <div class="form-group my-3">
            <h4 for="name">Nome</h4>
            <input
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                placeholder="Insira o seu nome"
                class="form-control inputbox"
                aria-describedby="nameHelp"
                >

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
                <a
                    href="{{url('/testimonals')}}"
                    class="mt-2 mb-3 btn btn-outline-secondary">
                    <i class="bi bi-arrow-return-left"></i>
                    <strong>Voltar</strong>
                </a>
                <button
                    type="submit"
                    class="mt-2 mb-3 ml-2 btn btn-outline-primary"
                    style="width: 110px">
                    <strong>Guardar</strong>
                    <i class="bi bi-check-lg"></i>
                </button>
            </div>
        </div>
    </form>
</div>

