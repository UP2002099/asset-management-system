$(document).ready(function () {
  $('#pctable').DataTable();
  $('#laptoptable').DataTable();
  $('#mischardtable').DataTable();
  $('#genpurposetable').DataTable();
  $('#opersystemtable').DataTable();
  $('#utilitytable').DataTable();
  $('#miscsofttable').DataTable();
});

function loaddata() {
  if (document.getElementById("pc").checked) {
    document.getElementById("pcdata").style.display = "block";
    document.getElementById("laptopdata").style.display = "none";
    document.getElementById("mischarddata").style.display = "none";
    document.getElementById("genpurposedata").style.display = "none";
    document.getElementById("opersystemdata").style.display = "none";
    document.getElementById("utilitydata").style.display = "none";
    document.getElementById("miscsoftdata").style.display = "none";
  } else if (document.getElementById("laptop").checked) {
    document.getElementById("pcdata").style.display = "none";
    document.getElementById("laptopdata").style.display = "block";
    document.getElementById("mischarddata").style.display = "none";
    document.getElementById("genpurposedata").style.display = "none";
    document.getElementById("opersystemdata").style.display = "none";
    document.getElementById("utilitydata").style.display = "none";
    document.getElementById("miscsoftdata").style.display = "none";
  } else if (document.getElementById("mischard").checked) {
    document.getElementById("pcdata").style.display = "none";
    document.getElementById("laptopdata").style.display = "none";
    document.getElementById("mischarddata").style.display = "block";
    document.getElementById("genpurposedata").style.display = "none";
    document.getElementById("opersystemdata").style.display = "none";
    document.getElementById("utilitydata").style.display = "none";
    document.getElementById("miscsoftdata").style.display = "none";
  } else if (document.getElementById("genpurpose").checked) {
    document.getElementById("pcdata").style.display = "none";
    document.getElementById("laptopdata").style.display = "none";
    document.getElementById("mischarddata").style.display = "none";
    document.getElementById("genpurposedata").style.display = "block";
    document.getElementById("opersystemdata").style.display = "none";
    document.getElementById("utilitydata").style.display = "none";
    document.getElementById("miscsoftdata").style.display = "none";
  } else if (document.getElementById("opersystem").checked) {
    document.getElementById("pcdata").style.display = "none";
    document.getElementById("laptopdata").style.display = "none";
    document.getElementById("mischarddata").style.display = "none";
    document.getElementById("genpurposedata").style.display = "none";
    document.getElementById("opersystemdata").style.display = "block";
    document.getElementById("utilitydata").style.display = "none";
    document.getElementById("miscsoftdata").style.display = "none";
  } else if (document.getElementById("utility").checked) {
    document.getElementById("pcdata").style.display = "none";
    document.getElementById("laptopdata").style.display = "none";
    document.getElementById("mischarddata").style.display = "none";
    document.getElementById("genpurposedata").style.display = "none";
    document.getElementById("opersystemdata").style.display = "none";
    document.getElementById("utilitydata").style.display = "block";
    document.getElementById("miscsoftdata").style.display = "none";
  } else if (document.getElementById("miscsoft").checked) {
    document.getElementById("pcdata").style.display = "none";
    document.getElementById("laptopdata").style.display = "none";
    document.getElementById("mischarddata").style.display = "none";
    document.getElementById("genpurposedata").style.display = "none";
    document.getElementById("opersystemdata").style.display = "none";
    document.getElementById("utilitydata").style.display = "none";
    document.getElementById("miscsoftdata").style.display = "block";

  }
}

