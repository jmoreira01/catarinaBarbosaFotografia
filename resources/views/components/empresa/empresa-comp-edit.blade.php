<div class="container">
    <form method="POST" action="{{ url('organizations/' . $organization->id) }}">
    @csrf
    @method('PUT')
        <div class="form-group my-3">    <label for="logo" class="mb-2">Logo</label>    <input
                type="file"
                id="logo"
                name="logo"
                onchange="loadFile(event)"
                autocomplete="logo"
                style="width: 40%"
                class="form-control

            @error('logo') is-invalid @enderror"
                value="{{ old('logo') }}"
                required>
            @error('logo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="name">Empresa: </label>
            <input
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                value="{{ $organization -> name}}"
                placeholder="Nome da Empresa"
                class="form-control"
            required>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="email">Email: </label>
            <input
                type="email"
                id="email"
                name="email"
                autocomplete="email"
                value="{{ $organization -> email}}"
                placeholder="Email"
                class="form-control"
                required>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="phone_number">Telefone: </label>
            <input
                type="tel"
                id="phone_number"
                name="phone_number"
                autocomplete="phone_number"
                value="{{ $organization -> phone_number}}"
                placeholder="Telefone de Contato"
                class="form-control">
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="address">Rua: </label>
            <input
                type="text"
                id="address"
                name="address"
                autocomplete="address"
                value="{{ $organization -> address}}"
                placeholder="Morada"
                class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label for="city">Cidade: </label>
            <input
                type="text"
                id="city"
                name="city"
                autocomplete="city"
                value="{{ $organization -> city}}"
                placeholder="Cidade"
                class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label for="country">País: </label>
            <input
                type="text"
                id="country"
                name="country"
                autocomplete="country"
                value="{{ $organization -> country}}"
                placeholder="País"
                class="form-control">
        </div>
        <div class="col-md-3 mb-3">
            <label for="postal_code">Código Postal: </label>
            <input
                type="text"
                id="postal_code"
                name="postal_code"
                autocomplete="postal_code"
                value="{{ $organization -> postal_code}}"
                placeholder="País"
                class="form-control">
        </div>
    </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="facebook">Facebook: </label>
                <input
                    type="url"
                    id="facebook"
                    name="facebook"
                    autocomplete="facebook"
                    value="{{ $organization -> facebook}}"
                    placeholder="link"
                    class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label for="instagram">Instagram: </label>
                <input
                    type="url"
                    id="instagram"
                    name="instagram"
                    autocomplete="instagram"
                    value="{{ $organization -> instagram}}"
                    placeholder="link"
                    class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label for="linkedin">Linkedin: </label>
                <input
                    type="url"
                    id="linkedin"
                    name="flinkedin"
                    autocomplete="linkedin"
                    value="{{ $organization -> linkedin}}"
                    placeholder="link"
                    class="form-control">
            </div>
        </div>
        <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
    </form>
<div class="col text-center m-2">
    <img id="output" height="300px" class="rounded-3">
</div>
</div>


<script>
    function loadFile(event) {
        let output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    }
</script>
