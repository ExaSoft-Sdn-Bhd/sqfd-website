<!DOCTYPE html>
<html lang="en">

<head>
  @include('universal.head')
</head>

<body>

  <div class="">@include('universal.header')</div>

  <main style="padding-top: 120px;">
    <!-- ======= event Section ======= -->
    <section  class="event">
      <div class="container">

        <div class="row event-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-12">
              <div class="section-title" data-aos="fade-right">
              <h2>EXA EVENT</h2>
              <p></p>
              </div>
          </div>
          
          <!-- #11 -->
          <div class="col-lg-4 event-item filter-app">
              <a href="examedia-gallery-2022-exa-raya">
                  <img src="img\2022-exa-raya\2022-exa-raya (6).jpg" class="img-fluid" alt="">
                  <div class="event-info">
                    <h4>EXA RAYA</h4>
                    <p>2022</p>  
                  </div>
              </a>
          </div>

          <!-- #10 -->
          <div class="col-lg-4 col-md-6 event-item filter-web">
              <a href="examedia-gallery-2020-exa-sales-kick-off">
                  <img src="img\2020-exa-sales-kick-off\2019-exa-sales-kick-off (1).jpg" class="img-fluid" alt="">
                  <div class="event-info">
                    <h4>EXA SALES KICK-OFF</h4>
                    <p>2020</p>  
                  </div>
              </a>
          </div>
              

          <!-- #9 -->
          <div class="col-lg-4 col-md-6 event-item filter-app">
              <a href="examedia-gallery-2020-exa-race">
                  <img src="img\2020-exa-race\2020-exa-race (4).jpg" class="img-fluid" alt="">
                  <div class="event-info">
                    <h4>EXARACE</h4>
                    <p>2020</p>  
                  </div>
              </a>
          </div>

          <!-- #8 -->
          <div class="col-lg-4 col-md-6 event-item filter-web">
              <a href="examedia-gallery-2019-exa-sales-kick-off">
                  <img src="img\2019-exa-sales-kick-off\2019-exa-sales-kick-off (2).jpg" class="img-fluid" alt="">
                  <div class="event-info">
                    <h4>EXA SALES KICK-OFF</h4>
                    <p>2019</p>  
                  </div>
              </a>
          </div>

          <!-- #7 -->
          <div class="col-lg-4 col-md-6 event-item filter-app">
              <a href="examedia-gallery-2019-exa-raya">
                  <img src="img\2019-exa-raya\2019-exa-raya (1).jpg" class="img-fluid" alt="">
                  <div class="event-info">
                    <h4>EXA RAYA</h4>
                    <p>2019</p>  
                  </div>
              </a>
          </div>

          <!-- #6 -->
          {{-- <div class="col-lg-4 col-md-6 event-item filter-app">
              <a href="examedia-gallery-2018-exa-enstek-team">
                  <img src="img\2015-enstek-team\enstek (6).JPG" class="img-fluid" alt="">
                  <div class="event-info">
                    <h4>EXA ENSTEK TEAM</h4>
                    <p>2018</p>  
                  </div>
              </a>
          </div> --}}

          <!-- #5 -->
          <div class="col-lg-4 col-md-6 event-item filter-web">
              <a href="examedia-gallery-2016-exa-raya">
                  <img src="img\2016-exa-raya\2016-exa-raya (1).jpg" class="img-fluid" alt="">
                  <div class="event-info">
                    <h4>EXA RAYA</h4>
                    <p>2016</p>  
                  </div>
              </a>
          </div>

          <!-- #4 -->
          <div class="col-lg-4 col-md-6 event-item filter-app">
              <a href="examedia-gallery-2015-exa-trip-langkawi">
                  <img src="img\2015-trip-langkawi\2015-trip-langkawi (1).JPG" class="img-fluid" alt="">
                  <div class="event-info">
                    <h4>EXA TRIP LANGKAWI</h4>
                    <p>2015</p>  
                  </div>
              </a>
          </div>

          <!-- #3 -->
          <div class="col-lg-4 col-md-6 event-item filter-web">
              <a href="examedia-gallery-2015-exa-raya">
                  <img src="img\2015-exa-raya\2015-exa-raya (1).jpg" class="img-fluid" alt="">
                  <div class="event-info">
                    <h4>EXA RAYA</h4>
                    <p>2015</p>  
                  </div>
              </a>
          </div>

          <!-- #2 -->
          <div class="col-lg-4 col-md-6 event-item filter-app">
              <a href="examedia-gallery-2014-exa-office">
                  <img src="img\2014-exa-office\2014-exa-office (15).jpg" class="img-fluid" alt="">
                  <div class="event-info">
                    <h4>EXA OFFICE</h4>
                    <p>2014</p>  
                  </div>
              </a>
          </div>

          <!-- #1 -->
          <div class="col-lg-4 col-md-6 event-item filter-web">
              <a href="examedia-gallery-2011-exa-office">
                  <img src="img\2011-exa-office\2011-exa-office (1).jpg" class="img-fluid" alt="">
                  <div class="event-info">
                    <h4>EXA OFFICE</h4>
                    <p>2011</p>  
                  </div>
              </a>
          </div>
        </div>

      </div>
    </section>
    <!-- End event Section -->
  </main>

  <div class="">@include('universal.footer')</div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div class="">@include('universal.js')</div>

