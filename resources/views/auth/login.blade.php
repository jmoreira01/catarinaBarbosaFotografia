<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Costom Stylesheet -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Costom Icons CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <!-- SwiperJS  CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <!-- Imagem shortcut barra de navegação -->
    <link rel="shortcut icon" href="/img/Rosa_.png" type="image/x-icon">
    <title>Login Page</title>
</head>

<body>

<img class="wave" src="/img/image 9.jpg">
<div class="container_login">
    <div class="img_login">
        <img class="img_login" src="/img/image 5.jpg">
    </div>
    <div class="login-content">
        <form class="form_login" method="POST" action="{{ route('login') }}">
            @csrf

            <img class="img_login" src="/img/Rosa_.png">
            <h2 class="title_login">Bem-Vinda</h2>
            <div class="input-div one">
                <div class="i_login">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <!-- INPUT EMAIL -->

                    <input
                        type="text_login"
                        class="input_login"
                        placeholder="Email"
                        id="email"
                           @error('email')
                        is-invalid

                        @enderror
                    name="email"
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                        autofocus>

                    @error('email')
                    <span
                        class="invalid-feedback"
                        role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
            </div>
            <div class="input-div pass">
                <div class="i_login">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <!-- INPUT PASS -->

                    <input type="password" class="input_login" placeholder="Senha" id="password"
                           @error('password') is-invalid @enderror" name="password" required
                    autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            @if (Route::has('password.request'))
                <a class="passwordForgot" href="{{ route('password.request') }}">{{ __('Esqueceu-se da Password') }}</a>
            @endif

            <div>
                <button type="submit" class="btn_login"> LOGIN
                </button>
            </div>

        </form>
    </div>
</div>

<script src="js/main.css"></script>
</body>
</html>