var table;
$(document).ready(function () {
    table = $('#pctable').DataTable();
    table.MakeCellsEditable({
        "onUpdate": pcupdate,
        "inputCss":'form-control',
        "columns": [3,4,5,6,7,8,9,10,11,12,13,14,15],
        "allowNulls": {
            "errorClass": 'error'
        },
        "confirmationButton": { // could also be true
            "confirmCss": 'btn btn-outline-success',
            "cancelCss": 'btn btn-outline-warning'
        },
        "inputTypes": [
            {
                "column": 3,
                "type": "text",
                "options": null,
            },
            {
                "column": 4, 
                "type": "list",
                "options":[
                    { "value": "Acer", "display": "Acer" },
                    { "value": "Apple", "display": "Apple" },
                    { "value": "Asus", "display": "Asus" },
                    { "value": "Dell", "display": "Dell" },
                    { "value": "HP", "display": "HP" },
                    { "value": "Lenovo", "display": "Lenovo" },
                    { "value": "MSI", "display": "MSI" },
                    { "value": "Other", "display": "Other" },
                ]
            },
            {
                "column": 5,
                "type": "text",
                "options": null,
            },
            {
                "column": 6,
                "type": "text",
                "options": null,
            },
            {
                "column": 7, 
                "type": "list",
                "options":[
                    { "value": "1", "display": "1" },
                    { "value": "2", "display": "2" },
                    { "value": "3", "display": "3" },
                    { "value": "4", "display": "4" },
                    { "value": "5", "display": "5" },
                    { "value": "Other", "display": "Other" },
                ]
            },
            {
               "column": 8, 
               "type": "list",
               "options":[
                    { "value": "Intel", "display": "Intel" },
                    { "value": "AMD", "display": "AMD" },
                    { "value": "Other", "display": "Other" },
                ]
            },
            {
                "column": 9,
                "type": "text",
                "options": null,
            },
            {
                "column": 10, 
                "type": "list",
                "options":[
                    { "value": "Nvidia", "display": "Nvidia" },
                    { "value": "Intel", "display": "Intel" },
                    { "value": "AMD", "display": "AMD" },
                    { "value": "Other", "display": "Other" },
                ]
            },
            {
                "column": 11,
                "type": "text",
                "options": null,
            },
            {
                "column": 12, 
                "type": "list",
                "options":[
                    { "value": "HDD", "display": "HDD" },
                    { "value": "SSD", "display": "SSD" },
                ]
            },
            {
                "column": 13,
                "type": "text",
                "options": null,
            },
            {
                "column": 14,
                "type": "text",
                "options": null,
            },
            {
                "column": 15,
                "type": "text",
                "options": null,
            }
            
        ]
    });

});

var table;
$(document).ready(function () {
    table = $('#laptoptable').DataTable();
    table.MakeCellsEditable({
        "onUpdate": laptopupdate,
        "inputCss":'form-control',
        "columns": [3,4,5,6,7,8,9,10,11,12,13,14,15,16,17],
        "allowNulls": {
            "errorClass": 'error'
        },
        "confirmationButton": { // could also be true
            "confirmCss": 'btn btn-outline-success',
            "cancelCss": 'btn btn-outline-warning'
        },
        "inputTypes": [
            {
                "column": 3,
                "type": "text",
                "options": null,
            },
            {
                "column": 4, 
                "type": "list",
                "options":[
                    { "value": "Acer", "display": "Acer" },
                    { "value": "Apple", "display": "Apple" },
                    { "value": "Asus", "display": "Asus" },
                    { "value": "Dell", "display": "Dell" },
                    { "value": "HP", "display": "HP" },
                    { "value": "Lenovo", "display": "Lenovo" },
                    { "value": "MSI", "display": "MSI" },
                    { "value": "Other", "display": "Other" },
                ]
            },
            {
                "column": 5,
                "type": "text",
                "options": null,
            },
            {
                "column": 6,
                "type": "text",
                "options": null,
            },
            {
                "column": 7, 
                "type": "list",
                "options":[
                    { "value": "1", "display": "1" },
                    { "value": "2", "display": "2" },
                    { "value": "3", "display": "3" },
                    { "value": "4", "display": "4" },
                    { "value": "5", "display": "5" },
                    { "value": "Other", "display": "Other" },
                ]
            },
            {
              //screensize
                "column": 8, 
                "type": "list",
                "options":[
                    { "value": "12.5", "display": "12.5" },
                    { "value": "13.3", "display": "13.3" },
                    { "value": "14", "display": "14.0" },
                    { "value": "15.6", "display": "15.6" },
                    { "value": "17.3", "display": "17.3" },
                    { "value": "Other", "display": "Other" },
                ]
            },
            {
              //screenres
                "column": 9, 
                "type": "list",
                "options":[
                    { "value": "1280 x 720", "display": "1280 x 720" },
                    { "value": "1366 x 768", "display": "1366 x 768" },
                    { "value": "1920 x 1080", "display": "1920 x 1080" },
                    { "value": "2560 x 1440", "display": "2560 x 1440" },
                    { "value": "3840 x 2160", "display": "3840 x 2160" },
                    { "value": "Other", "display": "Other" },
                ]
            },
            {
               "column": 10, 
               "type": "list",
               "options":[
                    { "value": "Intel", "display": "Intel" },
                    { "value": "AMD", "display": "AMD" },
                    { "value": "Other", "display": "Other" },
                ]
            },
            {
                "column": 11,
                "type": "text",
                "options": null,
            },
            {
                "column": 12, 
                "type": "list",
                "options":[
                    { "value": "Nvidia", "display": "Nvidia" },
                    { "value": "Intel", "display": "Intel" },
                    { "value": "AMD", "display": "AMD" },
                    { "value": "Other", "display": "Other" },
                ]
            },
            {
                "column": 13,
                "type": "text",
                "options": null,
            },
            {
                "column": 14, 
                "type": "list",
                "options":[
                    { "value": "HDD", "display": "HDD" },
                    { "value": "SSD", "display": "SSD" },
                ]
            },
            {
                "column": 15,
                "type": "text",
                "options": null,
            },
            {
                "column": 16,
                "type": "text",
                "options": null,
            },
            {
                "column": 17,
                "type": "text",
                "options": null,
            }
            
        ]
    });

});