</body>

</html>




{{-- /*--------------------------------------------------------------
# event
--------------------------------------------------------------*/ --}}
<style>
    
.event #event-flters {
  padding: 0;
  margin: 0 auto 35px auto;
  list-style: none;
  text-align: center;
  border-radius: 50px;
  padding: 2px 15px;
}

.event #event-flters li {
  cursor: pointer;
  display: inline-block;
  padding: 10px 20px 12px 20px;
  font-size: 14px;
  font-weight: 600;
  line-height: 1;
  text-transform: uppercase;
  color: #313030;
  margin-bottom: 5px;
  transition: all 0.3s ease-in-out;
  border-radius: 50px;
}

.event #event-flters li:hover,
.event #event-flters li.filter-active {
  color: var(--color-primary);
  background: #fff1ed;
}

.event #event-flters li:last-child {
  margin-right: 0;
}

.event .event-item {
  margin-bottom: 30px;
}

.event .event-item img {
    height: 300px;
    width: 100%;
    object-fit: cover;
}

.event .event-item .event-info {
  opacity: 0;
  /* position: absolute; */
  left: 30px;
  right: 30px;
  bottom: 0;
  z-index: 3;
  transition: all ease-in-out 0.3s;
  background: var(--color-primary);
  /* opacity: 0.5; */
  padding: 15px;
}

.event .event-item .event-info h4 {
  font-size: 18px;
  color: #000000;
  font-weight: bold;
  /* color: #473d3a; */
}

.event .event-item .event-info p {
  color: #ffff;
  font-size: 14px;
  margin-bottom: 0;
}

.event .event-item .event-info .preview-link,
.event .event-item .event-info .details-link {
  position: absolute;
  right: 40px;
  font-size: 24px;
  top: calc(50% - 18px);
  color: #635551;
}

.event .event-item .event-info .preview-link:hover,
.event .event-item .event-info .details-link:hover {
  color: var(--color-primary);
}

.event .event-item .event-info .details-link {
  right: 10px;
}

.event .event-item .event-links {
  opacity: 0;
  left: 0;
  right: 0;
  text-align: center;
  z-index: 3;
  position: absolute;
  transition: all ease-in-out 0.3s;
}

.event .event-item .event-links a {
  color: #fff;
  margin: 0 2px;
  font-size: 28px;
  display: inline-block;
  transition: 0.3s;
}

.event .event-item .event-links a:hover {
  color: #ffa587;
}

.event .event-item:hover .event-info {
  opacity: 1;
  bottom: 20px;
}

</style>