$(".delNum-icon").click(function () {
  $("#initialLog").val("");
});

$("#initialLog").keyup(function () {
  $(".confirm-button").attr("disabled", "disabled");
  $telVal = $("#initialLog").val();
  if ($telVal.length <= 1 && $telVal !== "(") {
    $("#initialLog").val("(" + $telVal);
  }
  if ($telVal.length == 3 && $telVal[3] !== ")") {
    $("#initialLog").val($telVal + ") ");
  }
  if ($telVal.length == 4 && $telVal[3] !== " ") {
    $("#initialLog").val($telVal + " ");
  }
  if ($telVal.length == 4 && $telVal[3] !== " ") {
    $("#initialLog").val($telVal + " ");
  }
  if ($telVal.length == 7 && $telVal[6] !== "-") {
    $("#initialLog").val($telVal + "-");
  }
  if ($telVal.length == 10 && $telVal[9] !== "-") {
    $("#initialLog").val($telVal + "-");
  }

  if ($telVal.length == 13) {
    if (
      isNaN($telVal[1]) ||
      isNaN($telVal[2]) ||
      isNaN($telVal[5]) ||
      isNaN($telVal[6]) ||
      isNaN($telVal[8]) ||
      isNaN($telVal[9]) ||
      isNaN($telVal[11]) ||
      isNaN($telVal[12])
    ) {
      $(".number-error").html("*Տվյալները անվավեր են");
      $(".tel-err").css("border", "1px solid red");
      $(".tel-err-title").css("color", "red");
    } else {
      $(".confirm-button").attr("disabled", false);
      $(".number-error").html("");
      $(".tel-err").css("border", "1px solid #6e6b6b");
      $(".tel-err-title").css("color", "black");

      $(".checked-icon").animate({ opacity: "1" }, 300);
      $(".delNum-icon").css("display", "none");
    }
  } else {
    $(".checked-icon").animate({ opacity: "0" }, 300);
  }
});
$(".confirm-button").on("click", function (e) {
  e.preventDefault();

  $telVal = $("#initialLog").val();
  console.log($telVal);
  $.ajax({
    type: "post",
    url: "dataPasswordReset.php",
    data: {
      telVal: $telVal,
    },
    success: function (result) {
      if (result == "noPhone") {
        $(".number-error").html("Նշված հեռախոսահամարով տվյալներ չկան:");
      } else {
        setTimeout(function () {
          window.location.href = "sendCodePassReset.php";
        }, 500);
      }
      console.log(result);
    },
  });
});
// test
