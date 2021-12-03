<?php
session_start();
include "../config/dbconfig.php";

// initial tel submit
if(isset($_POST['password'])){
    $sql= mysqli_query($con, "UPDATE users SET password ='".$_POST['password']."' where phone='".$_SESSION['phone']."'");

    if($sql){
        echo 'ok';

    }
}