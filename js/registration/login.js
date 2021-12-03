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
// end show password

//Login
$("#insertPass").keyup(function () {
  if ($(".pass-err-show").html() !== "") {
    $(".pass-err").css("border", "1px solid #6e6b6b");
    $(".pass-err-title").css("color", "black");
    $(".pass-err-show").html("");
  }
  $pass = $(this).val();
  if ($pass.length > 5) {
    $(".confirm-button").attr("disabled", false);
  } else {
    $(".confirm-button").attr("disabled", "disabled");
  }
});

// set password
$(".confirm-button").click(function () {
  $password = $("#insertPass").val();
  if (document.getElementById("stayInSystem").checked) {
    $stayInSystem = "1";
  } else {
    $stayInSystem = "0";
  }
  // console.log($password);
  $.ajax({
    type: "post",
    url: "dataCheckPassword.php",
    data: {
      stayInSystem: $stayInSystem,
      password: $password,
    },
    success: function (result) {
      if (result == "password ok") {
        setTimeout(function () {
          window.location.href = "../home.php";
        }, 500);
      } else if (result == "password error") {
        $(".pass-err").css("border", "1px solid red");
        $(".pass-err-title").css("color", "red");
        $(".pass-err-show").html("Սխալ ներմուծված գաղտնաբառ");
      }
      console.log(result);
    },
  });
});
