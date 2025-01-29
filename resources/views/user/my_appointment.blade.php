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
        <a class="navbar-brand" href="#"><span class="text-primary">XYZ </span>Hospital</a>

      

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
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

  <div align="center" style="padding : 70px" >

    <table>

        <tr style="background-color:rgba(75, 207, 35, 0.793)">

            <th style="padding: 10px; font-size: 15px;color:black">
                Doctor Name  

            </th>

            <th style="padding: 10px; font-size: 15px;color:black">
                Date       
            </th>

            <th style="padding: 10px; font-size: 15px;color:black">
                Message           
            </th>

            <th style="padding: 10px; font-size: 15px;color:black">
                Status
            </th>

            
            <th style="padding: 10px; font-size: 15px;color:black">
            Cancel Appointment
            </th>

            <th style="padding: 10px; font-size: 15px;color:black">
              Payment
            </th>

        </tr>

        @foreach ($appoint as $appoints)

        <tr style="background-color: rgba(32, 132, 154, 0.407)"align="center">
            <td style="padding: 10px; color:black">{{ $appoints->doctor }}</td>
            <td style="padding: 10px; color:black">{{ $appoints->date }}</td>
            <td style="padding: 10px; color:black">{{ $appoints->message }}</td>
            <td style="padding: 10px; color:black">{{ $appoints->status }}</td>
            <td> <a class="btn btn-danger" onclick="return confirm('Are You Sure to cancel?')" href="{{ url('cancel_appoint',$appoints->id) }}">Cancel </td>
              <td style="padding: 10px; color:black">
               <form action="{{ url('userPayment') }}" method="POST">
                @csrf
                   <input type="text" name="name">
                   <button type="submit" >submit</button>
              </form>

            
              </td>
        </tr>
        @endforeach

    </table>

  </div>



<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>