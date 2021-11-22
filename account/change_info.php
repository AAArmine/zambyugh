<?php
$sql="SELECT * FROM users WHERE id ='1' ";
$result_user = mysqli_query($con, $sql);
$row_data=mysqli_fetch_array($result_user);
?>
<?php
include "../header.php";
?>
	  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/footer.css">
	<title>Document</title>
</head>

<body>

        <?php
        include "../navbar.php";

        ?>

        <?php
        include "../footer.php";

        ?>
<script src="../js/change_info.js"></script>
</body>
</html>