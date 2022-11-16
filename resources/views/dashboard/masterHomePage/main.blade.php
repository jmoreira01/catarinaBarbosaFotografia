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

    @yield('styles')

</head>
<body>

@component('dashboard.masterHomePage.header', ['service'=>$service, 'images'=>$images, 'organizations' => $organizations, 'services'=> $services])
@endcomponent

<main>
    @yield('content')
</main>


@component('dashboard.masterHomePage.footer', ['service'=>$service, 'images'=>$images, 'organizations' => $organizations, 'services'=> $services])
@endcomponent

</body>
</html>
