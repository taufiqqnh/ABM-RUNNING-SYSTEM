
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ABM RUNNING</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('landingpage/assets/img/LogoABM.png')}}" rel="icon">
  <link href="{{asset('landingpage/assets/img/LogoABM.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('landingpage/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('landingpage/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('landingpage/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('landingpage/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('landingpage/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('landingpage/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('landingpage/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.12.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center">
        <img src="{{asset('landingpage/assets/img/LogoABM.png')}}" alt="">
        <span>ABM RUNNING</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>  
          <li class="dropdown"><a href="#event"><span>Event</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">ABM Solo - Jogja</a></li>
              <li><a href="#">ABM 5 Hours Looping</a></li>
              <li><a href="#">Mileage Party</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Result</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">ABM Solo - Jogja</a></li>
              <li><a href="#">ABM 5 Hours Looping</a></li>
              <li><a href="#">Mileage Party</a></li>
            </ul>
          </li>

          <li><a class="getstarted scrollto" href="{{ route('login') }}">Login</a></li>
          <li><a class="getstarted scrollto" href="{{ route('register') }}">Register</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">ABM RUNNING COMMUNITY</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Kami adalah Komunitas Lari Cadas di kota Surakarta</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Detail</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{asset('landingpage/assets/img/ABM1.jpg')}}" class="img-fluid" alt="" width="500px" height="auto">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Who We Are</h3>
              <h2>We Are ABM Running!!</h2>
              <p>
                A pack of Wolves! We do what we love, we born to break our boundaries.
              </p>
              <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Tentang ABM</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{asset('landingpage/assets/img/ABM1.jpg')}}" class="img-fluid" alt="" width="450px" height="auto">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Kegiatan</h2>
          <p>Kegiatan ABM Running</p>
        </header>

        <div class="row">

          <div class="col-lg-6">
            <img src="{{asset('landingpage/assets/img/features.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Running</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Swimming</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Football</h3>
                </div>
              </div>

            </div>
          </div>

        </div> <!-- / row -->

      </div>

    </section><!-- End Features Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="event" class="event">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Event</h2>
          <p>Daftar Event ABM</p>
        </header>

        <div class="row gy-4" data-aos="fade-left">

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <span class="featured">Coming Soon</span>
              <h3 style="color: #07d5c0;">ABM Solo-Jogja</h3>
              <div class="price"><sup>Rp.</sup>0,-<span>/ person</span></div>
              <img src="{{asset('landingpage/assets/img/pricing-free.png')}}" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
              </ul>
              <a href="#" class="btn-buy">Daftar</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <span class="featured">Coming Soon</span>
              <h3 style="color: #65c600;">ABM Challange 5 Hours Looping</h3>
              <h3 style="color: #65c600;"></h3>
              <div class="price"><sup>Rp.</sup>50.000,-<span> / person</span></div>
              <img src="{{asset('landingpage/assets/img/pricing-starter.png')}}" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                
              </ul>
              <a href="#" class="btn-buy">Daftar</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <span class="featured">Coming Soon</span>
              <h3 style="color: #ff901c;">Mileage Party</h3>
              <div class="price"><sup>Rp.</sup>0<span> / person</span></div>
              <img src="{{asset('landingpage/assets/img/pricing-business.png')}}" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
              </ul>
              <a href="#" class="btn-buy">Daftar</a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Pricing Section -->


    <!-- ======= Testimonials Section ======= -->
    {{-- <section id="testimonials" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Testimonials</h2>
          <p>What they are saying about us</p>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <div class="profile mt-auto">
                  <img src="{{asset('landingpage/assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
                <div class="profile mt-auto">
                  <img src="{{asset('landingpage/assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
                <div class="profile mt-auto">
                  <img src="{{asset('landingpage/assets/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section> --}}
    <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Team</h2>
          <p>ABM Team Kerja</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('landingpage/assets/img/team/team-1.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Dije Markento</h4>
                <span>Founder</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In suscipit autem nostrum quia deserunt vero sequi totam rerum odit. Molestias vel, minima dolorem nostrum nobis aut quidem maxime dicta provident.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('landingpage/assets/img/team/team-2.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Rendra Damar</h4>
                <span>Captain</span>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique quia fugit, in impedit corporis consectetur voluptatibus consequuntur, ipsa nobis commodi quod perspiciatis aut ex sit perferendis dicta obcaecati debitis unde.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('landingpage/assets/img/team/team-3.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Faisal Zepa</h4>
                <span>Co-Captain</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae blanditiis veritatis odio dicta nisi optio earum iusto culpa ipsam! Voluptatem accusamus similique quo id, placeat culpa quisquam assumenda sint fuga?</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('landingpage/assets/img/team/team-3.jpg')}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Taufiq NurHidayat</h4>
                <span>Secretary</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et expedita porro dignissimos eos est, dolor deleniti explicabo ipsa molestias, modi tenetur nulla in maiores labore vitae impedit nostrum natus quis!.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

            <div class="row gy-4">
              <div class="col-md-4">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Jl.Manahan, Surakarta, Indoensia</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>085xxxxxxxxxxx <br> </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info.ABM@gmail.com <br></p>
                </div>
              </div>
            </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="{{asset('landingpage/assets/img/LogoABM.png')}}" alt="">
              <span>ABM RUNNING</span>
            </a>
            <p>A pack of Wolves! We do what we love, we born to break our boundaries.</p>
            <div class="social-links mt-3">
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-12 footer-links">
            <h4>Event</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">ABM Solo - Jogja</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">ABM 5 Hours Looping</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Mileage Party</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Surakarta, ID<br>
              Indonesia <br>
              <strong>Phone:</strong> 085xxxxxxxx<br>
              <strong>Email:</strong> info.ABM@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright 2024 <strong><span>ABM RUNNING</span></strong> V 1.1
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('landingpage/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('landingpage/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('landingpage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('landingpage/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('landingpage/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('landingpage/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('landingpage/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('landingpage/assets/js/main.js')}}"></script>

</body>

</html>