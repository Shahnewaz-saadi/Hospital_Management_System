<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>XYZ Hospital</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><span class="text-primary">XYZ </span>Hospital</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/about') }}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/doctors') }}">Doctors</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="blog.html">News</a>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/Contract') }}">Contact Us</a>
            </li>

            @if (Route::has('login'))

            @auth


            <li class="nav-item">
              <a class="nav-link" style="background-color: rgba(255, 255, 255, 0)";  href="{{ url('myappointment') }}">My Appointment</a>
            </li>
                
            <x-app-layout>
            </x-app-layout>
            
            @else

                 <li class="nav-item">
                  <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
                  </li>

                 <li class="nav-item">
                   <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                     </li>

              @endauth
                
            @endif



          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>


  
    <div>
    <ul>
      home
    </ul>
    <ul>
      home
    </ul>
   
  </div>




  @if (session()->has('message'))

  <div class="alert alert-success">

      <button type="button" class="close" data-dismiss="alert">
          x
      </button>

      {{ session()->get('message') }}

  </div>
      
  @endif

  

  {{-- <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/blog/slider-img.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Ensure Your Good Health</span>
        <h1 class="display-4"><span class="text-primary">XYZ </span>Hospital</h1>
        <a href="resources\views\user\appointment.blade.php" class="btn btn-primary">Let's Consult</a>
      </div>
    </div>
  </div> --}}
  

  @include('user.photoslide')

  


    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            {{-- <h1><span class="text-primary">XYZ </span>Hospital</h1> --}}
            <h1 class="text-center mb-5 wow fadeInUp"><span class="text-primary">XYZ </span>Hospital</h1>

            
            <p class="text-grey mb-4">Hospital services encompass a wide range of healthcare offerings designed to provide comprehensive medical care to patients. These services include diagnostics (such as laboratory tests and imaging), medical consultations, surgical procedures, emergency care, maternity care, specialized treatments (like oncology or cardiology), and post-operative care. Hospitals also offer inpatient services for those requiring overnight stays, outpatient services for non-emergency cases, and critical care units for patients with severe conditions. Additionally, hospitals often have support services like pharmacy, physical therapy, and nutrition counseling. The goal of hospital services is to diagnose, treat, and support patients in their journey toward recovery and overall well-being.</p>
            <a href="about.html" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="assets\img\person\parson_4.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  @include('user.doctor')

   {{-- Make an Appointment start --}}

   @include('user.appointment')

  @include('user.testimonial')


  @include('user.treatment')




 @include('user.latest')

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">Fitness</a></li>
            <li><a href="#">Drugs</a></li>
            <li><a href="#">Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">healthcare@temporary.net</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      {{-- <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right reserved</p> --}}
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>