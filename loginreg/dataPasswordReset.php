<?php
session_start();
include "../config/dbconfig.php";

// initial tel submit
if(isset($_POST['telVal'])){
    $sql= mysqli_query($con, "SELECT phone from users where phone ='".$_POST['telVal']."'");
    $row=mysqli_num_rows($sql);
    if($row){
        //----------------> HERE PHONE EXists login
        $_SESSION['phone']=$_POST['telVal'];
        echo('PhoneExists');
    }else{
        echo('noPhone');
    }
}