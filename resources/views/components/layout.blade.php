<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet" />
    <link href="assetz/img/favicon.png" rel="icon">
    <link href="assetz/img/apple-touch-icon.png" rel="apple-touch-icon">
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Vendor CSS Files -->
    <link href="assetz/vendor/aos/aos.css" rel="stylesheet">
    <link href="assetz/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assetz/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assetz/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assetz/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assetz/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assetz/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assetz/css/style.css" rel="stylesheet">

</head>

<body class="h-full">
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
    <div class="min-h-full">
        <x-navbar></x-navbar>
        <div data-aos="fade-up">
            <x-header>{{ $title }}</x-header>
            <main>
                <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>


    <script src="assetz/vendor/aos/aos.js"></script>
    <script src="assetz/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assetz/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assetz/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assetz/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assetz/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assetz/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assetz/js/main.js"></script>
    <script>
        feather.replace();
    </script>
</body>

</html>
