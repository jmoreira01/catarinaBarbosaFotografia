<h1 class="text-center"> Serviços </h1>
<div class="container bg-light efeito3d">
    <form method="POST" action="{{ url('services/' . $service->id) }}">
        @csrf
        @method('PUT')

        <!-- ======================== NAME ============================== -->
        <div class="form-group my-3">
            <h4 for="name">Nome</h4>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ $service -> name}}"
                autocomplete="name"
                placeholder="Type your name"
                class="form-control inputbox">

        </div>

        <!-- ======================== DESCRIPTION ============================== -->
        <div class="form-group">
            <h4 for="description">Descrição</h4>
            <textarea
                type="text"
                id="description"
                name="description"
                class="form-control inputbox"
                style="height: 150px"
                placeholder="Type your description"> {{ $service -> description}} </textarea>
        </div>

        <!-- ======================== BUTTON  ============================== -->
        <a
            href="{{url('/services')}}"
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
    </form>
</div>
