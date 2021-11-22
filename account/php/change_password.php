<?php
session_start();

include "../../config/dbconfig.php";
if(isset($_POST['passold']) && isset($_POST['passnew'])  && isset($_POST['passcheck']) ){
    $pass_not_hash_old=$_POST['passold'];
    $password_old=($pass_not_hash_old);
    // $password_old=md5($pass_not_hash_old);
    

    
    $pass_not_hash_new=$_POST['passnew'];
    $password_new=($pass_not_hash_new);
    // $password_new=md5($pass_not_hash_new);
    
    $pass_not_hash_check=$_POST['passcheck'];

    $sql_pass="SELECT  `password` FROM `users` WHERE id = 1";
    $result = $con->query($sql_pass);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if ($row["password"] == $password_old) {
                if (strlen($pass_not_hash_new) > 7) {
                    if ($pass_not_hash_old != $pass_not_hash_new) {
                        if ($pass_not_hash_check == $pass_not_hash_new) {
                            $sql = "UPDATE users SET password='$password_new' WHERE id='1'";
                            if($con->query($sql) === TRUE){
                            	echo 'passwordy hajoxutyamb popoxvec';
                            }
                            else{
                            	echo 'error';
                            }
                        }else{echo "nor passwordy nuyny chi check passwordi het";}
                    }else{echo 'dug grel eq nuyn password-nery erku dashterum';}
                }else{echo "nor passwordy petq e lini minimum 8 nish";}
            }else{echo 'duq sxal eq grel dzer hin paroly';}
        }
    }
}
           
?>