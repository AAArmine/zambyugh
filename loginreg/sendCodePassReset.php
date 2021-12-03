<?php
include "../header.php";
?>
  <link rel="stylesheet" href="../css/login.css">
	<title>Reset Password</title>
</head>
<body>
<?php
include "../navbar.php";
?>
<?php echo $_SESSION['phone'];?>

<div class="login-container login-container-reg">
<a href="javascript:history.back()"><img src="../Icons/goBack.png" alt="goBack"></a>
    <h1 class='title-main mt-3'>Հաստատել հեռախոսահամարը</h1>
    <p>Ձեր հեռախոսահամարին ուղարկվել է 6 նիշից բաղկացած կոդ, մուտքագրեք այն</p>

  <div class='pt-5 small pb-1'>Հեռախոսահամար</div>
  <div class='d-flex tel-code-flex'>
    <div class='tel-code tel-code-item1'>+374</div>
    <div class='tel-code tel-code-item2 d-flex justify-content-between'>
      <div><input id='initialLog' value='<?php echo $_SESSION['phone'];?>' class='tel-code-input' type="text" placeholder="(91) xx-xx-xx"  maxlength="13" disabled></div>
      <div><img class="checked-icon checked-icon-displayed" src="../Icons/checked.png" alt=""></div>
    </div>
  </div>
  <div class="number-error"></div> 
  
  <div class='pt-4 small pb-1'>Կոդ</div>
  <div class='tel-code d-flex'>
    <div>
        <input id='insertCode' class='tel-code-input' type="text"  maxlength="6">  
    </div>
  </div>
  <div class='get-new-code'>Ստանալ նոր կոդ</div>
  <div id="recaptcha-container"></div>
  <div class='d-flex pt-5'>
    <button onclick='codeverify()' class='confirm-button' disabled>Հաստատել</button>  
  </div>
  

</div>
<?php
include "../footer.php";
?>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
    // Your web app's Firebase configuration
    const firebaseConfig = {
        apiKey: "AIzaSyDcV-cMZ3a9XdvcEUE1sE1hCsKg4ZV2Q5M",
        authDomain: "zambyugh-store-php.firebaseapp.com",
        projectId: "zambyugh-store-php",
        storageBucket: "zambyugh-store-php.appspot.com",
        messagingSenderId: "972930051625",
        appId: "1:972930051625:web:ea10c276b2b2e41b49b638",
        measurementId: "G-XSE4CXEH1E"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>
<script src="../js/registration/resetPassSendCode.js" type="text/javascript"></script>
</body>
</html>