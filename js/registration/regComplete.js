$(".confirm-button").click(function () {
  $name = $("#name").val();
  $surName = $("#surName").val();
  $address = $("#address").val();
  $email = $("#email").val();
  if (
    $email.match(
      /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/
    ) ||
    $email == ""
  ) {
    $.ajax({
      type: "post",
      url: "dataRegComplete.php",
      data: {
        name: $name,
        surName: $surName,
        address: $address,
        email: $email,
      },
      success: function (result) {
        console.log(result);
        $(".email-err-title").css("color", "black");
        $(".email-err").css("border", "1px solid #6e6b6b");
        $(".email-err-show").html("");
        jQuery.noConflict(); ///!!!!!!!!!!!!!!!!!!!!!!!!!
        $("#successComplete").modal("show");
        $("#name").val("");
        $("#surName").val("");
        $("#address").val("");
        $("#email").val("");
      },
    });
  } else {
    console.log("wrong email");
    $(".email-err").css("border", "1px solid red");
    $(".email-err-title").css("color", "red");
    $(".email-err-show").html("Անվավեր էլ.հասցե");
  }
});

// validate fields
$("input").keyup(function () {
  $name = false;
  $surName = false;
  $address = false;
  $email = false;

  if ($("#name").val().length > 2) {
    $name = true;
  }
  if ($("#surName").val().length > 3) {
    $surName = true;
  }

  if ($("#address").val().length > 6) {
    $address = true;
  }
  console.log($email);
  if ($name && $surName && $address) {
    $(".confirm-button").attr("disabled", false);
  } else {
    $(".confirm-button").attr("disabled", "disabled");
  }
});
