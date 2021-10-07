// $(document).ready(function() {
//     $('#pctable').DataTable();
//     $('#laptoptable').DataTable();
// } );

// //
// // ─── PC TABLE FUNCTIONS ─────────────────────────────────────────────────────────
// //

// $(document).ready(function() {
//     var table = $('#pctable').DataTable();
//     $('#pctable tbody').on( 'click', 'tr', function () {
//         var data = table.row( this ).data();
//         var id = data[0];
//         var name = data[4];
//         var model = data[5];
//         var type = "pc";
//         String(id);
//         String(name);
//         String(model);
//         String(type);
//         sessionStorage.setItem("id", id);
//         sessionStorage.setItem("type", type);

//         document.getElementById("linkpc").style.display="block";
//         document.getElementById("rawpcid").value = id;
//         document.getElementById("pcid").innerHTML = "ID: " + id;
//         document.getElementById("pcname").innerHTML = "Name: " + name;
//         document.getElementById("pcmodel").innerHTML = "Model: " + model;
//     } );
// } );

// //
// // ─── END PC TABLE FUNCTIONS ─────────────────────────────────────────────────────
// //

// //
// // ─── LAPTOP TABLE FUNCTIONS ─────────────────────────────────────────────────────
// //
// $(document).ready(function() {
//     var table = $('#laptoptable').DataTable();
//     $('#laptoptable tbody').on( 'click', 'tr', function () {
//         var data = table.row( this ).data();
//         var id = data[0];
//         var name = data[4];
//         var model = data[5];
//         var type = "laptop";
//         String(id);
//         String(name);
//         String(model);
//         String(type);
//         sessionStorage.setItem("id", id);
//         sessionStorage.setItem("type", type);

//         document.getElementById("linklap").style.display="block";
//         document.getElementById("lapid").innerHTML = "ID: " + id;
//         document.getElementById("lapname").innerHTML = "Name: " + name;
//         document.getElementById("lapmodel").innerHTML = "Model: " + model;
//     } );
// } );
// //
// // ─── END LAPTOP TABLE FUNCTIONS ─────────────────────────────────────────────────
// //


// // //
// // // ─── START WITHDRAWDATA FUNCTION ────────────────────────────────────────────────
// // //
// function pcselect() {
//     var x = confirm("Please confirm your selection")
//     if (x == true) {
//         id = sessionStorage.getItem("id");
//         type = sessionStorage.getItem("type");
//         window.location.href = "http://localhost/inventory_management_system/recordkeep/addhardmiscselect.php?id="+id+"&type="+type;

//     } else {

//     }
// }

// function lapselect() {
//     var x = confirm("Please confirm your selection")
//     if (x == true) {
//         id = sessionStorage.getItem("id");
//         type = sessionStorage.getItem("type");
//         window.location.href = "http://localhost/inventory_management_system/recordkeep/addhardmiscselect.php?id="+id+"&type="+type;

//     } else {

//     }
// }
// //
// // ─── END WITHDRAWDATA FUNCTION ──────────────────────────────────────────────────
// //