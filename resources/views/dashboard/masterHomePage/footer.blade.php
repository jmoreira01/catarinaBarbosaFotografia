<footer>
    <div class="content">
        <div class="left box">
            <div class="upper">

                <div class="topic">Sobre a Catarina Fotografia</div>
                <p>Trabalhamos com amor e dedicação para que os nossos clientes sintam-se especiais e que possam guardar
                    momentos únicos pelas minhas lentes! </p>
            </div>
            <div class="lower">
                <div class="topic">Contacto</div>
                <div class="phone">
                    <a href="#"><i class="fas fa-phone-volume"></i>{{ $organizations -> phone_number}}</a>
                </div>
                <div class="email">
                    <a href="#"><i class="fas fa-envelope"></i>{{ $organizations -> email}}</a>
                </div>
                <div class="email">
                    <a href="#"><i class="fa-solid fa-location-pin"></i>
                        {{ $organizations -> city}} &nbsp; {{ $organizations -> postal_code}}</a>
                    <br>
                    {{ $organizations -> address}}
                </div>

                <div class="media-icons">
                    <a href="{{ $organizations -> facebook}}" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                    <a href="{{ $organizations -> instagram}}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
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
    </div>
</footer>
<!--Footer section ends-->

<!-- SwiperJS - note: para que tudo funcione todos os links são necessários, não fiz via npm para facilicar na transição para o Laravel -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="js/main.js"></script>

