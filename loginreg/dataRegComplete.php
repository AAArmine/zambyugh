<?php
session_start();
include "../config/dbconfig.php";
$tel_number=$_SESSION['phone'];
if(isset($_POST['name'])){
    $sql_phone_check=mysqli_query($con, 
    "SELECT * from users where phone ='".$tel_number."'
    ");
    $row=mysqli_fetch_assoc($sql_phone_check);
    if($row){
        echo $row['id'].', '.$_POST['name'].', '.$_POST['surName'].', '.$_POST['address'].', '.$_SESSION['phone']. ', '.$_POST['email'];
        $sql_insert_details=mysqli_query($con, "UPDATE users SET name ='".$_POST['name']."', surname='".$_POST['surName']."', email='".$_POST['email']."', address1='".$_POST['address']."' where phone='".$_SESSION['phone']."'");
        }
}
