<h1 class="text-center"> Novo serviço </h1>
<div class="container bg-light rounded-3">
    <form method="POST" action="{{ url('services') }}">
        @csrf

        <!-- ======================== Input Nome ============================== -->
        <div class="form-group">
            <label for="name">Nome</label>
            <input
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                placeholder="Indique qual o nome do serviço"
                class="form-control
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
            <label for="description">Descrição</label>
            <textarea
                type="text"
                id="description"
                name="description"
                autocomplete="description"
                placeholder="Indique qual a descrição do serviço"
                style="height: 150px"
                class="form-control
                @error('description') is-invalid @enderror"
                required
                aria-describedby="nameHelp"></textarea>
            @error('description')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- ======================== Botão ============================== -->

        <button type="submit" class="mt-2 mb-5 btn btn-primary">Criar</button>

        <a href="{{url('/services')}}" class="mt-2 mb-5 mr-2 btn btn-outline-info">Voltar</a>

    </form>
</div>
