<?php
session_start();
include "../../config/dbconfig.php";
    if(isset($_POST['newaddress'])){
    $newaddress = $_POST['newaddress'];
    $sql_address2="SELECT  `address2` FROM `users` WHERE id = 1";
    $result2 = mysql_query($sql_address2);
    // $result2 = $con->query($sql_address2);    
    $sql_address3="SELECT  `address3` FROM `users` WHERE id = 1";
    $result3 = mysql_query($sql_address3);
    // $result3 = $con->query($sql_address3);
                    // while ($row = $result3->fetch_assoc()) {
                    //     echo $row['classtype'];
                    // }
    // echo($result2->num_rows);
        // if ($result2->num_rows == null) {
        //     while ($row = $result3->fetch_assoc()) {
        //         $sql2 = "UPDATE `users` SET `address2`='$newaddress' WHERE id = 1";
        //         if($con->query($sql2) === TRUE){
        //             echo 'avelacvel e nor hasce';
        //         }
        //         else{
        //             echo 'inchvor ban sxal e';
        //         }
        //     }
        // }else{
        //     if ($result3->num_rows == null) {
        //         while ($row = $result3->fetch_assoc()) {
        //         echo($row['num_rows']);
        //         $sql = "UPDATE `users` SET `address3`='$newaddress' WHERE id = 1";
        //             if($con->query($sql) === TRUE){
        //                 echo 'avelacvel e nor hasce';
        //             }
        //             else{
        //                 echo 'inchvor ban sxal e';
        //             }
        //         }
        //     }else{
        //         echo "duq uneq 3 address ev cheq karox avelacnel evs meky";
        //     }
        // }  

        if (mysql_num_rows($result2) > 0) {
          echo 'aysinqn ka 2rd hasce';
        } else {
          echo 'aysinqn chka 2 adres';
        }
    }
?>