<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta charset="utf-8" />
    <meta name="vortexemb" content="vortexemb.com" />
    <title>@yield('title') - Vortexemb</title>
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

<body class="{{ Route::currentRouteName() == 'home' ? 'index-page' : 'other-page' }}">

    <!-- Header -->
    @include('frontend.partials.header')

    <!-- Main Content -->
    
        @yield('content')
   

    <!-- Footer -->
    @include('frontend.partials.footer')
 <!-- Scroll Top -->
 <a
      href="#"
      id="scroll-top"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
      var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
      (function () {
        var s1 = document.createElement("script"),
          s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = "https://embed.tawk.to/6739a5092480f5b4f59f3cc5/1icsipc4s";
        s1.charset = "UTF-8";
        s1.setAttribute("crossorigin", "*");
        s0.parentNode.insertBefore(s1, s0);
      })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- Vendor JS Files -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="asset/vendor/aos/aos.js"></script>
    <script src="asset/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="asset/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="asset/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="asset/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="asset/vendor/tinny-slider/tiny-slider.js"></script>

    <!-- Main JS File -->
    <script src="asset/js/main.js"></script>
    
</body>
</html>
