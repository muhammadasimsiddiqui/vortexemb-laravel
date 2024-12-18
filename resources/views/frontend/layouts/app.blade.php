<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta charset="utf-8" />
    <meta name="vortexemb" content="vortexemb.com" />
    <title>Home</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="#" />
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Main CSS File -->
    <link href="asset/css/main.css" rel="stylesheet" />

    <!-- Vendor CSS Files CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
      integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Vendor CSS Files -->
    <link
      href="asset/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="asset/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="asset/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="asset/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="asset/vendor/tinny-slider/tiny-slider.css" />
  </head>

<body>
    <!-- Header -->
    @include('frontend.partials.header')

    <!-- Main Content -->
    
        @yield('content')
   

    <!-- Footer -->
    @include('frontend.partials.footer')

    
</body>
</html>
