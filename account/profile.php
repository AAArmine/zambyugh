<?php
include "../header.php";
?>
<?php
	$sql="SELECT * FROM users WHERE id ='1' ";
	$result = mysqli_query($con, $sql);
	$row_data=mysqli_fetch_array($result);
?>

  <link rel="stylesheet" href="../css/navbar.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/profile.css">
	<title>Document</title>
</head>
<body>
<?php
include "../navbar.php";
?>
<div class="gray_part">
	<div class="preview"></div>
	<div class="second_part">
		<div class="personal"><p>Անձնական էջ</p></div>
		<div style="margin-left: 48%;">
			<a href="change_info.php"><div class="edit_personal"></div></a>
			
		</div>
	</div>
	<div class="about_person">
		<div><p><?php echo $row_data['name']?></p></div>
		<div><p>+374 <?php echo $row_data['phone']?></p></div>
		<div><p><?php echo $row_data['email']?></p></div>
	</div>
</div>
<div class="white_part">
	<div class="white_part_section">
		<div class="map_ic">
			
		</div>
		<div>
			<p class="ing1">Առաքման հասցե</p>
		</div>
		<div class="drop_ic1">
			
		</div>
	</div>

	<hr class="new5">

	<div class="white_part_section">
		<div class="shop_cart_ic">
			
		</div>
		<div>
			<p class="ing2">Իմ զամբյուղը</p>
		</div>
		<div class="drop_ic2">
			
		</div>
	</div>

	<hr class="new5">

	<div class="white_part_section">
		<div class="clock_ic">
			
		</div>
		<div>
			<p class="ing3">Գնումների պատմություն</p>
		</div>
		<div class="drop_ic3">
			
		</div>
	</div>

	<hr class="new5">

	<div class="white_part_section">
		<div class="tag_ic">
			
		</div>
		<div>
			<p class="ing4">Ակցիաներ</p>
		</div>
		<div class="drop_ic4">
			
		</div>
	</div>
	<hr class="new5">
	<div class="white_part_section">
		<div class="help_ic">
			
		</div>		
		<div>
			<p class="ing5">Աջակցություն</p>
		</div>
		<div class="drop_ic5">
			
		</div>
	</div>
	<hr class="new5">
	<div class="white_part_section">
		<div class="logout_ic">
			
		</div>
		<div>
			<p>Դուրս գալ</p>
		</div>
	</div>
	<hr class="new5">
</div>
<script src="../js/addaddress.js"></script>
<?php
include "../footer.php";
?>
</body>
</html>