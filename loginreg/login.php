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
<div class="login-container login-container-reg">
    <a href='initialLog.php'><img src="../Icons/goBack.png" alt="goBack"></a>
    <h1 class='title-main mt-3'>Մուտք</h1>
    <p>Խնդրում ենք մուտքագրել Ձեր տվյալները</p>
  <div class='pt-5 small pb-1'>Հեռախոսահամար</div>
  <div class='d-flex tel-code-flex'>
    <div class='tel-code tel-code-item1'>+374</div>
    <div class='tel-code tel-code-item2 d-flex justify-content-between'>
      <div><input id='initialLog' value='<?php echo $_SESSION['phone'];?>' class='tel-code-input' type="text" placeholder="(91) xx-xx-xx"  maxlength="13" disabled></div>
      <div><img class="checked-icon checked-icon-displayed" src="../Icons/checked.png" alt=""></div>
    </div>
  </div>
  <div class="number-error"></div> 
  
  <div class='pt-4 small pb-1 pass-err-title'>Գաղտնաբառ</div>
  <div class='tel-code  pass-err d-flex justify-content-between'>
    <div><input id='insertPass' class='tel-code-input' type="password"></div>
    <div id='togglePassword'><img id='eyeToggle' class="checked-icon checked-icon-displayed" src="../Icons/eye.png" alt=""></div>
  </div>
  <div class='small pass-err-show'></div>
 

    <!-- <div>
        <input id='insertPass' class='tel-code-input' type="text">  
    </div> -->

  <div class='d-flex justify-content-between'>
    <div>
      <label class="checkbox">
        <input type="checkbox" checked id='stayInSystem'/>
        <span ><span class="checkbox-label">Հիշել ինձ</span></span>
      </label>
    </div>
    
    <a href='forgotPassword.php'><div class='forgot-password small pt-1'>Մոռացել եմ գաղտնաբառը</div></a>
  </div>
  <div class='d-flex pt-2 pb-4'>
    <button class='confirm-button' disabled>Մուտք</button>  
  </div>
<div class='d-flex small'>
    <div>
        Մուտք գործելով Դուք ընդունում եք մեր <a class="a-main" href='#'>Գաղտնիության քաղաքականությունը</a> և <a class="a-main" href='#'>Օգտագործման կանոնները</a>, ինչպես նաև համաձայնվում եք Ձեր <a class="a-main" href='#'>անձնական տվյալների մշակման հետ</a>:</span>
    </div>
</div>
  
  <?php  echo $_COOKIE['phone']; ?>
</div>
<?php
include "../footer.php";
?>

<script src="../js/registration/login.js" type="text/javascript"></script>
</body>
</html>