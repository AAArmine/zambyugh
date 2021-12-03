// get password
$("#insertPass").keyup(function () {
  $pass = $(this).val();
  if ($pass.length > 5) {
    if (document.getElementById("consentPolicy").checked) {
      $(".confirm-button").attr("disabled", false);
    }
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
  $.ajax({
    type: "post",
    url: "dataSetPassword.php",
    data: {
      stayInSystem: $stayInSystem,
      password: $password,
    },
    success: function (result) {
      if (result) {
        setTimeout(function () {
          window.location.href = "registration_complete.php";
        }, 500);
      }
    },
  });
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
// end show password

// consent policy check after activation of reg button
$("#consentPolicy").change(function () {
  $(".confirm-button").prop("disabled", !$(".confirm-button").prop("disabled"));
});