var table;
$(document).ready(function () {
    table = $('#mischardtable').DataTable();
    table.MakeCellsEditable({
        "onUpdate": mischardupdate,
        "inputCss":'form-control',
        "columns": [3,4,5,6,7,8,9],
        "allowNulls": {
            "errorClass": 'error'
        },
        "confirmationButton": { // could also be true
            "confirmCss": 'btn btn-outline-success',
            "cancelCss": 'btn btn-outline-warning'
        },
        "inputTypes": [
            {
                "column": 3,
                "type": "text",
                "options": null,
            },
            {
                "column": 4, 
                "type": "list",
                "options":[
                    { "value": "Corsair", "display": "Corsair" },
                    { "value": "Logitech", "display": "Logitech" },
                    { "value": "Microsoft", "display": "Microsoft" },
                    { "value": "laptopaccessory", "display": "Laptop-bundled Accessory" },
                    { "value": "pcaccessory", "display": "PC-bundled Accessory" },
                    { "value": "Other", "display": "Other" },
                ]
            },
            {
                "column": 5,
                "type": "text",
                "options": null,
            },
            {
                "column": 6,
                "type": "text",
                "options": null,
            },
            {
                "column": 7, 
                "type": "list",
                "options":[
                    { "value": "Mouse", "display": "Mouse" },
                    { "value": "Keyboard", "display": "Keyboard" },
                    { "value": "Monitor", "display": "Monitor" },
                    { "value": "Other", "display": "Other" },
                ]
            },
            {
                "column": 8, 
                "type": "list",
                "options":[
                    { "value": "1", "display": "1" },
                    { "value": "2", "display": "2" },
                    { "value": "3", "display": "3" },
                    { "value": "4", "display": "4" },
                    { "value": "5", "display": "5" },
                    { "value": "Other", "display": "Other" },
                ]
            },
            {
                "column": 9,
                "type": "text",
                "options": null,
            },
            
        ]
    });

});

