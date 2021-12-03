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
    <a href="javascript:history.back()"><img src="../Icons/goBack.png" alt="goBack"></a>
    <h1 class='title-main mt-3'>Գաղտնաբառի փոփոխություն</h1>
    <p>Մուտքագրեք նոր գաղտնաբառը</p>

  
  <div class='pt-4 small pb-1 pass-err-title'>Գաղտնաբառ</div>
  <div class='tel-code  pass-err d-flex justify-content-between'>
    <div><input id='insertPass' class='tel-code-input' type="password"></div>
    <div id='togglePassword'><img id='eyeToggle' class="checked-icon checked-icon-displayed" src="../Icons/eye.png" alt=""></div>
  </div>
  <div class='pt-4 small pb-1 pass-err-title'>Կրկնել գաղտնաբառը</div>
  <div class='tel-code  pass-err d-flex justify-content-between'>
    <div><input id='insertPass2' class='tel-code-input' type="password"></div>
    <div id='togglePassword2'><img id='eyeToggle2' class="checked-icon checked-icon-displayed" src="../Icons/eye.png" alt=""></div>
  </div>
  <div class='small pass-err-show'></div>

    

  <div class='d-flex pt-5 mt-3 pb-4'>
    <button class='confirm-button' disabled>Հաստատել</button>  
  </div>
 <!-- Modal -->
 <div class="modal fade" id="successComplete" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
          <div> <img class='success-icon' src="../Icons/check-circle.png" alt=""></div>
        <p>
            Գաղտնաբառի փոփոխությունը հաջողվել է!
        </p>
        <div class="">
          <a href='login.php'><button type="button" class="modal-button confirm-button ">Մուտք</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include "../footer.php";
?>

<script src="../js/registration/resetPass.js" type="text/javascript"></script>
</body>
</html>