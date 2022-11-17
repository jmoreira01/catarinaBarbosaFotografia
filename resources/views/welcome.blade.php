<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CatarinaBarbosaFotografia@</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <!-- Costom Icons CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <!-- SwiperJS  CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <!-- Fontawesome  CDN -->
    <script src="https://kit.fontawesome.com/3d3a2feb81.js" crossorigin="anonymous"></script>
    <!-- Imagem shortcut barra de navegação -->
    <link rel="shortcut icon" href="{{'storage/'.$organizations->logo}}" type="image/x-icon">
</head>
<body>
<!-- NavBar -->
<nav>
    <div class="container nav__container">
        <a href="/" class="nav_logo">
            <img src="{{ asset('storage/'.$organizations->logo) }}" alt="Logo">
        </a>
        <ul class="nav__links">
            <li><a href="/">Home</a></li>
            <li><a href="#about">Sobre Mim</a></li>
            <li><a href="#gallery">Serviços</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
        <!-- Social Medias -->
        <ul class="nav__socials">
            <li><a href="{{ route('login') }}"><i class="uil uil-envelope-upload-alt"></i></a></li>
        </ul>
        <!-- Design avaiable for mobiles and tablets only -->
        <button class="nav__toggle-btn" id="nav__toogle-open"><i class="uil uil-bars"></i></button>
        <button class="nav__toggle-btn" id="nav__toogle-close"><i class="uil uil-times-circle"></i></button>
    </div>
</nav>

<!-- Home section -->

<header>
    <div class="container header_container">
        <div class="header_left">
            <div class="header_image-bg"></div>
            <div class="header_image-lg">
                <img src="img/image 9.jpg" alt="FotoCatarinaFacebook">
            </div>
            <div class="header_image-sm">
                <img src="img/image 9.jpg" alt="FotoCatarinaFacebook">
            </div>
        </div>
        <div class="header_right">
            <div class="header_head">
                <h1>Compartilhe momentos únicos pelas minhas lentes!</h1>
                <p>Uma fotografia tem o poder de parar o tempo e captar a essência para todo o sempre.<br>Um sorriso,
                    uma lágrima, um momento de conforto, de alegria e tudo o que a vida proporcionar.
                    <br> Um(a) filho(a) é a razão de tudo isso e sei o quanto importante é, acompanhar o crescimento dos
                    seus pelos anos fora.
                    <br>Terei todo o gosto em captar desde o nascimento até ao crescimento do seu rebento, pois sei o
                    quanto é importante guardar esses momentos.
                    <br><strong>Veja o leque de serviços que ofereço e sinta-se à vontade para explorar esta página e
                        conversar comigo.</strong></p>
            </div>
        </div>
    </div>
</header>

<!-- Image Frames - home section -->
<div class="header_frames">
    <div class="header_frame">
        <img src="img/image 8.jpg" alt="FotoCatarinaFacebook">
    </div>
    <div class="header_frame">
        <img src="img/image 7.jpg" alt="FotoCatarinaFacebook">
    </div>
</div>

<!-- Animation btn - home section -->
<a href="#about" class="animation_btn header_btn">
    <i class="uil uil-camera-change "></i>
    <p>Catarina Barbosa - Fotografia</p>
</a>
<!-- Home section end -->

<!-- About Me section starts -->
<section id="about">
    <div class="container about_container">
        <h2 class="about_title">Catarina Barbosa Fotografia</h2>
        <div class="about_left">
            <div class="about_image">
                <div class="about_image-bg"></div>
                <div class="about_image-lg">
                    <img src="img/Catarina.jpg">
                </div>
                <div class="about_image-sm">
                    <img src="img/Catarina.jpg">
                </div>
            </div>
        </div>
        <div class="about_right">
            <p>Sou a Catarina Barbosa e sou fotógrafa profissional.</p>
            <p>A minha paixão é a fotografia.</p>
            <p>Desde muito cedo que não vivo sem uma camera, captando a essência da beleza da vida em pequenos pedaços
                de filme fotográfico.</p>
            <p>Numa altura em que as cameras digitais tornaram-se moda, tornou-me mais ambiciosa nesta área que me
                apaixona. Foi numa noite de natal, quando recebi a minha primeira máquina, que decididamente,
                entreguei-me a esta área. Com foco e, extremamente motivada, investi todos os recursos que consegui para
                explorar e aprender mais sobre fotografia com o intuito de trabalhar profissionalmente. A minha paixão
                era notável e incansavelmente, queria crescer neste mundo. </p>
            <p>E, com a mesma vontade que tenho de respirar, aceitei o desafio proposto pelo meu companheiro para para
                deixar o solo confortável e voar para outros horizontes. Entre cursos, workshops e aprendizagens,
                cimentei o caminho que me faz feliz. Hoje sou fotógrafa!</p>
            <p>Comecei por fazer as primeiras sessões com casamentos e batizados, sentindo a força que me move com a
                beleza da minha objectiva. Continuo sem parar e quero mais, quero mostrar o melhor que sei para as
                pessoas que chegam até mim.</p>
            <p>Recentemente, especializei-me em fotografia de bebés e recém-nascidos.</p>
            <p>Agora que comecei neste mundo não quero parar, quero ir onde a fotografia me quiser levar.</p>
        </div>
    </div>
</section>
<!-- About Me section end -->

<!-- Gallery Section Stars - com SwiperJS -->
<!--Gallery section starts-->

