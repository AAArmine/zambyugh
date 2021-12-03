window.onload = function () {
  render();
};
function render() {
  window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier(
    "recaptcha-container",
    {
      size: "invisible",
      callback: (response) => {
        onSignInSubmit();
      },
    }
  );
  recaptchaVerifier.render();

  var number = "+" + "374" + $("#initialLog").val();
  console.log(number);
  firebase
    .auth()
    .signInWithPhoneNumber(number, window.recaptchaVerifier)
    .then(function (confirmationResult) {
      //s is in lowercase
      window.confirmationResult = confirmationResult;
      coderesult = confirmationResult;
      console.log(coderesult);
      alert("Message sent");
    })
    .catch(function (error) {
      alert(error.message);
    });
}

// button confirm make enabled

$("#insertCode").keyup(function () {
  $codeVal = $(this).val();
  if ($codeVal.length > 5) {
    $(".confirm-button").attr("disabled", false);
  }
});
//verify code
function codeverify() {
  var code = document.getElementById("insertCode").value;
  var number = "+" + "374" + $("#initialLog").val();

  coderesult
    .confirm(code)
    .then(function (result) {
      alert("Successfully registered");
      setTimeout(function () {
        window.location.href = "reset_pass.php";
      }, 1000);
    })
    .catch(function (error) {
      alert("Մուտքագրված կոդը սխալ է: Սեղմեք «Ստանալ նոր կոդ»:");
      $("#insertCode").val("");
    });
}
$(".get-new-code").click(function () {
  var number = "+" + "374" + $("#initialLog").val();
  console.log(number);
  firebase
    .auth()
    .signInWithPhoneNumber(number, window.recaptchaVerifier)
    .then(function (confirmationResult) {
      //s is in lowercase
      window.confirmationResult = confirmationResult;
      coderesult = confirmationResult;
      console.log(coderesult);
      alert("Message sent");
    })
    .catch(function (error) {
      alert(error.message);
    });
});
