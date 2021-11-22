<?php
$host = "localhost";
$database = "zambyugh";
$username = "root";
$password = "";
//urljTKNueh1SqX2G
// $con = mysqli_connect($host, $database);
$con = mysqli_connect($host, $username, $password, $database);
if (!$con) {
    die('error_get_last()' . mysqli_error());

} else {
    mysqli_query($con, "SET NAMES 'utf8'");
//    echo "Ok";
}

?>
