
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

                <li><a href="{{ $organizations -> facebook}}" alt="" target="_blank"><i class="uil uil-facebook"></i></a></li>
                <li><a href="{{ $organizations -> instagram}}" target="_blank"><i class="uil uil-instagram-alt"></i></a></li>
                <li><a href="{{ $organizations -> linkedin}}" target="_blank"><i class="uil uil-linkedin-alt"></i></a></li>
                <li><a href="{{ route('login') }}" target="_blank"><i class="uil uil-envelope-upload-alt"></i></a></li>
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
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam quo odio labore dolores, reiciendis possimus! Molestiae in velit veniam iste quo illo provident nesciunt fuga atque. Molestiae sint rerum perspiciatis.</p>
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
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, ab neque facilis delectus voluptas quis, ducimus quos ut consequuntur tenetur provident perspiciatis molestias dolores assumenda dolorum ex hic soluta perferendis?
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, ab neque facilis delectus voluptas quis, ducimus quos ut consequuntur tenetur provident perspiciatis molestias dolores assumenda dolorum ex hic soluta perferendis?
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, ab neque facilis delectus voluptas quis, ducimus quos ut consequuntur tenetur provident perspiciatis molestias dolores assumenda dolorum ex hic soluta perferendis?
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
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui consequuntur, aut voluptate nesciunt maiores officiis illo laboriosam eius minima dolorem dolor distinctio accusamus vero ipsum molestiae minus voluptatibus, quam velit!
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



    <!-- SwiperJS - note: para que tudo funcione todos os links são necessários, não fiz via npm para facilicar na transição para o Laravel -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>
