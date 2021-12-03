$(".confirm-button").click(function () {
  $name = $("#name").val();
  $surName = $("#surName").val();
  $addressCity = $("#addressCity").val();
  $addressStreet = $("#addressStreet").val();
  $addressHome = $("#addressHome").val();
  // not mandatory
  $addressBuilding = $("#addressBuilding").val();
  $addressEntrance = $("#addressEntrance").val();
  $addressFloor = $("#addressFloor").val();
  $email = $("#email").val();
  // here
  if (
    $email.match(
      /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/
    ) ||
    $email == ""
  ) {
    // if($addressHome)
    // $.ajax({
    //   type: "post",
    //   url: "dataRegComplete.php",
    //   data: {
    //     name: $name,
    //     surName: $surName,
    //     address: $address,
    //     email: $email,
    //   },
    //   success: function (result) {
    //     $(".email-err-title").css("color", "black");
    //     $(".email-err").css("border", "1px solid #6e6b6b");
    //     $(".email-err-show").html("");
    //     jQuery.noConflict(); ///!!!!!!!!!!!!!!!!!!!!!!!!!
    //     $("#successComplete").modal("show");
    //     $("#name").val("");
    //     $("#surName").val("");
    //     $("#address").val("");
    //     $("#email").val("");
    //   },
    // });
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
  // $email = false;

  $addressCity = false;
  $addressStreet = false;
  $addressHome = false;

  // values
  $addressHomeVal = $("#addressHome").val();

  $addressBuilding = $("#addressBuilding").val();
  $addressEntrance = $("#addressEntrance").val();
  $addressFloor = $("#addressFloor").val();

  if ($("#name").val().length > 2) {
    $name = true;
  }
  if ($("#surName").val().length > 2) {
    $surName = true;
  }
  if ($("#addressCity").val().length > 2) {
    $addressCity = true;
  }
  if ($("#addressStreet").val().length > 2) {
    $addressStreet = true;
  }
  if ($addressHomeVal.length > 0) {
    if (!isNaN($addressHomeVal)) {
      $(".home-err").css("border", "1px solid #999999");
      $(".home-err-title").css("color", "black");
      $(".home-err-show").html("");
      $addressHome = true;
    } else {
      // console.log("(home)Անհրաժեշտ է մուտքագրել թիվ");
      $(".home-err").css("border", "1px solid red");
      $(".home-err-title").css("color", "red");
      $(".home-err-show").html("Անհրաժեշտ է մուտքագրել թիվ");
    }
  }
  if (!isNaN($addressBuilding) || $addressBuilding == "") {
    $(".building-err").css("border", "1px solid  #999999");
    $(".building-err-title").css("color", "black");
    $(".building-err-show").html("");
  } else {
    $(".building-err").css("border", "1px solid red");
    $(".building-err-title").css("color", "red");
    $(".building-err-show").html("Անհրաժեշտ է մուտքագրել թիվ");
  }

  if (!isNaN($addressEntrance) || $addressEntrance == "") {
    $(".entrance-err").css("border", "1px solid #999999");
    $(".entrance-err-title").css("color", "black");
    $(".entrance-err-show").html("");
  } else {
    $(".entrance-err").css("border", "1px solid red");
    $(".entrance-err-title").css("color", "red");
    $(".entrance-err-show").html("Անհրաժեշտ է մուտքագրել թիվ");
  }

  if (!isNaN($addressFloor) || $addressFloor == "") {
    $(".floor-err").css("border", "1px solid #999999");
    $(".floor-err-title").css("color", "black");
    $(".floor-err-show").html("");
  } else {
    $(".floor-err").css("border", "1px solid red");
    $(".floor-err-title").css("color", "red");
    $(".floor-err-show").html("Անհրաժեշտ է մուտքագրել թիվ");
  }
  // if ($(".email-err-show").html().toString().replace(/ /g, "") == "") {
  //   console.log("lurh");
  // }

  if ($name && $surName && $addressCity && $addressStreet && $addressHome) {
    $(".confirm-button").attr("disabled", false);
  } else {
    $(".confirm-button").attr("disabled", "disabled");
  }
});
