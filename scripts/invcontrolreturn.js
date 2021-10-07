$(document).ready(function() {
    $('#pctable').DataTable();
    $('#laptoptable').DataTable();
    $('#mischardtable').DataTable();
    $('#genpurposetable').DataTable();
    $('#opersystemtable').DataTable();
    $('#utilitytable').DataTable();
    $('#miscsofttable').DataTable();
} );

//
// ─── PC TABLE FUNCTIONS ─────────────────────────────────────────────────────────
//

$(document).ready(function() {
    var table = $('#pctable').DataTable();
    $('#pctable tbody').on( 'click', 'tr', function () {
        var data = table.row( this ).data();
        var id = data[0];
        var status = data[1];
        var name = data[4];
        var model = data[5];
        var type = "pc";
        String(status);
        String(id);
        String(name);
        String(model);
        String(type);
        sessionStorage.setItem("id", id);
        sessionStorage.setItem("type", type);

        if (status == "N/A") {
            document.getElementById("returnpc").style.display="block";
            document.getElementById("pcid").innerHTML = "ID: " + id;
            document.getElementById("pcname").innerHTML = "Name: " + name;
            document.getElementById("pcmodel").innerHTML = "Model: " + model;
            document.getElementById("xpc").style.display="none";
        } else {
            document.getElementById("xpc").style.display="block";
            document.getElementById("returnpc").style.display="none";

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
        var name = data[4];
        var model = data[5];
        var type = "laptop";
        String(status);
        String(id);
        String(name);
        String(model);
        String(type);
        sessionStorage.setItem("id", id);
        sessionStorage.setItem("type", type);

        if (status == "N/A") {
            document.getElementById("returnlaptop").style.display="block";
            document.getElementById("laptopid").innerHTML = "ID: " + id;
            document.getElementById("laptopname").innerHTML = "Name: " + name;
            document.getElementById("laptopmodel").innerHTML = "Model: " + model;
            document.getElementById("xlaptop").style.display="none";
        } else {
            document.getElementById("xlaptop").style.display="block";
            document.getElementById("returnlaptop").style.display="none";

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
        var name = data[4];
        var model = data[5];
        var type = "mischard";
        String(status);
        String(id);
        String(name);
        String(model);
        String(type);
        sessionStorage.setItem("id", id);
        sessionStorage.setItem("type", type);

        if (status == "N/A") {
            document.getElementById("returnmischard").style.display="block";
            document.getElementById("mischardid").innerHTML = "ID: " + id;
            document.getElementById("mischardname").innerHTML = "Name: " + name;
            document.getElementById("mischardmodel").innerHTML = "Model: " + model;
            document.getElementById("xmischard").style.display="none";
        } else {
            document.getElementById("xmischard").style.display="block";
            document.getElementById("returnmischard").style.display="none";

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
        var name = data[4];
        var brand = data[3];
        var type = "genpurpose";
        String(status);
        String(id);
        String(name);
        String(brand);
        String(type);
        sessionStorage.setItem("id", id);
        sessionStorage.setItem("type", type);

        if (status == "N/A") {
            document.getElementById("returngenpurpose").style.display="block";
            document.getElementById("genpurposeid").innerHTML = "ID: " + id;
            document.getElementById("genpurposename").innerHTML = "Name: " + name;
            document.getElementById("genpurposebrand").innerHTML = "Brand: " + brand;
            document.getElementById("xgenpurpose").style.display="none";
        } else {
            document.getElementById("xgenpurpose").style.display="block";
            document.getElementById("returngenpurpose").style.display="none";

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
        var name = data[4];
        var brand = data[3];
        var type = "opersystem";
        String(status);
        String(id);
        String(name);
        String(brand);
        String(type);
        sessionStorage.setItem("id", id);
        sessionStorage.setItem("type", type);

        if (status == "N/A") {
            document.getElementById("returnopersystem").style.display="block";
            document.getElementById("opersystemid").innerHTML = "ID: " + id;
            document.getElementById("opersystemname").innerHTML = "Name: " + name;
            document.getElementById("opersystembrand").innerHTML = "Brand: " + brand;
            document.getElementById("xopersystem").style.display="none";
        } else {
            document.getElementById("xopersystem").style.display="block";
            document.getElementById("returnopersystem").style.display="none";

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
        var name = data[4];
        var brand = data[3];
        var type = "utility";
        String(status);
        String(id);
        String(name);
        String(brand);
        String(type);
        sessionStorage.setItem("id", id);
        sessionStorage.setItem("type", type);

        if (status == "N/A") {
            document.getElementById("returnutility").style.display="block";
            document.getElementById("utilityid").innerHTML = "ID: " + id;
            document.getElementById("utilityname").innerHTML = "Name: " + name;
            document.getElementById("utilitybrand").innerHTML = "Brand: " + brand;
            document.getElementById("xutility").style.display="none";
        } else {
            document.getElementById("xutility").style.display="block";
            document.getElementById("returnutility").style.display="none";

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
        var name = data[4];
        var brand = data[3];
        var type = "miscsoft";
        String(status);
        String(id);
        String(name);
        String(brand);
        String(type);
        sessionStorage.setItem("id", id);
        sessionStorage.setItem("type", type);

        if (status == "N/A") {
            document.getElementById("returnmiscsoft").style.display="block";
            document.getElementById("miscsoftid").innerHTML = "ID: " + id;
            document.getElementById("miscsoftname").innerHTML = "Name: " + name;
            document.getElementById("miscsoftbrand").innerHTML = "Brand: " + brand;
            document.getElementById("xmiscsoft").style.display="none";
        } else {
            document.getElementById("xmiscsoft").style.display="block";
            document.getElementById("returnmiscsoft").style.display="none";

        }
    } );
} );
// //
// // ─── END MISCSOFT TABLE FUNCTIONS ───────────────────────────────────────────────
// //

// //
// // ─── START RETURNDATA FUNCTION ────────────────────────────────────────────────
// //

function pcreturn() {
    var x = confirm("Return data?")
    if (x == true) {
        id = sessionStorage.getItem("id");
        type = sessionStorage.getItem("type");
        window.location.href = "http://localhost/inventory_management_system/management/returndata.php?id="+id+"&type="+type;

    } else {

    }
}

function laptopreturn() {
    var x = confirm("Return data?")
    if (x == true) {
        id = sessionStorage.getItem("id");
        type = sessionStorage.getItem("type");
        window.location.href = "http://localhost/inventory_management_system/management/returndata.php?id="+id+"&type="+type;

    } else {

    }
}

function miscsoftreturn() {
    var x = confirm("Return data?")
    if (x == true) {
        id = sessionStorage.getItem("id");
        type = sessionStorage.getItem("type");
        window.location.href = "http://localhost/inventory_management_system/management/returndata.php?id="+id+"&type="+type;

    } else {

    }
}

function genpurposereturn() {
    var x = confirm("Return data?")
    if (x == true) {
        id = sessionStorage.getItem("id");
        type = sessionStorage.getItem("type");
        window.location.href = "http://localhost/inventory_management_system/management/returndata.php?id="+id+"&type="+type;

    } else {

    }
}

function opersystemreturn() {
    var x = confirm("Return data?")
    if (x == true) {
        id = sessionStorage.getItem("id");
        type = sessionStorage.getItem("type");
        window.location.href = "http://localhost/inventory_management_system/management/returndata.php?id="+id+"&type="+type;

    } else {

    }
}

function utilityreturn() {
    var x = confirm("Return data?")
    if (x == true) {
        id = sessionStorage.getItem("id");
        type = sessionStorage.getItem("type");
        window.location.href = "http://localhost/inventory_management_system/management/returndata.php?id="+id+"&type="+type;

    } else {

    }
}

function miscsoftreturn() {
    var x = confirm("Return data?")
    if (x == true) {
        id = sessionStorage.getItem("id");
        type = sessionStorage.getItem("type");
        window.location.href = "http://localhost/inventory_management_system/management/returndata.php?id="+id+"&type="+type;

    } else {

    }
}
//
// ─── END RETURNDATA FUNCTION ──────────────────────────────────────────────────
//