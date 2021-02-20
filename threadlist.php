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

 <?php   
        $id = $_GET['catid'];
        $sql = "SELECT * FROM `categories` WHERE cat_id= $id";
        $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
            $catname = $row['cat_name'];
            $catdesc = $row['cat_description'];

           }
    ?>
     <?php
                $showAlert = false;
                $method = $_SERVER['REQUEST_METHOD'];
                if($method== 'POST'){
                    $th_title = $_POST['title'];
                    $th_desc = $_POST['desc'];
                    $sql ="INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestemp`) VALUES ( '$th_title', '$th_desc', '$id', '0', current_timestamp())";
                    $result = mysqli_query($conn, $sql);
                    $showAlert = true;
                    if($showAlert){
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Successfully!</strong> You are submited your comment plz wait for some time answer!!.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                    }else{
                        echo '<div class="alert alert-denger alert-dismissible fade show" role="alert">
                        <strong>Ooh!!!</strong> Your comment are successfully submited please try again....
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>';
                    }
                }
           ?>

    <!--Categories container starts here-->
    <div class="container" my-4>
        <div class="jumbotron">
            <h1 class="display-4">welcome to <?php echo $catname; ?> Forum </h1>
            <p class="lead"> <?php echo $catdesc; ?> </p>
            <hr class="my-4">
            <p>This is peer to peer forum for sharung knowlege with each other</p>
            <a class="btn btn-primary btn-lg" href="threads.php" role="button">Learn more</a>
        </div>
    </div>
    <div class="container">
        <h3 class="text-success">Ask answer and question</h3><br>
        <form action="<?php echo $_SERVER['REQUEST_URI']  ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Problem Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Keep your title as more questions.</div>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="desc" name="desc" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Elaborate your concern</label>
            </div><br>
            <button type="submit" class="btn btn-success">Submit</button>
        </form><br><hr><br>
    </div>
    
        <div class="container">
        <?php   
                    $id = $_GET['catid'];
                    $sql = "SELECT * FROM `threads` WHERE thread_cat_id=$id";
                    $result = mysqli_query($conn, $sql);
                    $noResult = true;
                        while($row = mysqli_fetch_assoc($result)){
                        $noResult = false;        
                        $id = $row['thread_id'];
                        $desc = $row['thread_desc'];
                        $title = $row['thread_title'];
                        $thread_time = $row['timestemp'];


                    
                 echo'  <div class="media border p-3">
                            <img src="assets/img/7.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                            <div class="media-body">
                                <p class= "font-weight-bold my-0">'.$thread_time.'</p>
                                <h4>Anish Pal  <small><i><a class="text-success" href="threads.php?threadid='.$id.'">'.$title.'</a></i></small></h4>
                                <p>'.$desc.'</p>
                            </div>
                        </div>';
                        }   
                        //echo $noResult; 
                        if($noResult){
                            echo '
                            <div class= "jumbotron jumbotron-fluid">
                                <div class="container">
                                    <h1 class="display-4">No threads found!!! </h1>
                                    <p class="lead"> Be the first person to ask a question</p>
                                </div>

                            </div>';
                        }
                ?>


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