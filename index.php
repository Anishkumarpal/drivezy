<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vesperr Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!--<link href="assets/img/favicon.png" rel="icon">-->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
 <?php include 'partial/_header.php'; ?>
    <?php include 'partial/_dbconnect.php'; ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

<!-- Modal -->

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-5 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
           <?php
          if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
              echo'<li class="get-started">
              <p class="text-light my-0 mx-0">Welcome '.$_SESSION['useremail'].'</p>
              <a href="partial/_logout.php" class="btn btn-primary ml-2">Logout</a>
              </li>';
                      
            }
            else{
              echo' <li class="get-started"><form class="form-inline my-2 my-lg-0">
              </form>
              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#loginModal">Login</button>
              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#signupModal">Signup</button>
              </li>';
            }
?>
          <h1 data-aos="fade-up">Own the <span style="color:red;">experience</span>, not the ride</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Rent vehicles from people around you</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="booking.php" class="btn-get-started scrollto">Get Started</a>

          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img style="border-top-left-radius: 250px;" src="assets/img/aa.jpg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  <div class="container">
    <div class="row">
      <div class="col-md-6 my-4">
        <h5><a href="">VIEW ALL  <span style="font-size: 30px;">></span></a></h5>
      </div>
      <div class="col-md-6">
        <h1 style="font-size: 85px; color: #E8E8E8;"><b>MY OFFER</b></h1>
      </div>
    </div>
  </div>
 

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about"  style="background-color: #F8F8F8">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2 style="text-align: left;">BENGALURU AIRPORT RIDES</h2>
        </div>

        <div class="row content" >
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <img src="assets/img/1.svg"><br><br>
            <div class="flight">            
                 <img src="assets/img/2a.png" width="260%">
              </div>
            <ul>
              <li><i class="ri-check-double-line"></i> Bengaluru airport rides made easy with Drivezy. No need to book an</li>
              <li><i class="ri-check-double-line"></i> expensive cab to or from Bengaluru airport. Hire a one-way car to or from</li>
              <li><i class="ri-check-double-line"></i> Bengaluru airport and drive yourself at half the price.</li>
                            <li><i class="ri-check-double-line"></i>This feature is only available on app.<a href="" style="color:red;">DOWNLOAD NOW</a></li><br><br>
              <button type="button" class="btn btn-primary btn-lg">KNOW MORE</button>


            </ul>
          </div>
          <div class="col-md-6 " data-aos="fade-up" data-aos-delay="300">
              <div class="centered">            
                 <img src="assets/img/2.jpg">
              </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <!-- End Counts Section -->

    <section id="clients" class="clients clients">
      <div class="container"><br><br>
                <div class="container">
                <div class="section-title" data-aos="fade-up">
                <h2 style="text-align: left; background-image: url(assets/img/back.png);">WHY CHOOSE DRIVEZY</h2>
              </div>
        <div class="row">

          <div class="col-sm-2">
            <img src="assets/img/logo1.png" class="img-fluid" alt="" data-aos="zoom-in">
            <p>No security deposit</p>
          </div>

          <div class="col-sm-2">
            <img src="assets/img/logo2.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
            <p>Doorstep delivery</p>
          </div>

          <div class="col-sm-2">
            <img src="assets/img/logo3.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
            <p>Smart check-in</p>
          </div>

          <div class="col-sm-2">
            <img src="assets/img/logo4.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="300">
            <p>Pay later</p>
          </div>

          <div class="col-sm-2">
            <img src="assets/img/logo5.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="400">
              <p > Instant refund </p>
          </div>

          <div class="col-sm-2">
            <img src="assets/img/logo1.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500">
            <p>No security deposit</p>
          </div>


        </div>

      </div>
    </section>
     <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">
        <div class="section-title" data-aos="fade-up">
          <h2 style="text-align: left;">BENGALURU AIRPORT RIDES </h2>
        </div>

        <div class="row" >
           <div class="col-md-6 " data-aos="fade-up" data-aos-delay="300">
                         
                 <img src="assets/img/photo.png" style="width: 95%">
             
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <br><br><br><br>
            <h3><b>JUSTCONNECT - BE A PART OF DRIVEZY</b></h3>
            <img src="assets/img/1.svg"><br><br>
            <ul>
              <li>List your vehicle on Drivezy and turn it into an earning member of your</li>
              <li>family.</li>
              <br><br>
              <button type="button" class="btn btn-primary btn-lg">KNOW MORE</button>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
   
<!--carousel-->

    <div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel" style="border-top-right-radius: 90px; border-top-left-radius: 90px; background-color:#F0F0F0  ; ">
       <h1 style="font-size: 85px; text-align: center; color:  #D8D8D8;"><b>FETURED IN</b></h1>
              <p style="text-align: center; color: black">FETURED IN</p>
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-sm-4">          <img class="d-block w-100" src="assets/img/clients/client-1.png" alt="Second slide">
</div>
            <div class="col-sm-4">          <img class="d-block w-100" src="assets/img/clients/client-2.png" alt="Second slide">
</div>
            <div class="col-sm-4">          <img class="d-block w-100" src="assets/img/clients/client-3.png" alt="Second slide">
</div>
          </div>
        </div>
        <div class="carousel-item">
 <div class="row">
            <div class="col-sm-4">          <img class="d-block w-100" src="assets/img/clients/client-3.png" alt="Second slide">
</div>
            <div class="col-sm-4">          <img class="d-block w-100" src="assets/img/clients/client-2.png" alt="Second slide">
</div>
            <div class="col-sm-4">          <img class="d-block w-100" src="assets/img/clients/client-1.png" alt="Second slide">
</div>
          </div>        </div>
        <div class="carousel-item">
 <div class="row">
            <div class="col-sm-4">          <img class="d-block w-100" src="assets/img/clients/client-1.png" alt="Second slide">
</div>
            <div class="col-sm-4">          <img class="d-block w-100" src="assets/img/clients/client-3.png" alt="Second slide">
</div>
            <div class="col-sm-4">          <img class="d-block w-100" src="assets/img/clients/client-2.png" alt="Second slide">
</div>
          </div>        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


  <!-- ======= Footer ======= -->
  <?php include 'partial/_footer.php'; ?>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>