var table;
$(document).ready(function () {
    table = $('#genpurposetable').DataTable();
    table.MakeCellsEditable({
        "onUpdate": genpurposeupdate,
        "inputCss":'form-control',
        "columns": [3,4,5,6,7],
        "allowNulls": {
            "errorClass": 'error'
        },
        "confirmationButton": { // could also be true
            "confirmCss": 'btn btn-outline-success',
            "cancelCss": 'btn btn-outline-warning'
        },
        "inputTypes": [
            {
                "column": 3,
                "type": "text",
                "options": null,
            },
            {
                "column": 4, 
                "type": "list",
                "options":[
                    { "value": "Autodesk", "display": "Autodesk" },
                    { "value": "Adobe", "display": "Adobe" },
                    { "value": "Apple", "display": "Apple" },
                    { "value": "Oracle", "display": "Oracle" },
                    { "value": "IBM", "display": "IBM" },
                    { "value": "Microsoft", "display": "Microsoft" },
                    { "value": "VMWare", "display": "VMWare" },
                    { "value": "Kaspersky", "display": "Kaspersky" },
                    { "value": "RARlab", "display": "Win Rar" },
                    { "value": "Other", "display": "Other" },
                ]
            },
            {
                "column": 5,
                "type": "text",
                "options": null,
            },
            {
                "column": 6, 
                "type": "list",
                "options":[
                    { "value": "0.5", "display": "0.5" },
                    { "value": "1", "display": "1" },
                    { "value": "2", "display": "2" },
                    { "value": "3", "display": "3" },
                    { "value": "4", "display": "4" },
                    { "value": "Other", "display": "Other" },
                ]
            },
            {
                "column": 7,
                "type": "text",
                "options": null,
            },
            
        ]
    });

});

var table;
$(document).ready(function () {
    table = $('#opersystemtable').DataTable();
    table.MakeCellsEditable({
        "onUpdate": opersystemupdate,
        "inputCss":'form-control',
        "columns": [3,4,5,6,7],
        "allowNulls": {
            "errorClass": 'error'
        },
        "confirmationButton": { // could also be true
            "confirmCss": 'btn btn-outline-success',
            "cancelCss": 'btn btn-outline-warning'
        },
        "inputTypes": [
            {
                "column": 3,
                "type": "text",
                "options": null,
            },
            {
                "column": 4, 
                "type": "list",
                "options":[
                    { "value": "Autodesk", "display": "Autodesk" },
                    { "value": "Adobe", "display": "Adobe" },
                    { "value": "Apple", "display": "Apple" },
                    { "value": "Oracle", "display": "Oracle" },
                    { "value": "IBM", "display": "IBM" },
                    { "value": "Microsoft", "display": "Microsoft" },
                    { "value": "VMWare", "display": "VMWare" },
                    { "value": "Kaspersky", "display": "Kaspersky" },
                    { "value": "RARlab", "display": "Win Rar" },
                    { "value": "Other", "display": "Other" },
                ]
            },
            {
                "column": 5,
                "type": "text",
                "options": null,
            },
            {
                "column": 6, 
                "type": "list",
                "options":[
                    { "value": "0.5", "display": "0.5" },
                    { "value": "1", "display": "1" },
                    { "value": "2", "display": "2" },
                    { "value": "3", "display": "3" },
                    { "value": "4", "display": "4" },
                    { "value": "Other", "display": "Other" },
                ]
            },
            {
                "column": 7,
                "type": "text",
                "options": null,
            },
            
        ]
    });

});

var table;
$(document).ready(function () {
    table = $('#utilitytable').DataTable();
    table.MakeCellsEditable({
        "onUpdate": utilityupdate,
        "inputCss":'form-control',
        "columns": [3,4,5,6,7],
        "allowNulls": {
            "errorClass": 'error'
        },
        "confirmationButton": { // could also be true
            "confirmCss": 'btn btn-outline-success',
            "cancelCss": 'btn btn-outline-warning'
        },
        "inputTypes": [
            {
                "column": 3,
                "type": "text",
                "options": null,
            },
            {
                "column": 4, 
                "type": "list",
                "options":[
                    { "value": "Autodesk", "display": "Autodesk" },
                    { "value": "Adobe", "display": "Adobe" },
                    { "value": "Apple", "display": "Apple" },
                    { "value": "Oracle", "display": "Oracle" },
                    { "value": "IBM", "display": "IBM" },
                    { "value": "Microsoft", "display": "Microsoft" },
                    { "value": "VMWare", "display": "VMWare" },
                    { "value": "Kaspersky", "display": "Kaspersky" },
                    { "value": "RARlab", "display": "Win Rar" },
                    { "value": "Other", "display": "Other" },
                ]
            },
            {
                "column": 5,
                "type": "text",
                "options": null,
            },
            {
                "column": 6, 
                "type": "list",
                "options":[
                    { "value": "0.5", "display": "0.5" },
                    { "value": "1", "display": "1" },
                    { "value": "2", "display": "2" },
                    { "value": "3", "display": "3" },
                    { "value": "4", "display": "4" },
                    { "value": "Other", "display": "Other" },
                ]
            },
            {
                "column": 7,
                "type": "text",
                "options": null,
            },
            
        ]
    });

});

