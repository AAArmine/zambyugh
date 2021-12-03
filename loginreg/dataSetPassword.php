<?php
session_start();
include "../config/dbconfig.php";
if(isset($_POST['password'])){
    $tel_number=$_SESSION['phone'];
    $sql_phone_check=mysqli_query($con, 
    "SELECT * from users where phone ='".$tel_number."'
    ");
    $row=mysqli_num_rows($sql_phone_check);
    if(!$row){
        $sql=mysqli_query($con, 
        "INSERT INTO users
        (phone, password, stayInSystem) values('".$tel_number."', '".$_POST['password']."', '".$_POST['stayInSystem']."')");

        if($_POST['stayInSystem']==1){
            
            setcookie('phone', $tel_number, time()+(86400*10000), "/");
            echo $_COOKIE['phone'];
        }
    }else{
        echo 'Already registered';
    }
}
?>