<h1 class="text-center"> Detalhes da empresa </h1>
<div class="container bg-light efeito3d ">
    <form method="POST" action="{{ url('organizations/' . $organization->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row row-cols-2 mt-3">
            <div class="col">
                <!--================== EMPRESA NAME ==================-->
                <div class="form-row">
                    <div class="col mb-3">
                        <h4 for="name">Empresa: </h4>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            autocomplete="name"
                            value="{{ $organization -> name}}"
                            placeholder="Nome da Empresa"
                            class="form-control inputbox"
                            required>
                    </div>
                </div>
                <!--================== EMPRESA EMAIL ==================-->
                <div class="form-row">
                    <div class="col mb-3">
                        <h4 for="email">Email: </h4>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            autocomplete="email"
                            value="{{ $organization -> email}}"
                            placeholder="Email"
                            class="form-control inputbox"
                            required>
                    </div>
                </div>
                <!--================== EMPRESA PHONE ==================-->
                <div class="form-row">
                    <div class="col mb-3">
                        <h4 for="phone_number">Telefone: </h4>
                        <input
                            type="tel"
                            id="phone_number"
                            name="phone_number"
                            autocomplete="phone_number"
                            value="{{ $organization -> phone_number}}"
                            placeholder="Telefone de Contato"
                            class="form-control inputbox">
                    </div>
                </div>

                <!--================== EMPRESA INPUT LOGO ==================-->
                <div class="form-row">
                    <div class="form-group my-3">
                        <h4 for="logo" class="mb-2">Logo</h4>
                        <input
                            type="file"
                            id="logo"
                            name="logo"
                            onchange="loadFile(event)"
                            autocomplete="logo"
                            class="form-control inputbox
            @error('logo') is-invalid @enderror"
                            value="{{ old('logo') }}"
                            required>
                        @error('logo')
                        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
                        @enderror
                        <span><strong>*Por favor insira uma imagem sem fundo/transparente</strong></span>
                    </div>
                </div>

            </div>

            <div class="col">
                <!--================== EMPRESA LOGO ==================-->
                <div class="text-center mt-3">
                    @if ($organization->logo)
                        <img id="output" class="img-responsive rounded-3 inputbox"
                             src="{{ asset('storage/'.$organization->logo) }}"
                             style="max-height: 350px; max-width: 100%">
                    @else
                        <p>No Image</p>
                    @endif

                </div>
            </div>
        </div>

        <div class="row row-cols-2">
            <div class="col">
                <!--================== EMPRESA CITY ==================-->
                <div class="col mb-3">
                    <h4 for="city">Cidade: </h4>
                    <input
                        type="text"
                        id="city"
                        name="city"
                        autocomplete="city"
                        value="{{ $organization -> city}}"
                        placeholder="Cidade"
                        class="form-control inputbox">
                </div>

                <!--================== EMPRESA POSTAL CODE ==================-->

                <div class="col mb-3">
                    <h4 for="postal_code">Código Postal: </h4>
                    <input
                        type="text"
                        id="postal_code"
                        name="postal_code"
                        autocomplete="postal_code"
                        value="{{ $organization -> postal_code}}"
                        placeholder="Código Postal"
                        class="form-control inputbox">
                </div>

            </div>
            <div class="col">
                <!--================== EMPRESA STREET ==================-->
                <div class="col mb-3">
                    <h4 for="address">Rua: </h4>
                    <input
                        type="text"
                        id="address"
                        name="address"
                        autocomplete="address"
                        value="{{ $organization -> address}}"
                        placeholder="Morada"
                        class="form-control inputbox">
                </div>

                <!--================== EMPRESA COUNTRY ==================-->
                <div class="col mb-3">
                    <h4 for="country">País: </h4>
                    <input
                        type="text"
                        id="country"
                        name="country"
                        autocomplete="country"
                        value="{{ $organization -> country}}"
                        placeholder="País"
                        class="form-control inputbox">
                </div>

            </div>
        </div>

        <!--================== FACEBOOK ==================-->
        <div class="col mb-3">
            <h4 for="facebook">Facebook <i class="bi bi-facebook"></i> </h4>
            <input
                type="url"
                id="facebook"
                name="facebook"
                autocomplete="facebook"
                value="{{ $organization -> facebook}}"
                placeholder="link"
                class="form-control inputbox">
        </div>

        <!--================== INSTAGRAM ==================-->
        <div class="col mb-3">
            <h4 for="instagram">Instagram <i class="bi bi-instagram"></i> </h4>
            <input
                type="url"
                id="instagram"
                name="instagram"
                autocomplete="instagram"
                value="{{ $organization -> instagram}}"
                placeholder="link"
                class="form-control inputbox">
        </div>


        <!--================== LINKEDIN ==================-->
        <div class="col mb-3">
            <h4 for="linkedin">Linkedin <i class="bi bi-linkedin"></i> </h4>
            <input
                type="url"
                id="linkedin"
                name="flinkedin"
                autocomplete="linkedin"
                value="{{ $organization -> linkedin}}"
                placeholder="link"
                class="form-control inputbox">
        </div>

        <!--================== BUTTON ==================-->
        <a href="{{url('/organizations/1')}}" class="mt-2 mb-3 btn btn-outline-secondary"><i
                class="bi bi-arrow-return-left"></i> <strong> Voltar </strong> </a>
        <button type="submit" class="mt-2 mb-3 ml-2 btn btn-outline-primary" style="width: 110px"><strong>Guardar </strong> <i
                class="bi bi-check-lg"></i></button>


    </form>
    <script>
        function loadFile(event) {
            let output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
</div>




