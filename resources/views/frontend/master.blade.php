
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> @yield('title') </title>

  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->

  <link href="{{asset('storage/image/logo.png')}}" rel="icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{'frontend/vendor/bootstrap/css/bootstrap.min.css'}}" rel="stylesheet">
  <link href="{{'frontend/vendor/bootstrap-icons/bootstrap-icons.css'}}" rel="stylesheet">
  <link href="{{'frontend/vendor/aos/aos.css'}}" rel="stylesheet">
  <link href="{{'frontend/vendor/remixicon/remixicon.css'}}" rel="stylesheet">
  <link href="{{'frontend/vendor/swiper/swiper-bundle.min.css'}}" rel="stylesheet">
  <link href="{{'frontend/vendor/glightbox/css/glightbox.min.css'}}" rel="stylesheet">
  <link href="{{'frontend/css/style.css'}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

  @livewireStyles

</head>

<body>


  @yield('content')

  <!-- Vendor JS Files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
  <script src="{{'frontend/vendor/bootstrap/js/bootstrap.bundle.js'}}"></script>
  <script src="{{'frontend/vendor/aos/aos.js'}}"></script>
  <script src="{{'frontend/vendor/php-email-form/validate.js'}}"></script>
  <script src="{{'frontend/vendor/swiper/swiper-bundle.min.js'}}"></script>
  <script src="{{'frontend/vendor/purecounter/purecounter.js'}}"></script>
  <script src="{{'frontend/vendor/isotope-layout/isotope.pkgd.min.js'}}"></script>
  <script src="{{'frontend/vendor/glightbox/js/glightbox.min.js'}}"></script>

  <!-- Template Main JS File -->
  <script src="{{'frontend/js/main.js'}}"></script>
  @stack('scripts')

  @livewireScripts

</body>

</html>
