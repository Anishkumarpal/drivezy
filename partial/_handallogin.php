<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email = $_POST['loginEmail'];
    $pass = $_POST['loginPass']; 
     $hash = md5($pass);
    $sql = "Select * from users where user_email='$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if ($numRows == 1){
       // echo "hello";
        $row = mysqli_fetch_assoc($result); 
     //  echo $row['user_pass'];
            if($row['user_pass'] == $hash){
               //// echo "hii";
                session_start();
                $_SESSION['loggedin'] = true ;
               echo $_SESSION['useremail'] = $email;
                echo "loggedin".$email;
                echo "hii";
            }   
            header("location:/Vesperr/Vesperr/index.php");        
    }
}    
?>

