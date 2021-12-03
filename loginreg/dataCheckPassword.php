<?php
session_start();
include "../config/dbconfig.php";
if(isset($_POST['password'])){
    $tel_number=$_SESSION['phone'];
    // echo $tel_number;
    $sql_phone_check=mysqli_query($con, 
    "SELECT * from users where phone ='".$tel_number."' and password = '".$_POST['password']."'
    ");
    $row=mysqli_num_rows($sql_phone_check);

    if(!$row){
        echo "password error";
    }else{
        echo "password ok";
        if($_POST['stayInSystem']==1){
            setcookie('phone', $tel_number, time()+(86400*10000), "/");
        }else{
            setcookie('phone', $tel_number, time()-86400, "/");
        }
    }
}
?>