<div class="gallery-content" style="margin-bottom: 80px" id="gallery">
    <h1 class="text-gallery">Galeria de Fotos</h1>
    <div class="photo-gallery">
        @foreach($images->take(count($services)) as $image)
            <a href="{{url('gallery/' . $image->service_id)}}">
                <div class="pic" style="margin-bottom: 50px;">
                    <img src="{{ asset('storage/'.$image->image) }}">
                    <h4 style="margin-top: 15px; font-size: 20px">{{$image->service->name}}</h4>
                </div>
            </a>
        @endforeach
    </div>

</div>
<!--Gallery section end-->

<!-- Testemunhos start -->
<div id="testimonals" class="container">
    <div class="swiper mySwiper">
        <h1>Diga-nos a sua opinião! &nbsp;
            <a href="#toggleComment">
                <i class="fa-solid fa-heart fa-beat"
                   style="--fa-animation-duration: 2s;
                   cursor: pointer"
                   onclick="toggleFormTestimonal()">
                </i>
            </a>
        </h1>

        <div class="swiper-wrapper" style="height: 12rem !important;">
            @foreach($testimonals as $testimonal)
                <div class="swiper-slide" style="overflow-y: auto">
                    <div style="text-align: center; font-size: 20px;">
                        <i>"{{$testimonal->comment}}"</i>
                    </div>
                    <div style="text-align: center">
                        {{$testimonal->name}}
                    </div>
                </div>

            @endforeach
        </div>
        <div class="swiper-pagination"></div>

    </div>
</div>
<!-- Testemunhos end -->


<!--form testimonal section starts-->
<div class="contact toggleComment" id="toggleComment">
    <br>
    <br>
    <div class="contact-box">
        <div class="contact_left"><img src="img/image 8.jpg"></div>
        <div class="contact_right">
            <form method="POST" action="{{ url('testimonals')}}">
                @csrf
                <h2 class="text_efect">Testemunho
                </h2>
                <input
                    type="text"
                    id="name"
                    name="name"
                    autocomplete="name"
                    placeholder="Insira o seu nome"
                    class="form-control field"
                    aria-describedby="nameHelp"
                >
                <textarea
                    type="text"
                    id="comment"
                    name="comment"
                    autocomplete="comment"
                    placeholder="Insira o seu testemunho"
                    class="form-control field"
                    style="height: 150px"
                    aria-describedby="nameHelp"></textarea>
                <input
                    type="radio"
                    id="visibilityNo"
                    name="visibility"
                    autocomplete="visibility"
                    value="0"
                    checked
                    class="form-check-input"
                    hidden>
                <button
                    type="submit"
                    class="btn"
                    style="width: 110px">
                    <strong>Enviar</strong>
                </button>
            </form>
        </div>
    </div>
</div>
<!--form testimonal section ENDS-->


<footer>
    <div class="content">
        <div class="left box">
            <div class="upper">
                <div class="topic">Sobre a Catarina Fotografia</div>
                <p>Trabalhamos com amor e dedicação para que os nossos clientes sintam-se especiais e que possam
                    guardar
                    momentos únicos pelas minhas lentes! </p>
            </div>
            <div class="lower">
                <div class="topic">Contacto</div>
                <div class="phone">
                    <a href="tel:912164392"><i class="fas fa-phone-volume"></i>{{ $organizations -> phone_number}}</a>
                </div>
                <div class="email">
                    <a href="mailto:catarinabarbosafotografia@gmail.com"><i class="fas fa-envelope"></i>{{ $organizations -> email}}</a>
                </div>
                <div class="email">
                    <a><i class="fa-solid fa-location-pin"></i>
                        {{ $organizations -> city}} &nbsp; {{ $organizations -> postal_code}}</a>
                    <br>
                    {{ $organizations -> address}}
                </div>

                <div class="media-icons">
                    <a href="{{ $organizations -> facebook}}" target="_blank"><i
                            class="fa-brands fa-square-facebook"></i></a>
                    <a href="{{ $organizations -> instagram}}" target="_blank"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="{{ $organizations -> linkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="middle box">
            <div class="topic">Serviços</div>
            @foreach($services as $service )
                <div>{{$service->name}}</div>
            @endforeach
        </div>
        <div class="right box">
            <!--form contact section starts-->
            <div id="contacto">
                <form action="https://api.staticforms.xyz/submit" method="post" id="staticform">
                    <input type="hidden" name="accessKey" value="fb48355b-1a3b-41c3-885f-0c120bb12a4b">
                    <input type="hidden" name="subject" value="Test from jsfiddle">
                    <input type="hidden" name="redirectTo" value="http://127.0.0.1:8000/">
                    <p class="topic">Contacto</p>
                    <input class="field" type="text" name="name" placeholder="Insira o seu Nome" required>
                    <input class="field" type="email" name="email" placeholder="Insira o seu Email" required>
                    <textarea class="field" name="message" placeholder="A sua Mensagem" required></textarea>
                    <button class="btn" type="Submit">Enviar</button>
                </form>
            </div>
            <!--form contact section ends-->
        </div>
        <div class="bottom">
            <p>Copyright © 2022 <a href="#">Cesae - Web & Mobile Development: </a> <strong>Team J</strong> <br>
                João Araújo, Jorge Moreira, Ana Paula Oliveira</p>
        </div>
    </div>
</footer>
<!--Footer section ends-->

<!-- SwiperJS - note: para que tudo funcione todos os links são necessários, não fiz via npm para facilicar na transição para o Laravel -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
