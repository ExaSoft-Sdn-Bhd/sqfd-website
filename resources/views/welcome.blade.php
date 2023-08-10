<!DOCTYPE html>
<html lang="en">

<head>
  @include('universal.head')
</head>

<body>

  <div class="">@include('universal.header')</div>

  <div class="" id="hero">@include('landing.hero')</div>

  <main id="main">
    <div id="about">@include('landing.about')</div>

    {{-- <div id="ceo">@include('landing.ceo')</div> --}}

    <div id="company">@include('landing.company')</div>

    {{-- <div id="event">@include('landing.event')</div> --}}

    <div id="contact">@include('landing.contact')</div>

  </main><!-- End #main -->

  <div class="">@include('universal.footer')</div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div class="">@include('universal.js')</div>

</body>

</html>