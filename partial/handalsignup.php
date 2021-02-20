<?php
$showError= "false";
if($_SERVER["REQUEST_METHOD"] =="POST"){
    include '_dbconnect.php'; 
  echo  $user_email = $_POST['signupEmail'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    //checked exist method 
    $existsql = "SELECT * FROM `users` WHERE user_email= '$user_email'";
    $result = mysqli_query($conn, $existsql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        //$exists = true;
        $showError = "Email already Exists";
    }else{
        if($pass == $cpass){
          $hash = md5($pass);
          $sql = "INSERT INTO `users` (`user_email`, `user_pass`, `timestamp`) VALUES ('$user_email', '$hash', current_timestamp())";
          $result = mysqli_query($conn, $sql);
          if($result){
              $showAlert = true;
              header("Location: /Vesperr/Vesperr/index.php?signupsuccess=true");
              exit();
          }

        }
        
        else{
            $showError = "Password do nat match";
        }
    }

    header("Location: /Vesperr/Vesperr/index.php?signupsuccess=false&error=$showError");
}


?>