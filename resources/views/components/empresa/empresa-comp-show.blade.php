<h1 class="text-center"> Detalhes da empresa </h1>
<div class="container bg-light efeito3d ">
    <form method="GET" action="{{ url('organizations/{organization}')}}">
        @csrf

        <div class="row row-cols-2 mt-3">
            <div class="col">
                <!--================== EMPRESA NAME ==================-->
                <div class="form-row">
                    <div class="col mb-3">
                        <h4 for="name">Empresa:</h4>
                        <input
                            type="text"
                            id="name"
                            value="{{ $organization -> name}}"
                            class="form-control inputbox"
                            disabled>
                    </div>
                </div>
                <!--================== EMPRESA EMAIL ==================-->
                <div class="form-row">
                    <div class="col mb-3">
                        <h4 for="email">Email:</h4>
                        <input
                            type="email"
                            id="email"
                            value="{{ $organization -> email}}"
                            class="form-control inputbox"
                            disabled>
                    </div>
                </div>
                <!--================== EMPRESA PHONE ==================-->
                <div class="form-row">
                    <div class="col mb-3">
                        <h4 for="phone_number">Telefone:</h4>
                        <input
                            type="tel"
                            id="phone_number"
                            value="{{ $organization -> phone_number}}"
                            class="form-control inputbox"
                            disabled>
                    </div>
                </div>
            </div>
            <div class="col">
                <!--================== EMPRESA LOGO ==================-->
                <div class="col m-2 text-center">
                    @if ($organization->logo)
                        <img class="img-responsive rounded-3 inputbox"
                             src="{{ asset('storage/'.$organization->logo) }}"
                             style="max-height: 260px; max-width: 100%">
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
                    <h4 for="city">Cidade:</h4>
                    <input
                        type="text"
                        id="city"
                        value="{{ $organization -> city}}"
                        class="form-control inputbox"
                        disabled>
                </div>

                <!--================== EMPRESA POSTAL CODE ==================-->
                <div class="col mb-3">
                    <h4 for="postal_code">Código Postal:</h4>
                    <input
                        type="number"
                        id="postal_code"
                        value="{{ $organization -> postal_code}}"
                        class="form-control inputbox"
                        disabled>
                </div>
            </div>
            <div class="col">
                <!--================== EMPRESA STREET ==================-->
                <div class="col mb-3">
                    <h4 for="address">Rua:</h4>
                    <input
                        type="text"
                        id="address"
                        value="{{ $organization -> address}}"
                        class="form-control inputbox"
                        disabled>
                </div>
                <!--================== EMPRESA COUNTRY ==================-->
                <div class="col mb-3">
                    <h4 for="country">País:</h4>
                    <input
                        type="text"
                        id="country"
                        value="{{ $organization -> country}}"
                        class="form-control inputbox"
                        disabled>
                </div>
            </div>
        </div>

        <!--================== FACEBOOK ==================-->
        <div class="col mb-3">
            <h4 for="facebook">Facebook <i class="bi bi-facebook"></i></h4>
            <input
                type="url"
                id="facebook"
                value="{{ $organization -> facebook}}"
                placeholder="link"
                class="form-control inputbox"
                disabled>
        </div>


        <!--================== INSTAGRAM ==================-->
        <div class="col mb-3">
            <h4 for="instagram">Instagram <i class="bi bi-instagram"></i></h4>
            <input
                type="url"
                id="instagram"
                value="{{ $organization -> instagram}}"
                placeholder="link"
                class="form-control inputbox"
                disabled>
        </div>


        <!--================== LINKEDIN ==================-->
        <div class="col mb-3">
            <h4 for="linkedin">Linkedin <i class="bi bi-linkedin"></i></h4>
            <input
                type="url"
                id="linkedin"
                value="{{ $organization -> linkedin}}"
                placeholder="link"
                class="form-control inputbox"
                disabled>
        </div>

        <!--================== BUTTON ==================-->
        <div>
            <a href="{{url('/home')}}" class="mt-2 mb-3 btn btn-outline-secondary"><i class="bi bi-arrow-return-left"></i> <strong> Voltar </strong> </a>
            <a href="{{url('/organizations/' . $organization->id . '/edit')}}" class="mt-2 mb-3 ml-2 btn btn-outline-primary" style="width: 110px"> <strong> Editar </strong> <i class="bi bi-pen"></i> </a>
        </div>

    </form>
</div>

