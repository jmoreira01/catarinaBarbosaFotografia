<h1 class="text-center"> Novo Serviço </h1>
<div class="container bg-light efeito3d">
    <form method="POST" action="{{ url('services') }}">
        @csrf

        <!-- ======================== Input Nome ============================== -->
        <div class="form-group my-3">
            <h4 for="name">Nome</h4>
            <input
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                placeholder="Indique qual o nome do serviço"
                class="form-control inputbox
                @error('name') is-invalid @enderror"
                value="{{ old('name') }}"
                required
                aria-describedby="nameHelp">
            @error('name')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror


        </div>

        <!-- ======================== Input Descrição ============================== -->
        <div class="form-group mt-3">
            <h4 for="description">Descrição</h4>
            <textarea
                type="text"
                id="description"
                name="description"
                autocomplete="description"
                placeholder="Indique qual a descrição do serviço"
                style="height: 150px"
                class="form-control inputbox
                @error('description') is-invalid @enderror"
                required
                aria-describedby="nameHelp"></textarea>
            @error('description')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- ======================== BUTTON ============================== -->
        <a href="{{url('/services')}}"
           class="mt-2 mb-3 btn btn-outline-secondary">
            <i class="bi bi-arrow-return-left"></i>
            <strong>Voltar</strong>
        </a>
        <button
            type="submit"
            class="mt-2 mb-3 ml-2 btn btn-outline-primary"
            style="width: 110px"><strong>Guardar</strong>
            <i class="bi bi-check-lg"></i>
        </button>

    </form>
</div>
