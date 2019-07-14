
function aff() {
  if (cont % 2 == 0) {
    $("#tt").addClass("inv");
    $(".le1").addClass("inv2");
    $(".party").addClass("inv2");
  } else {
    $("#tt").removeClass("inv");
    $(".le1").removeClass("inv2");
    $(".party").removeClass("inv2");
  }
  
}
