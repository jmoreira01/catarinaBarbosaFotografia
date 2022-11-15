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
            <li><a href="#services">Serviços</a></li>
            <li><a href="#gallery">Galeria</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
        <!-- Social Medias -->
        <ul class="nav__socials">

            <li><a href="{{ $organizations -> facebook}}" alt="" target="_blank"><i class="uil uil-facebook"></i></a>
            </li>
            <li><a href="{{ $organizations -> instagram}}" target="_blank"><i class="uil uil-instagram-alt"></i></a>
            </li>
            <li><a href="{{ $organizations -> linkedin}}" target="_blank"><i class="uil uil-linkedin-alt"></i></a></li>
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
                <a class="header_tag">"Sessões Grávida | Newborn | Crianças | Família | Eventos"</a>
                <h1>Compartilhe momentos únicos pelas minhas lentes!</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam quo odio labore dolores, reiciendis
                    possimus! Molestiae in velit veniam iste quo illo provident nesciunt fuga atque. Molestiae sint
                    rerum perspiciatis.</p>
                <a href="mailto:catarinabarbosafotografia@gmail.com" class="header_btn-md">Mande-me um email</a>
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
<a href="#" class="animation_btn header_btn">
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
                    <img src="img/image 8.jpg">
                </div>
                <div class="about_image-sm">
                    <img src="img/image 8.jpg">
                </div>
            </div>
        </div>
        <div class="about_right">
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, ab neque facilis delectus voluptas
                quis, ducimus quos ut consequuntur tenetur provident perspiciatis molestias dolores assumenda dolorum ex
                hic soluta perferendis?
            </p>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, ab neque facilis delectus voluptas
                quis, ducimus quos ut consequuntur tenetur provident perspiciatis molestias dolores assumenda dolorum ex
                hic soluta perferendis?
            </p>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, ab neque facilis delectus voluptas
                quis, ducimus quos ut consequuntur tenetur provident perspiciatis molestias dolores assumenda dolorum ex
                hic soluta perferendis?
            </p>
        </div>
    </div>
</section>
<!-- About Me section end -->

<!-- Gallery Section Stars - com SwiperJS -->

<div id="gallery">
    <div class="container gallery_container swiper mySwiper">
        <div class="gallery_head">
            <h2 class="title_gallery">Momentos Mágicos</h2>
        </div>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui consequuntur, aut voluptate nesciunt maiores
            officiis illo laboriosam eius minima dolorem dolor distinctio accusamus vero ipsum molestiae minus
            voluptatibus, quam velit!
        </p>
    </div>
    <!-- Swiper -->

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            @foreach($images->take(12) as $image )
                <div class="swiper-slide">
                    <img src="{{ asset('storage/'.$image->image) }}" alt="">
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<div id="testimonals" style="margin-left: 50px;margin-right: 50px" class="container">
    <div class="swiper mySwiper">
        <h1>Diga-nos a sua opinião! &nbsp; <i class="fa-solid fa-heart fa-beat" style="--fa-animation-duration: 2s; cursor: pointer" id="onClick"> </i>
        </h1>
        <div class="swiper-wrapper">

            @foreach($testimonals as $testimonal )
                <div class="swiper-slide ">
                    <div style="text-align: center; font-size: 20px">
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



<!--form testimonal section starts-->

<div class="contact" id="toggleComment" style="display: none">
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
                <p>Trabalhamos com amor e dedicação para que os nossos clientes sintam-se especiais e que possam guardar
                    momentos únicos pelas minhas lentes! </p>
            </div>
            <div class="lower">
                <div class="topic">Nosso Contacto</div>
                <div class="phone">
                    <a href="#"><i class="fas fa-phone-volume"></i>+351 XXX-XXX-XXX</a>
                </div>
                <div class="email">
                    <a href="#"><i class="fas fa-envelope"></i>catarina@gmail.com</a>
                </div>
                <div class="email">
                    <a href="#"><i class="fa-solid fa-location-pin"></i>Rua: XPTP, Porto - 4535-000</a>
                </div>

                <div class="media-icons">
                    <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="middle box">
            <div class="topic">Os nossos serviços</div>
            <div><a href="#">Sessão Newborn</a></div>
            <div><a href="#">Sessãao grávidas</a></div>
            <div><a href="#">Sessão Eventos</a></div>
            <div><a href="#">Sessão Crianças</a></div>
            <div><a href="#">Sessão Família</a></div>
        </div>
        <div class="right box">
            <!--form contact section starts-->
            <div>
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
</footer>
<!--Footer section ends-->

<!-- SwiperJS - note: para que tudo funcione todos os links são necessários, não fiz via npm para facilicar na transição para o Laravel -->
<script>

    var icon = document.getElementById('onClick');

    icon.addEventListener("click", function(){
        var toggleComment = document.getElementById("toggleComment");

        if(toggleComment.style.display === "none") {toggleComment.style.display = "block"}
        else {
            toggleComment.style.display = "none";

            }});
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
