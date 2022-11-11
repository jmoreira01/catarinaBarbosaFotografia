<div class="container">
    <form method="GET" action="{{ url('organizations/{organization}')}}">
        @csrf

        <!-- ======================== Imagem ============================== -->
        <div class="col m-2">
            @if ($organization->logo)
                <img class="w-25 img-responsive rounded-3"
                     src="{{ asset('storage/'.$organization->logo) }}"
                     style="border-radius: 10px; border-color:
                     black; border-style:
                     solid "></a>
            @else
                <p>No Image</p>
            @endif
        </div>

        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="name">Empresa:</label>
                <input
                    type="text"
                    id="name"
                    value="{{ $organization -> name}}"
                    class="form-control"
                    disabled>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="email">Email:</label>
                <input
                    type="email"
                    id="email"
                    value="{{ $organization -> email}}"
                    class="form-control"
                    disabled>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="phone_number">Telefone:</label>
                <input
                    type="tel"
                    id="phone_number"
                    value="{{ $organization -> phone_number}}"
                    class="form-control"
                    disabled>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="address">Rua:</label>
                <input
                    type="text"
                    id="address"
                    value="{{ $organization -> address}}"
                    class="form-control"
                    disabled>
            </div>
            <div class="col-md-6 mb-3">
                <label for="city">Cidade:</label>
                <input
                    type="text"
                    value="{{ $organization -> city}}"
                    class="form-control"
                    disabled>
            </div>
            <div class="col-md-6 mb-3">
                <label for="country">País:</label>
                <input
                    type="text"
                    id="country"
                    value="{{ $organization -> country}}"
                    class="form-control"
                    disabled>
            </div>
            <div class="col-md-3 mb-3">
                <label for="postal_code">Código Postal:</label>
                <input
                    type="number"
                    id="postal_code"
                    value="{{ $organization -> postal_code}}"
                    class="form-control"
                    disabled>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="facebook">Facebook:</label>
                <input
                    type="url"
                    id="facebook"
                    value="{{ $organization -> facebook}}"
                    placeholder="link"
                    class="form-control"
                    disabled>
            </div>

            <div class="col-md-6 mb-3">
                <label for="instagram">Instagram:</label>
                <input
                    type="url"
                    id="instagram"
                    value="{{ $organization -> instagram}}"
                    placeholder="link"
                    class="form-control"
                    disabled>
            </div>
            <div class="col-md-6 mb-3">
                <label for="linkedin">Linkedin:</label>
                <input
                    type="url"
                    id="linkedin"
                    value="{{ $organization -> linkedin}}"
                    placeholder="link"
                    class="form-control"
                    disabled>
            </div>
        </div>
        <div>
            <a href="{{url('/home')}}" class="mt-2 mb-5 mr-2 btn btn-outline-info">Voltar</a>
            <a href="{{url('/organizations/' . $organization->id . '/edit')}}" class="mt-2 mb-5 ml-2 btn btn-warning">Editar</a></div>
    </form>
</div>
