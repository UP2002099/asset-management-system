function loadform() {
    if (document.getElementById("pc").checked) {
      document.getElementById("pcform").style.display="block";
      document.getElementById("laptopform").style.display="none";
      document.getElementById("miscform").style.display="none";
    } else if (document.getElementById("laptop").checked) {
      document.getElementById("pcform").style.display="none";
      document.getElementById("laptopform").style.display="block";
      document.getElementById("miscform").style.display="none";
    } else if (document.getElementById("misc").checked) {
      document.getElementById("pcform").style.display="none";
      document.getElementById("laptopform").style.display="none";
      document.getElementById("miscform").style.display="block";
  
    }
}

$(document).ready(function(){
  $('#brand').change(function () {
      if ($(this).val() == "other") {
          $('#inputother').css("display","block");
      } else {
          $('#inputother').css("display","none");
      }
  })
})