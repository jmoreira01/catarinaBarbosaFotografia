<h1 class="text-center"> Serviços </h1>
<div class="container bg-light rounded-3">
    <form method="POST" action="{{ url('services/' . $service->id) }}">
        @csrf
        @method('PUT')

        <!-- ======================== Input Nome ============================== -->
        <div class="form-group">
            <label for="name">Nome</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ $service -> name}}"
                autocomplete="name"
                placeholder="Type your name"
                class="form-control">

        </div>

        <!-- ======================== Input Descrição ============================== -->
        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea
                type="text"
                id="description"
                name="description"
                class="form-control"
                style="height: 150px"
                placeholder="Type your description"> {{ $service -> description}} </textarea>
        </div>

        <!-- ======================== Botão ============================== -->

        <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>

        <a href="{{url('/services')}}" class="mt-2 mb-5 mr-2 btn btn-outline-info">Voltar</a>

    </form>
</div>
