$("btnyes").click(function () {
  let email = "#email".val();
  if (email == "") {
    alert("Email Wajib disini!!");
  } else {
    $("#modalkon").modal("show");
  }
});
$("#btnyes").click(function () {
  $("#formkorespon").attr("action", "KorespondenCtrl.php");
  $("#formkorespon").submit();
});
$("#btnreset").click(function () {
  alert("hallooo");
});
