<?php
include "config.php";
$email = mysqli_real_escape_string($con,$_POST['email']);

if ($email != ""){

    $sql_query = "select count(*) as cntUser from users where email='".$email."'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['email'] = $email;
        echo 1;
    }else{
        echo 0;
    }

}
