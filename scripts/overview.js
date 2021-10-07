$(document).ready(function() {
  $('#pctable').DataTable();
  $('#laptoptable').DataTable();
  $('#mischardtable').DataTable();
  $('#genpurposetable').DataTable();
  $('#opersystemtable').DataTable();
  $('#utilitytable').DataTable();
  $('#miscsofttable').DataTable();
} );

$(function () {
    $('#pc').change(function () {
      $('#showpc').fadeToggle();
    });
});

$(function () {
    $('#laptop').change(function () {
      $('#showlaptop').fadeToggle();
    });
});

$(function () {
    $('#mischard').change(function () {
      $('#showmischard').fadeToggle();
    });
});

$(function () {
  $('#genpurpose').change(function () {
    $('#showgenpurpose').fadeToggle();
  });
});

$(function () {
  $('#opersystem').change(function () {
    $('#showopersystem').fadeToggle();
  });
});

$(function () {
  $('#utility').change(function () {
    $('#showutility').fadeToggle();
  });
});

$(function () {
  $('#miscsoft').change(function () {
    $('#showmiscsoft').fadeToggle();
  });
});

//
// ─── START PC TABLE FUNCTIONS ───────────────────────────────────────────────────
//

$(document).ready(function() {
  var table = $('#pctable').DataTable();
  $('#pctable tbody').on( 'click', 'tr', function () {
      var data = table.row( this ).data();
      var id = data[0];
      var status = data[1];
      var name = data[5];
      String(id);
      String(status);
      String(name);

      if (status == "A") {
        document.getElementById("pcoptions").style.display="block";
        document.getElementById("pcwithdraw").innerHTML = "Withdraw: #" +id+ " -> " + name;
        document.getElementById("pcwithdraw").style.display="block";
        document.getElementById("xpcwithdraw").style.display="none";
        document.getElementById("pcedit").innerHTML = "Edit: #" +id+ " -> " + name;
      } else {
        document.getElementById("pcoptions").style.display="block";
        document.getElementById("pcwithdraw").style.display="none";
        document.getElementById("xpcwithdraw").style.display="block";
          document.getElementById("xpcwithdraw").innerHTML = "Cannot withdraw " + name + " due to N/A status";
        document.getElementById("pcedit").innerHTML = "Edit: #" +id+ " -> " + name;

        }
  } );
} );

//
// ─── END PC TABLE FUNCTIONS ─────────────────────────────────────────────────────
//

//
// ─── LAPTOP TABLE FUNCTIONS ─────────────────────────────────────────────────────
//
$(document).ready(function() {
  var table = $('#laptoptable').DataTable();
  $('#laptoptable tbody').on( 'click', 'tr', function () {
      var data = table.row( this ).data();
      var id = data[0];
      var status = data[1];
      var name = data[5];
      String(id);
      String(status);
      String(name);

      if (status == "A") {
        document.getElementById("laptopoptions").style.display="block";
        document.getElementById("laptopwithdraw").innerHTML = "Withdraw: #" +id+ " -> " + name;
        document.getElementById("laptopwithdraw").style.display="block";
        document.getElementById("xlaptopwithdraw").style.display="none";
        document.getElementById("laptopedit").innerHTML = "Edit: #" +id+ " -> " + name;
      } else {
        document.getElementById("laptopoptions").style.display="block";
        document.getElementById("laptopwithdraw").style.display="none";
        document.getElementById("xlaptopwithdraw").style.display="block";
          document.getElementById("xlaptopwithdraw").innerHTML = "Cannot withdraw " + name + " due to N/A status";
        document.getElementById("laptopedit").innerHTML = "Edit: #" +id+ " -> " + name;

        }
  } );
} );
//
// ─── END LAPTOP TABLE FUNCTIONS ─────────────────────────────────────────────────
//

// //
// // ─── START MISCHARD TABLE FUNCTIONS ─────────────────────────────────────────────
// //
$(document).ready(function() {
  var table = $('#mischardtable').DataTable();
  $('#mischardtable tbody').on( 'click', 'tr', function () {
      var data = table.row( this ).data();
      var id = data[0];
      var status = data[1];
      var name = data[5];
      String(id);
      String(status);
      String(name);

      if (status == "A") {
        document.getElementById("mischardoptions").style.display="block";
        document.getElementById("mischardwithdraw").innerHTML = "Withdraw: #" +id+ " -> " + name;
        document.getElementById("mischardwithdraw").style.display="block";
        document.getElementById("xmischardwithdraw").style.display="none";
        document.getElementById("mischardedit").innerHTML = "Edit: #" +id+ " -> " + name;
      } else {
        document.getElementById("mischardoptions").style.display="block";
        document.getElementById("mischardwithdraw").style.display="none";
        document.getElementById("xmischardwithdraw").style.display="block";
          document.getElementById("xmischardwithdraw").innerHTML = "Cannot withdraw " + name + " due to N/A status";
        document.getElementById("mischardedit").innerHTML = "Edit: #" +id+ " -> " + name;

        }
  } );
} );
// //
// // ─── END MISCHARD TABLE FUNCTIONS ───────────────────────────────────────────────
// //

