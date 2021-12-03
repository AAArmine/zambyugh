// get password
$("#insertPass").keyup(function () {
  //   console.log("up");
  $pass = $(this).val();
  $pass2 = $("#insertPass2").val();
  console.log($pass.length);
  console.log($pass2.length);

  if ($pass.length > 5 && $pass2.length > 5) {
    $(".confirm-button").attr("disabled", false);
    console.log("false");
  } else {
    $(".confirm-button").attr("disabled", "disabled");
  }
});
$("#insertPass2").keyup(function () {
  //   console.log("up");
  $pass = $(this).val();
  $pass2 = $("#insertPass").val();
  console.log($pass.length);
  console.log($pass2.length);

  if ($pass.length > 5 && $pass2.length > 5) {
    $(".confirm-button").attr("disabled", false);
    console.log("false");
  } else {
    $(".confirm-button").attr("disabled", "disabled");
  }
});

// set password
$(".confirm-button").click(function () {
  $password = $("#insertPass").val();
  $password2 = $("#insertPass2").val();
  if ($password == $password2) {
    $.ajax({
      type: "post",
      url: "dataChangePassword.php",
      data: {
        password: $password,
      },
      success: function (result) {
        console.log(result);
        $("#insertPass").val("");
        $("#insertPass2").val("");
        $(".pass-err-show").html("");
        jQuery.noConflict(); ///!!!!!!!!!!!!!!!!!!!!!!!!!
        $("#successComplete").modal("show");
      },
    });
  } else {
    $(".pass-err-show").html("Գաղտնաբառերի անհամապատասխանություն");
  }
});

// show password
const togglePassword = document.querySelector("#togglePassword");
const passwordInput = document.querySelector("#insertPass");
togglePassword.addEventListener("click", function (e) {
  const type =
    passwordInput.getAttribute("type") === "password" ? "text" : "password";
  passwordInput.setAttribute("type", type);
  if ($("#eyeToggle").attr("src") == "../Icons/eye.png") {
    $("#eyeToggle").attr("src", "../Icons/eyeDel.png");
  } else {
    $("#eyeToggle").attr("src", "../Icons/eye.png");
  }
});
// password 2
const togglePassword2 = document.querySelector("#togglePassword2");
const passwordInput2 = document.querySelector("#insertPass2");
togglePassword2.addEventListener("click", function (e) {
  const type =
    passwordInput2.getAttribute("type") === "password" ? "text" : "password";
  passwordInput2.setAttribute("type", type);
  if ($("#eyeToggle2").attr("src") == "../Icons/eye.png") {
    $("#eyeToggle2").attr("src", "../Icons/eyeDel.png");
  } else {
    $("#eyeToggle2").attr("src", "../Icons/eye.png");
  }
});
// end show password

// consent policy check after activation of reg button
$("#consentPolicy").change(function () {
  $(".confirm-button").prop("disabled", !$(".confirm-button").prop("disabled"));
});
