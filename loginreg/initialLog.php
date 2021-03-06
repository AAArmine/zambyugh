<?php
include "../header.php";

?>
  <link rel="stylesheet" href="../css/login.css">
	<title>Login/Registration</title>
</head>
<body>
<?php
include "../navbar.php";
?>
<div class="login-container">
<h1 class='title-main mt-5'>Մուտք/Գրանցում</h1>
<!-- <?php
// setcookie('phone', null, -1, "/");
?> -->
<p>Խնդրում ենք մուտքի կամ գրանցման համար մուտքագրել Ձեր բջջային հեռախոսահամարը</p>
<form>
  <div class='pt-5 small pb-1'>Հեռախոսահամար</div>
  <div class='d-flex tel-code-flex'>
    <div class='tel-code tel-code-item1'>+374</div>
    <div class='tel-code tel-code-item2 d-flex justify-content-between'>
      <div><input id='initialLog' class='tel-code-input' type="text" placeholder="(91) xx-xx-xx"  maxlength="13"></div>
      <div><img class="checked-icon" src="../Icons/checked.png" alt=""></div>
    </div>
  </div>
  <div class="number-error"></div>    
</form>
</div>

<?php
include "../footer.php";
?>
<script src="../js/registration/initialLog.js" type="text/javascript"></script>
</body>
</html>