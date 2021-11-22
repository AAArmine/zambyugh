$("#initialLog").keyup(function () {
  $telVal = $("#initialLog").val();
  console.log($telVal.length);
  if ($telVal.length <= 1 && $telVal !== "(") {
    console.log("kuku");
    $("#initialLog").val("(" + $telVal);
  }
  if ($telVal.length == 3 && $telVal[3] !== "(") {
    $("#initialLog").val($telVal + ")");
  }
  if ($telVal.length == 3 && $telVal[3] !== "(") {
    $("#initialLog").val($telVal + ")");
  }
});
// $("#initialLog").focus(function () {
//   alert("huu");
// });