var table;
$(document).ready(function () {
    table = $('#miscsofttable').DataTable();
    table.MakeCellsEditable({
        "onUpdate": miscsoftupdate,
        "inputCss":'form-control',
        "columns": [3,4,5,6,7],
        "allowNulls": {
            "errorClass": 'error'
        },
        "confirmationButton": { // could also be true
            "confirmCss": 'btn btn-outline-success',
            "cancelCss": 'btn btn-outline-warning'
        },
        "inputTypes": [
            {
                "column": 3,
                "type": "text",
                "options": null,
            },
            {
                "column": 4, 
                "type": "list",
                "options":[
                    { "value": "Autodesk", "display": "Autodesk" },
                    { "value": "Adobe", "display": "Adobe" },
                    { "value": "Apple", "display": "Apple" },
                    { "value": "Oracle", "display": "Oracle" },
                    { "value": "IBM", "display": "IBM" },
                    { "value": "Microsoft", "display": "Microsoft" },
                    { "value": "VMWare", "display": "VMWare" },
                    { "value": "Kaspersky", "display": "Kaspersky" },
                    { "value": "RARlab", "display": "Win Rar" },
                    { "value": "Other", "display": "Other" },
                ]
            },
            {
                "column": 5,
                "type": "text",
                "options": null,
            },
            {
                "column": 6, 
                "type": "list",
                "options":[
                    { "value": "0.5", "display": "0.5" },
                    { "value": "1", "display": "1" },
                    { "value": "2", "display": "2" },
                    { "value": "3", "display": "3" },
                    { "value": "4", "display": "4" },
                    { "value": "Other", "display": "Other" },
                ]
            },
            {
                "column": 7,
                "type": "text",
                "options": null,
            },
            
        ]
    });

});

function pcupdate (updatedCell, updatedRow, oldValue) {
  var x = confirm("Save changes to PC Database?")
  if (x == true) {
    var row = updatedRow.data();
    id = row[0];
    price = row[3];
    brand = row[4];
    name = row[5];
    model = row[6];
    warranty = row[7];
    cpu_make = row[8];
    cpu_model = row[9];
    gpu_make = row[10];
    gpu_model = row[11];
    storage_type = row[12];
    storage_cap = row[13];
    ram_size = row[14];
    ram_speed = row[15];

    window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
    "&price="+price+"&brand="+brand+"&name="+name+"&model="+model+"&warranty="+warranty+"&cpu_make="+cpu_make+
    "&cpu_model="+cpu_model+"&gpu_make="+gpu_make+"&gpu_model="+gpu_model+"&storage_type="+storage_type+
    "&storage_cap="+storage_cap+"&ram_size="+ram_size+"&ram_speed="+ram_speed+"&type=pc";

  } else {
    window.location.href=window.location.href;
  }

    console.log(id);
    console.log("The new value for the cell is: " + updatedCell.data());
    console.log("The old value for that cell was: " + oldValue);
    console.log("The values for each cell in that row are: " + updatedRow.data());
       
}

function laptopupdate (updatedCell, updatedRow, oldValue) {
  var x = confirm("Save changes to Laptop Database?")
  if (x == true) {
    var row = updatedRow.data();
    id = row[0];
    price = row[3];
    brand = row[4];
    name = row[5];
    model = row[6];
    warranty = row[7];
    screensize = row[8];
    screenres = row[9];
    cpu_make = row[10];
    cpu_model = row[11];
    gpu_make = row[12];
    gpu_model = row[13];
    storage_type = row[14];
    storage_cap = row[15];
    ram_size = row[16];
    ram_speed = row[17];

    window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
    "&price="+price+"&brand="+brand+"&name="+name+"&model="+model+"&warranty="+warranty+"&screensize="+screensize+
    "&screenres="+screenres+"&cpu_make="+cpu_make+"&cpu_model="+cpu_model+"&gpu_make="+gpu_make+
    "&gpu_model="+gpu_model+"&storage_type="+storage_type+"&storage_cap="+storage_cap+
    "&ram_size="+ram_size+"&ram_speed="+ram_speed+"&type=laptop";

  } else {
    window.location.href=window.location.href;
  }

    console.log(id);
    console.log("The new value for the cell is: " + updatedCell.data());
    console.log("The old value for that cell was: " + oldValue);
    console.log("The values for each cell in that row are: " + updatedRow.data());
       
}

