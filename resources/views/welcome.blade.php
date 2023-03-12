<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Examedia Group</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon"   href="assets/img/exa-group/logo/red.png">
  {{-- <link rel="icon"   href="https://examedia.my/wp-content/uploads/2020/02/logoicon.png?37abbf&37abbf"> --}}
  {{-- <link rel="icon"   href="img/exa-group/Examedia-Logo-White-round.pn"> --}}
  {{-- <link href="img/exa-group/Examedia-Logo-White-round.png" rel="icon"> --}}
  {{-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo d-flex align-items-center">
          <!-- <img src="assets/img/tim/tim-1.jpg" class="img-fluid" alt=""> -->
          
          <!-- <h1 class="text-light"><a href="index.html"><span>Bethany</span></a></h1> -->
          <!-- Uncomment below if you prefer to use an image logo -->
           {{-- <a href="/"><img src="assets/img/tim/tim-1.jpg" alt="" class="img-fluid"></a> --}}
          <a href="/"><img src="assets/img/exa-group/exa-group-logo-1.png" alt="" style=" width: 200px;" class="img-fluid"></a>
        </div>
  
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto fw-bold" href="/">Home</a></li>
            <li><a class="nav-link scrollto fw-bold" href="#about">About</a></li>
            <li><a class="nav-link scrollto fw-bold" href="#ceo">CEO</a></li>
            <li><a class="nav-link scrollto fw-bold" href="#company">Company</a></li>
            <li><a class="nav-link scrollto fw-bold" href="#event">EVENT</a></li>
            <li><a class="nav-link scrollto fw-bold" href="#contact">Contact</a></li>
            <li><a class="nav-link scrollto fw-bold" href="https://support.examedia.my/" target="blank">Support</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
  
      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center" style="background-image:url('assets/img/exa-group/hero-1.png');">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>WELCOME TO <br> EXAMEDIA <br> GROUP</h1>
      {{-- <h2>We are team of talented designers making websites with Bootstrap</h2> --}}
      {{-- <a href="#about" class="btn-get-started scrollto">Get Started</a> --}}
    </div>
  </section>
  <!-- End Hero -->

 
  <!-- ======= Hero Section ======= -->
  {{-- <section id="hero" >
    <div id="hero"  class=" text-center d-flex align-items-center justify-content-center" data-aos="fade-in" data-aos-delay="200" 
    style="background-image:url(assets/img/exa-group/hero-1.png); width: 100%;  height: 80vh; color #ffff;">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200" style="background-image:url(/img/exa-group/hero-1.png);">
      <div  style="color #ffff;">
        <h1>WELCOME TO <br> EXAMEDIA <br> GROUP</h1>
      </div>
      <a href="#about" class="btn-get-started scrollto">Get Started</a> 
    </div>
    </div>
  </section> --}}


  <main id="main">
    <div id="about" >@include('landing.about')</div>

    <div id="ceo" >@include('landing.ceo')</div>

    <div id="company" >@include('landing.company')</div>

    <div id="event" >@include('landing.event')</div>

    <div id="contact" >@include('landing.contact')</div>

  </main><!-- End #main -->

  {{-- <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact d-flex justify-content-center">
            <img src="assets/img/exa-group/exa-group-logo-2.png" class="img-fluid" style="max-height: 150px; object-fit:contain;" alt="Examedia Group Logo">
          </div>

          <div class="col-lg-8 col-md-6 footer-links">
            <h4 class="text-inderline">LINKS</h4>
            <div class="row">
              <div><i class="bx bx-chevron-right"></i> <a href="/">Home</a></div>
              <div><i class="bx bx-chevron-right"></i> <a href="#about">About</a></div>
              <div><i class="bx bx-chevron-right"></i> <a href="#CEO">CEO</a></div>
              <div><i class="bx bx-chevron-right"></i> <a href="#company">Company</a></div>
              <div><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></div>
            </div>

            <div class="container">
              <div class="row" >
                <div class="col-sm" style="color:#fff;">
                  <a href="/ "><h5>Home</h5></a>
                </div>
                <div class="col-sm">
                  <a href="#about"><h5>about</h5></a>
                </div>
                <div class="col-sm">
                   <a href="#CEO"><h5>CEO</h5></a>
                </div>
                <div class="col-sm">
                  <a href="#company"><h5>company</h5></a>
                </div>
                <div class="col-sm">
                  <a href="#contact"><h5>contact</h5></a>
                </div>
              </div>
            </div>
            <div class="row">
              <div><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></div>
              <div><i class="bx bx-chevron-right"></i> <a href="#about">About</a></div>
              <div><i class="bx bx-chevron-right"></i> <a href="#CEO">CEO</a></div>
              <div><i class="bx bx-chevron-right"></i> <a href="#company">Company</a></div>
              <div><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></div>
            </div>
          </div>

          <div class="p-2 col-lg-4 col-md-6">
            <div class="  footer-newsletter" style="background-color: black;">
              <h4>Join Our Newsletter</h4>
              <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
              <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
              </form>
            </div>
          </div>


        </div>
      </div>
    </div>

    
  </footer><!-- End Footer --> --}}

  <div class=" d-md-flex py-4 d-flex justify-content-center" style="background: #ed1d29;">

    <div class="d-flex justify-content-center container">
      <div class="copyright" style="  text-align: center; color:#fff">
        &copy; 2023 by <strong><span>EXAMEDIA GROUP</span></strong>. Proudly made by Examedia Group
      </div>
    </div>
  </div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>