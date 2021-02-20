<?php
session_start();

echo '
<header id="header" class="fixed-top d-flex align-items-center">
<div class="container d-flex align-items-center">

  <div class="logo mr-auto">
    <h1 class="text-light"><a href="index.php"><img src="assets/img/logo.svg"></a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
  </div>

  <nav class="nav-menu d-none d-lg-block">
    <ul>
      <li class="active"><a href="#index.php">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#team">Team</a></li>
      <li><a href="#pricing">Pricing</a></li>

      <li><a href="#contact">Contact</a></li>
      
    </ul>';
        
          


echo ' </nav>

</div>
</header>';

include 'partial/_loginmodal.php'; 
include 'partial/_signupmodal.php';
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']== "true"){
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Successfully Signup</strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>