//dont forget to change &type=_____ for every copied function

function mischardupdate (updatedCell, updatedRow, oldValue) {
  var x = confirm("Save changes to Miscellaneous Database?")
  if (x == true) {
    var row = updatedRow.data();
    id = row[0];
    price = row[3];
    brand = row[4];
    name = row[5];
    model = row[6];
    warranty = row[7];
    serialnum = row[8];

    window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
    "&price="+price+"&brand="+brand+"&name="+name+"&model="+model+
    "&warranty="+warranty+"&serialnum="+serial+"&type=mischard";

  } else {
    window.location.href=window.location.href;
  }

    console.log(id);
    console.log("The new value for the cell is: " + updatedCell.data());
    console.log("The old value for that cell was: " + oldValue);
    console.log("The values for each cell in that row are: " + updatedRow.data());
       
}

function genpurposeupdate (updatedCell, updatedRow, oldValue) {
  var x = confirm("Save changes to General Purpose Database?")
  if (x == true) {
    var row = updatedRow.data();
    id = row[0];
    price = row[3];
    brand = row[4];
    name = row[5];
    licenseduration = row[6];
    licensenum = row[7];

    window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
    "&price="+price+"&brand="+brand+"&name="+name+"&licenseduration="+licenseduration+
    "&licensenum="+licensenum+"&type=genpurpose";

  } else {
    window.location.href=window.location.href;
  }

    console.log(id);
    console.log("The new value for the cell is: " + updatedCell.data());
    console.log("The old value for that cell was: " + oldValue);
    console.log("The values for each cell in that row are: " + updatedRow.data());
       
}

function opersystemupdate (updatedCell, updatedRow, oldValue) {
  var x = confirm("Save changes to Operating System Database?")
  if (x == true) {
    var row = updatedRow.data();
    id = row[0];
    price = row[3];
    brand = row[4];
    name = row[5];
    licenseduration = row[6];
    licensenum = row[7];

    window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
    "&price="+price+"&brand="+brand+"&name="+name+"&licenseduration="+licenseduration+
    "&licensenum="+licensenum+"&type=opersystem";

  } else {
    window.location.href=window.location.href;
  }

    console.log(id);
    console.log("The new value for the cell is: " + updatedCell.data());
    console.log("The old value for that cell was: " + oldValue);
    console.log("The values for each cell in that row are: " + updatedRow.data());
       
}

function utilityupdate (updatedCell, updatedRow, oldValue) {
  var x = confirm("Save changes to Utility Database?")
  if (x == true) {
    var row = updatedRow.data();
    id = row[0];
    price = row[3];
    brand = row[4];
    name = row[5];
    licenseduration = row[6];
    licensenum = row[7];

    window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
    "&price="+price+"&brand="+brand+"&name="+name+"&licenseduration="+licenseduration+
    "&licensenum="+licensenum+"&type=utility";

  } else {
    window.location.href=window.location.href;
  }

    console.log(id);
    console.log("The new value for the cell is: " + updatedCell.data());
    console.log("The old value for that cell was: " + oldValue);
    console.log("The values for each cell in that row are: " + updatedRow.data());
       
}

function miscsoftupdate (updatedCell, updatedRow, oldValue) {
  var x = confirm("Save changes to Miscellaneous Database?")
  if (x == true) {
    var row = updatedRow.data();
    id = row[0];
    price = row[3];
    brand = row[4];
    name = row[5];
    licenseduration = row[6];
    licensenum = row[7];

    window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
    "&price="+price+"&brand="+brand+"&name="+name+"&licenseduration="+licenseduration+
    "&licensenum="+licensenum+"&type=miscsoft";

  } else {
    window.location.href=window.location.href;
  }

    console.log(id);
    console.log("The new value for the cell is: " + updatedCell.data());
    console.log("The old value for that cell was: " + oldValue);
    console.log("The values for each cell in that row are: " + updatedRow.data());
       
}