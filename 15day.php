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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Vesperr - v2.3.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <?php include 'partial/_header.php'; ?>
    <?php include 'partial/_dbconnect.php'; ?>

    <!-- ======= Hero Section ======= -->

    <div class="container">
<div class="row">
<p style="color:white;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia blanditiis ut accusantium assumenda, numquam soluta fugit architecto totam enim a consequatur asperiores omnis libero quod doloremque velit est dignissimos rem, et cumque aspernatur sint repellendus? Voluptatum labore pariatur cupiditate qui, sapiente excepturi? Voluptates tempora adipisci recusandae, cupiditate molestias doloribus. Atque dicta nihil quibusdam distinctio necessitatibus soluta cupiditate consequuntur neque iure. Repellendus qui minus atque voluptates fugit in eveniet repudiandae. Voluptatibus soluta asperiores alias culpa quibusdam commodi non inventore mollitia dicta, hic quo perspiciatis tempore sapiente repellat ex error aliquid sint totam iusto autem, beatae exercitationem! Odio nobis dolorum velit architecto!</p>
</div>
</div>

    <div class="container " id="space" id="ani"
        style="border-radius: 5px; border:1px solid lightgray;  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <div class="row">
            <div class="col-sm-4">
                <p>I want a rent</p>

                <div class="btn-group" style="height: 80px; padding: 5px;">
                    <button style="background-color: white;"><img src="assets/img/bike.jpg"></button>
                    <button style="background-color: white;"><img src="assets/img/car.jpg"></button>
                </div>

            </div>
            <div class="col-sm-4">
                <p style="margin-top: ">Select your pickup date</p>
                <label for="start"></label>
                <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31"
                    style="width: 150px; margin-top: 20px;">

            </div>

            <div class="col-sm-4">
                <button type="button" class="btn btn-secondary" style="width: 150px; margin-top: 50px;">Search</button>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4" style="border-right: 1px solid gray;" id="ani">
                <br>
                <div class="btn-group">
                    <button><a href="Without.php" style="color: white; text-decoration: none;">Without Fuel</a></button>
                    <button><a href="fuel.php" style="color: white; text-decoration: none;">Fuel</a></button>
                    <button><a href="booking.php" style="color: white; text-decoration: none;">Custom</a></button>
                </div><br>
                <!--booking duration-->
                <p>Booking Duration</p>
                <p>Currenet Booking Duration</p>
                <!--four buttons-->
                <div class="container">
                    <div class="row">
                        <button type="button" class="btn btn-outline-secondary mx-4" style="width: 120px;"><a
                                href="booking.php">Custom</a></button>
                        <button type="button" class="btn btn-outline-secondary" style="width: 120px;"><a
                                href="15day.php">15 Days</a></button>
                    </div><br>
                    <div class="row">
                        <button type="button" class="btn btn-outline-secondary mx-4" style="width: 120px;"><a
                                href="7day.php">7 Days</a></button>
                        <button type="button" class="btn btn-outline-secondary" style="width: 120px;"><a
                                href="30day.php">30 Days</a></button>
                    </div><br>
                    <!--list for container-->
                    <ul>
                        <li><small>You will be charged per km driven at the end of the trip.</small></li>
                        <li><small>You will not be reimbursed for fuel expenses.</small></li>
                        <li><small>You must return the vehicle with the same amount of fuel as when picked up.</small>
                        </li>
                    </ul>
                </div>

                <!--make a container for Filter-->
                <div class="row">

                    <div class="container">
                        <small>Car Type</small><br>
                        <div class="row mx-1">
                            <button type="button" class="btn btn-outline-secondary mx-4" style="width: 120px;"><a
                                    href="Hatchback.php">Hatchback</a></button>
                            <button type="button" class="btn btn-outline-secondary" style="width: 120px;"><a
                                    href="sedan.php">Sedan</a></button>
                        </div><br>

                        <div class="row mx-1">
                            <button type="button" class="btn btn-outline-secondary mx-4" style="width: 120px;"><a
                                    href="suv.php">SUV</a></button>
                            <button type="button" class="btn btn-outline-secondary" style="width: 120px;"><a
                                    href="minsuv.php">
                                    Mini SUV</a></button>
                        </div><br>

                        <!--Transmission type-->
                        <small>Transmission type</small><br>
                        <div class="row mx-1">
                            <button type="button" class="btn btn-outline-secondary mx-4" style="width: 120px;"><a
                                    href="manual.php">Manual</a></button>
                            <button type="button" class="btn btn-outline-secondary" style="width: 120px;"><a
                                    href="automate.php">Automatic</a></button>
                        </div><br>


                        <!--Fuel type-->
                        <small>Fuel type</small><br>
                        <div class="row mx-1">
                            <button type="button" class="btn btn-outline-secondary mx-4" style="width: 120px;"><a
                                    href="Diesel.php">Diesel</a></button>
                            <button type="button" class="btn btn-outline-secondary" style="width: 120px;"><a
                                    href="Petrol.php">Petrol</a></button>
                        </div><br>
                    </div>

                    <!---limit age-->
                    <div class="row mx-1">
                        <small> Age limit</small>
                    </div>

                    <div class="row mx-1">
                        <button type="button" class="btn btn-outline-secondary" style="width: 150px;">18-21
                            years</button>
                    </div>
                    <pre></pre>
                    <p style="color: white;">dddddddddddddddddddddddd</p>
                </div>

            </div>

            <div class="col-sm-8">

                <img src="assets/img/AA.png" style="width: 95%; border-radius: 5px;">
                <small
                    style="font-size: 11px; padding: 5px; margin: 3px; border:solid 1px gray; border-radius: 5px;">Vehicles
                    are available at the following Locations Kalyan Nagar - Hormavu Junction, Bellandur - Green Glen
                    Layoutand Indiranagar</small>
                <hr>
                <br>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="assets/img/6.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="item.php">Zest XT</a></h5>
                                <i style="font-size:20px" class="fa">&#xf156;</i><small
                                    style="font-size: 20px;">5455</small><br>
                                <p class="card-text">5 seates , petrol</p>
                            </div>
                            <div class="card-footer">
                                <a href="" threadlist.php?catid='.$id.'" "><small>OTHER LOCATION</small></a>
                                <a href="item.php" class="mx-3"><small>QUICK VIEWS</small></a>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="assets/img/5.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="item.php">Hyundai Grand i10</a></h5>
                                <i style="font-size:20px" class="fa">&#xf156;</i><small style="font-size: 20px;">
                                    5646</small><br>

                                <p class="card-text">Five seater and more comfort.</p>
                            </div>
                            <div class="card-footer">
                                <a href="" threadlist.php?catid='.$id.'" "><small>OTHER LOCATION</small></a>
                                <a href="item.php" class="mx-3"><small>QUICK VIEWS</small></a>
                            </div>
                        </div>
                    </div>


                    <div class="col">
                        <div class="card">
                            <img src="assets/img/1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><a href="item.php">TATA hexa</a></h5>
                                <p class="card-text">Menual 7 seat ,Diesel</p>
                            </div>
                            <div class="card-footer">
                                <a href="" threadlist.php?catid='.$id.'" "><small>OTHER LOCATION</small></a>
                                <a href="item.php" class="mx-3"><small>QUICK VIEWS</small></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
  
    </div>
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