// //
// // ─── START GENPURPOSE TABLE FUNCTIONS ───────────────────────────────────────────
// //
$(document).ready(function() {
  var table = $('#genpurposetable').DataTable();
  $('#genpurposetable tbody').on( 'click', 'tr', function () {
      var data = table.row( this ).data();
      var id = data[0];
      var status = data[1];
      var name = data[5];
      String(id);
      String(status);
      String(name);

      if (status == "A") {
        document.getElementById("genpurposeoptions").style.display="block";
        document.getElementById("genpurposewithdraw").innerHTML = "Withdraw: #" +id+ " -> " + name;
        document.getElementById("genpurposewithdraw").style.display="block";
        document.getElementById("xgenpurposewithdraw").style.display="none";
        document.getElementById("genpurposeedit").innerHTML = "Edit: #" +id+ " -> " + name;
      } else {
        document.getElementById("genpurposeoptions").style.display="block";
        document.getElementById("genpurposewithdraw").style.display="none";
        document.getElementById("xgenpurposewithdraw").style.display="block";
          document.getElementById("xgenpurposewithdraw").innerHTML = "Cannot withdraw " + name + " due to N/A status";
        document.getElementById("genpurposeedit").innerHTML = "Edit: #" +id+ " -> " + name;

        }
  } );
} );
// //
// // ─── END GENPURPOSE TABLE FUNCIONS ──────────────────────────────────────────────
// //

// //
// // ─── START OPERSYSTEM TABLE FUNCTIONS ───────────────────────────────────────────
// //
$(document).ready(function() {
  var table = $('#opersystemtable').DataTable();
  $('#opersystemtable tbody').on( 'click', 'tr', function () {
      var data = table.row( this ).data();
      var id = data[0];
      var status = data[1];
      var name = data[5];
      String(id);
      String(status);
      String(name);

      if (status == "A") {
        document.getElementById("opersystemoptions").style.display="block";
        document.getElementById("opersystemwithdraw").innerHTML = "Withdraw: #" +id+ " -> " + name;
        document.getElementById("opersystemwithdraw").style.display="block";
        document.getElementById("xopersystemwithdraw").style.display="none";
        document.getElementById("opersystemedit").innerHTML = "Edit: #" +id+ " -> " + name;
      } else {
        document.getElementById("opersystemoptions").style.display="block";
        document.getElementById("opersystemwithdraw").style.display="none";
        document.getElementById("xopersystemwithdraw").style.display="block";
          document.getElementById("xopersystemwithdraw").innerHTML = "Cannot withdraw " + name + " due to N/A status";
        document.getElementById("opersystemedit").innerHTML = "Edit: #" +id+ " -> " + name;

        }
  } );
} );
// //
// // ─── END OPERSYSTEM TABLE FUNCTIONS ─────────────────────────────────────────────
// //

// //
// // ─── START UTILITY TABLE FUNCTIONS ──────────────────────────────────────────────
// //
$(document).ready(function() {
  var table = $('#utilitytable').DataTable();
  $('#utilitytable tbody').on( 'click', 'tr', function () {
      var data = table.row( this ).data();
      var id = data[0];
      var status = data[1];
      var name = data[5];
      String(id);
      String(status);
      String(name);

      if (status == "A") {
        document.getElementById("utilityoptions").style.display="block";
        document.getElementById("utilitywithdraw").innerHTML = "Withdraw: #" +id+ " -> " + name;
        document.getElementById("utilitywithdraw").style.display="block";
        document.getElementById("xutilitywithdraw").style.display="none";
        document.getElementById("utilityedit").innerHTML = "Edit: #" +id+ " -> " + name;
      } else {
        document.getElementById("utilityoptions").style.display="block";
        document.getElementById("utilitywithdraw").style.display="none";
        document.getElementById("xutilitywithdraw").style.display="block";
          document.getElementById("xutilitywithdraw").innerHTML = "Cannot withdraw " + name + " due to N/A status";
        document.getElementById("utilityedit").innerHTML = "Edit: #" +id+ " -> " + name;

        }
  } );
} );
// //
// // ─── END UTILITY TABLE FUNCTIONS ────────────────────────────────────────────────
// //

// //
// // ─── START MISCSOFT TABLE FUNCTIONS ─────────────────────────────────────────────
// //
$(document).ready(function() {
  var table = $('#miscsofttable').DataTable();
  $('#miscsofttable tbody').on( 'click', 'tr', function () {
      var data = table.row( this ).data();
      var id = data[0];
      var status = data[1];
      var name = data[5];
      String(id);
      String(status);
      String(name);

      if (status == "A") {
        document.getElementById("miscsoftoptions").style.display="block";
        document.getElementById("miscsoftwithdraw").innerHTML = "Withdraw: #" +id+ " -> " + name;
        document.getElementById("miscsoftwithdraw").style.display="block";
        document.getElementById("xmiscsoftwithdraw").style.display="none";
        document.getElementById("miscsoftedit").innerHTML = "Edit: #" +id+ " -> " + name;
      } else {
        document.getElementById("miscsoftoptions").style.display="block";
        document.getElementById("miscsoftwithdraw").style.display="none";
        document.getElementById("xmiscsoftwithdraw").style.display="block";
          document.getElementById("xmiscsoftwithdraw").innerHTML = "Cannot withdraw " + name + " due to N/A status";
        document.getElementById("miscsoftedit").innerHTML = "Edit: #" +id+ " -> " + name;

        }
  } );
} );
// //
// // ─── END MISCSOFT TABLE FUNCTIONS ───────────────────────────────────────────────
// //