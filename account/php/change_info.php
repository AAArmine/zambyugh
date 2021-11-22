<?php
session_start();
include "../../config/dbconfig.php";
    if(isset($_POST['number']) && isset($_POST['email']) && isset($_POST['address1'])){
      $number = $_POST['number'];
      $email = $_POST['email'];
      $address1 = $_POST['address1'];
      // if (isset($_POST['address2'])) {
      //   $address2 = $_POST['address2'];
      // }      
      // if (isset($_POST['address3'])) {
      //   $address3 = $_POST['address3'];
      // }
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
          if (strlen($number) > 8 || strlen($number) < 8) {
              echo "greq heraxosahamar aranc +374 ev 8nish";
          }else{
              if (is_numeric($number)) {
                  $sql = "UPDATE users SET phone= '$number' , email= '$email' , address1='$address1' WHERE users.id = 1";
                  // $sql = "UPDATE users SET phone= '$number' , email= '$email' , address1='$address1' , address2='$address2' , address3='$address3'  WHERE users.id = 1";
                  // var_dump($con->query($sql));
                  if($con->query($sql) === TRUE){
                      echo 'tvyalnery hajoxutyamb popoxvel en';
                  }
                  else{
                      echo 'inchvor Вan sxal e';
                  }
              }else{echo "greq heraxosahamar: tveric baci urish nishel ka";}
          }
      }else{echo "greq chisht email";}
    }
           
?>