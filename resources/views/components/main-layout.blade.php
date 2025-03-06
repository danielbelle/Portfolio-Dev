<!DOCTYPE html>
<html lang="pt-BR">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    <title>{{ $pageTitle }}</title>
  </head>

  <body>

    <x-header />

    {{ $slot }}
    <x-about />
    <x-skills />
    <x-qualification />
    <x-services />
    <x-portfolio />
    <x-project />
    <x-testimonial />
    <x-contact />
    <x-footer />

    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="uil uil-arrow-up scrollup_icon"></i>
    </a>

    <!--==================== SWIPER JS ====================-->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>

    <!--==================== MAIN JS ====================-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
  </body>

</html>
