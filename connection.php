<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="db_register";

    $con=mysqli_Connect($host,$user,$pass,$db);

    if($con){
        echo"";
    }else{
        echo"DB Not Connected";
    }
?>