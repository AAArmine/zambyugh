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
<?php echo $_COOKIE['phone'].", cookie";?>

<div class="login-container login-container-reg">
    <a href='registration_pass.php'><img src="../Icons/goBack.png" alt="goBack"></a>
    <h1 class='title-main mt-3'>Բարի գալուստ Զամբյուղ հարթակ</h1>
    <p>Գրանցումը ավարտելու համար խնդրում ենք մուտքագրեք Ձեր տվյալները</p>
  
    <div class='pt-4 small pb-1'>Անուն</div>
    <div class='tel-code  d-flex justify-content-between'>
      <div><input id='name' class='tel-code-input' type="text" placeholder="Անուն"></div>
    </div>
    <div class='pt-4 small pb-1'>Ազգանուն</div>
    <div class='tel-code  d-flex justify-content-between'>
      <div><input id='surName' class='tel-code-input' type="text" placeholder="Ազգանուն"></div>
    </div>
    <div class='pt-4 small pb-1 email-err-title'>Էլ․ հասցե</div>
    <div class='tel-code email-err d-flex justify-content-between'>
      <div><input id='email' class='tel-code-input' type="text" placeholder="Էլ․ հասցե"></div>
    </div>
    <div class='small email-err-show'></div>

    <div class='pt-4 delivery-address '>Առաքման հասցե</div>

    <div class='pt-3 small pb-1 city-err-title'>Բնակավայր</div>
    <div class='tel-code  city-err  d-flex justify-content-between'>
      <div><input id='addressCity' class='tel-code-input' type="text" placeholder="Քաղաք, գյուղ"></div>
    </div>

    <div class='pt-3 small pb-1 street-err-title'>Փողոց</div>
    <div class='tel-code  d-flex justify-content-between'>
      <div><input id='addressStreet' class='tel-code-input' type="text" placeholder="Փողոց"></div>
    </div>
    <div class="d-flex justify-content-between">
      <div>
        <div class='pt-3 small pb-1 building-err-title'>Շենք</div>
        <div class='tel-code building-err d-flex justify-content-between'>
          <div><input id='addressBuilding' class='tel-code-input input-address' type="text" placeholder="Շենք"></div>
        </div>
        <div class='small building-err-show'></div>

      </div>
      
      <div>
        <div class='pt-3 small pb-1 entrance-err-title'>Մուտք</div>
        <div class='tel-code entrance-err d-flex justify-content-between'>
          <div><input id='addressEntrance' class='tel-code-input input-address' type="text" placeholder="Մուտք"></div>
        </div>
        <div class='small entrance-err-show'></div>

      </div>
    </div>

    <div class="d-flex justify-content-between">
      <div>
        <div class='pt-3 small pb-1 floor-err-title'>Հարկ</div>
        <div class='tel-code floor-err  d-flex justify-content-between'>
          <div><input id='addressFloor' class='tel-code-input input-address' type="text" placeholder="Հարկ"></div>
        </div>
        <div class='small floor-err-show'></div>

      </div>
      <div>
        <div class='pt-3 small pb-1 home-err-title'>Բնակարան/Տուն</div>
        <div class='tel-code home-err  d-flex justify-content-between'>
          <div><input id='addressHome' class='tel-code-input input-address' type="text" placeholder="Բնակարան/Տուն"></div>
        </div>
        <div class='small home-err-show'></div>

      </div>
    </div>
    


  <div class='d-flex mt-3 pt-5 pb-4'>
    <button class='confirm-button' disabled>Գրանցվել</button>  
  </div>

  
   <!-- Modal -->
   <div class="modal fade" id="successComplete" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
          <div> <img class='success-icon' src="../Icons/check-circle.png" alt=""></div>
        <p>
        Շնորհավորում ենք Դուք հաջողությամբ գրանցվել եք Զամբյուղ հարթակ
        </p>
        <div class="">
          <a href='home.php'><button type="button" class="modal-button confirm-button ">Կատարել գնումներ</button></a>
        </div>
      </div>
    </div>
  </div>
</div>


</div>
<?php
include "../footer.php";
?>

<script src="../js/registration/regComplete.js" type="text/javascript"></script>
</body>
</html>