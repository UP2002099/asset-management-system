$(document).ready(function () {
    $('#genpurposetable').DataTable();
    $('#opersystemtable').DataTable();
    $('#utilitytable').DataTable();
    $('#miscsofttable').DataTable();
});

function loaddata() {
if (document.getElementById("genpurpose").checked) {
    document.getElementById("genpurposedata").style.display = "block";
    document.getElementById("opersystemdata").style.display = "none";
    document.getElementById("utilitydata").style.display = "none";
    document.getElementById("miscsoftdata").style.display = "none";
} else if (document.getElementById("opersystem").checked) {
    document.getElementById("genpurposedata").style.display = "none";
    document.getElementById("opersystemdata").style.display = "block";
    document.getElementById("utilitydata").style.display = "none";
    document.getElementById("miscsoftdata").style.display = "none";
} else if (document.getElementById("utility").checked) {
    document.getElementById("genpurposedata").style.display = "none";
    document.getElementById("opersystemdata").style.display = "none";
    document.getElementById("utilitydata").style.display = "block";
    document.getElementById("miscsoftdata").style.display = "none";
} else if (document.getElementById("miscsoft").checked) {
    document.getElementById("genpurposedata").style.display = "none";
    document.getElementById("opersystemdata").style.display = "none";
    document.getElementById("utilitydata").style.display = "none";
    document.getElementById("miscsoftdata").style.display = "block";

    }
}

//
// ─── GENPURPOSE FUNCTION ────────────────────────────────────────────────────────
//

function genpurposebrandsave() {
    var brand = document.getElementById('brandother').value;
    var x = confirm("Save changes to General Purpose Database?");
    if (x == true) {
        window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
        "&price="+price+"&brand="+brand+"&name="+name+"&licenseduration="+licenseduration+
        "&licensenum="+licensenum+"&type=genpurpose";
        
    } else {
        window.location.href=window.location.href;
    }
}

function genpurposedurationsave() {
    var licenseduration = document.getElementById('licensedurationother').value;
    var x = confirm("Save changes to General Purpose Database?");
    if (x == true) {
        window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
        "&price="+price+"&brand="+brand+"&name="+name+"&licenseduration="+licenseduration+
        "&licensenum="+licensenum+"&type=genpurpose";
        
    } else {
        window.location.href=window.location.href;
    }
}
//
// ─── END GENPURPOSE FUNCTION ────────────────────────────────────────────────────
//

    
//
// ─── OPERSYSTEM FUNCTION ────────────────────────────────────────────────────────
//

function opersystembrandsave() {
    var brand = document.getElementById('brandother').value;
    var x = confirm("Save changes to Operating System Database?");
    if (x == true) {
        window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
        "&price="+price+"&brand="+brand+"&name="+name+"&licenseduration="+licenseduration+
        "&licensenum="+licensenum+"&type=opersystem";
        
    } else {
        window.location.href=window.location.href;
    }
}

function opersystemdurationsave() {
    var licenseduration = document.getElementById('licensedurationother').value;
    var x = confirm("Save changes to Operating System Database?");
    if (x == true) {
        window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
        "&price="+price+"&brand="+brand+"&name="+name+"&licenseduration="+licenseduration+
        "&licensenum="+licensenum+"&type=opersystem";
        
    } else {
        window.location.href=window.location.href;
    }
}
    
//
// ─── END OPERSYSTEM FUNCTION ────────────────────────────────────────────────────
//

    
//
// ─── UTILITY FUNCTION ───────────────────────────────────────────────────────────
//

function utilitybrandsave() {
    var brand = document.getElementById('brandother').value;
    var x = confirm("Save changes to Utility Database?");
    if (x == true) {
        window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
        "&price="+price+"&brand="+brand+"&name="+name+"&licenseduration="+licenseduration+
        "&licensenum="+licensenum+"&type=utility";
        
    } else {
        window.location.href=window.location.href;
    }
}

function utilitydurationsave() {
    var licenseduration = document.getElementById('licensedurationother').value;
    var x = confirm("Save changes to Utility Database?");
    if (x == true) {
        window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
        "&price="+price+"&brand="+brand+"&name="+name+"&licenseduration="+licenseduration+
        "&licensenum="+licensenum+"&type=utility";
        
    } else {
        window.location.href=window.location.href;
    }
}
    
//
// ─── END UTILITY FUNCTION ───────────────────────────────────────────────────────
//

    
//
// ─── MISCSOFT FUNCTION ──────────────────────────────────────────────────────────
//

function miscsoftbrandsave() {
    var brand = document.getElementById('brandother').value;
    var x = confirm("Save changes to Miscellaneous Database?");
    if (x == true) {
        window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
        "&price="+price+"&brand="+brand+"&name="+name+"&licenseduration="+licenseduration+
        "&licensenum="+licensenum+"&type=miscsoft";
        
    } else {
        window.location.href=window.location.href;
    }
}

function miscsoftdurationsave() {
    var licenseduration = document.getElementById('licensedurationother').value;
    var x = confirm("Save changes to Miscellaneous Database?");
    if (x == true) {
        window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
        "&price="+price+"&brand="+brand+"&name="+name+"&licenseduration="+licenseduration+
        "&licensenum="+licensenum+"&type=miscsoft";
        
    } else {
        window.location.href=window.location.href;
    }
}
    
//
// ─── END MISCSOFT FUNCTION ──────────────────────────────────────────────────────
//

var update = function (updatedCell, updatedRow, oldValue) {
    if (document.getElementById("genpurpose").checked) {
        var row = updatedRow.data();
        id = row[0];
        price = row[3];
        brand = row[4];
        name = row[5];
        licenseduration = row[6];
        licensenum = row[7];

        while (true) {
            if (brand == "brand") {
                document.getElementById('brand').innerHTML = "<input class='other-style' id='brandother' placeholder='Max. 16 Characters' \
                oninput='this.value=this.value.slice(0,this.maxLength)' type = 'text' maxlength = '16'></input> \
                <input type='button' id='savebrand' class='btn btn-outline-success' onclick='genpurposebrandsave();' value='Save'>";
                break;
            } else if (licenseduration == "duration") {
                document.getElementById('duration').innerHTML = "<input class='other-style id='licensedurationother' \
                placeholder='Max. 2 Digits' oninput='this.value=this.value.slice(0,this.maxLength)' type = 'number' maxlength = '2' \
                onkeypress='return event.charCode >= 48 && event.charCode <= 57'> \
                <input type='button' id='saveduration' class='btn btn-outline-success' onclick='genpurposedurationsave();' value='Save'>";
                break;
            } else {
                var x = confirm("Save changes to General Purpose Database?");
                if (x == true) {
                    window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
                    "&price="+price+"&brand="+brand+"&name="+name+"&licenseduration="+licenseduration+
                    "&licensenum="+licensenum+"&type=genpurpose";
                    break;
                    
                } else {
                    window.location.href=window.location.href;
                    break;
                }
            }
        }

    } else if (document.getElementById("opersystem").checked) {
        var row = updatedRow.data();
        id = row[0];
        price = row[3];
        brand = row[4];
        name = row[5];
        licenseduration = row[6];
        licensenum = row[7];
    
        while (true) {
            if (brand == "brand") {
                document.getElementById('brand').innerHTML = "<input class='other-style' id='brandother' placeholder='Max. 16 Characters' \
                oninput='this.value=this.value.slice(0,this.maxLength)' type = 'text' maxlength = '16'></input> \
                <input type='button' id='savebrand' class='btn btn-outline-success' onclick='opersystembrandsave();' value='Save'>";
                break;
            } else if (licenseduration == "duration") {
                document.getElementById('duration').innerHTML = "<input class='other-style' id='licensedurationother' \
                placeholder='Max. 2 Digits' oninput='this.value=this.value.slice(0,this.maxLength)' type = 'number' maxlength = '2' \
                onkeypress='return event.charCode >= 48 && event.charCode <= 57'> \
                <input type='button' id='saveduration' class='btn btn-outline-success' onclick='opersystemdurationsave();' value='Save'>";
                break;
            } else {
                var x = confirm("Save changes to Operating System Database?");
                if (x == true) {
                    window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
                    "&price="+price+"&brand="+brand+"&name="+name+"&licenseduration="+licenseduration+
                    "&licensenum="+licensenum+"&type=opersystem";
                    break;
                    
                } else {
                    window.location.href=window.location.href;
                    break;
                }
            }
        }

    } else if (document.getElementById("utility").checked) {
        var row = updatedRow.data();
        id = row[0];
        price = row[3];
        brand = row[4];
        name = row[5];
        licenseduration = row[6];
        licensenum = row[7];
    
        while (true) {
            if (brand == "brand") {
                document.getElementById('brand').innerHTML = "<input class='other-style' id='brandother' placeholder='Max. 16 Characters' \
                oninput='this.value=this.value.slice(0,this.maxLength)' type = 'text' maxlength = '16'></input> \
                <input type='button' id='savebrand' class='btn btn-outline-success' onclick='utilitybrandsave();' value='Save'>";
                break;
            } else if (licenseduration == "duration") {
                document.getElementById('duration').innerHTML = "<input class='other-style' id='utilitylicensedurationother' \
                placeholder='Max. 2 Digits' oninput='this.value=this.value.slice(0,this.maxLength)' type = 'number' maxlength = '2' \
                onkeypress='return event.charCode >= 48 && event.charCode <= 57'> \
                <input type='button' id='saveduration' class='btn btn-outline-success' onclick='utilitydurationsave();' value='Save'>";
                break;
            } else {
                var x = confirm("Save changes to Utility Database?");
                if (x == true) {
                    window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
                    "&price="+price+"&brand="+brand+"&name="+name+"&licenseduration="+licenseduration+
                    "&licensenum="+licensenum+"&type=utility";
                    break;
                    
                } else {
                    window.location.href=window.location.href;
                    break;
                }
            }
        }

    } else if (document.getElementById("miscsoft").checked) {
        var row = updatedRow.data();
        id = row[0];
        price = row[3];
        brand = row[4];
        name = row[5];
        licenseduration = row[6];
        licensenum = row[7];

        while (true) {
            if (brand == "brand") {
                document.getElementById('brand').innerHTML = "<input class='other-style' id='brandother' placeholder='Max. 16 Characters' \
                oninput='this.value=this.value.slice(0,this.maxLength)' type = 'text' maxlength = '16'></input> \
                <input type='button' id='savebrand' class='btn btn-outline-success' onclick='miscsoftbrandsave();' value='Save'>";
                break;
            } else if (licenseduration == "duration") {
                document.getElementById('duration').innerHTML = "<input class='other-style' id='misclicensedurationother' \
                placeholder='Max. 2 Digits' oninput='this.value=this.value.slice(0,this.maxLength)' type = 'number' maxlength = '2' \
                onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input> \
                <input type='button' id='saveduration' class='btn btn-outline-success' onclick='miscsoftdurationsave();' value='Save'>";
                break;
            } else {
                var x = confirm("Save changes to Miscellaneous Database?");
                if (x == true) {
                    window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
                    "&price="+price+"&brand="+brand+"&name="+name+"&licenseduration="+licenseduration+
                    "&licensenum="+licensenum+"&type=miscsoft";
                    break;
                    
                } else {
                    window.location.href=window.location.href;
                    break;
                }
            }
        }

    } else {
        window.location.href=window.location.href;
    }
}

$(document).ready(function () {
    table = $('#genpurposetable').DataTable();
    table.MakeCellsEditable({
        "onUpdate": update,
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
                    { "value": "brand", "display": "Other" },
                ]
            },
            {
                "column": 4, 
                "type": "text",
                "options": null,
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
                    { "value": "duration", "display": "Other" },
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

$(document).ready(function () {
    table = $('#opersystemtable').DataTable();
    table.MakeCellsEditable({
        "onUpdate": update,
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
                    { "value": "brand", "display": "Other" },
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
                    { "value": "duration", "display": "Other" },
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

$(document).ready(function () {
    table = $('#utilitytable').DataTable();
    table.MakeCellsEditable({
        "onUpdate": update,
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
                    { "value": "brand", "display": "Other" },
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
                    { "value": "duration", "display": "Other" },
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

$(document).ready(function () {
    table = $('#miscsofttable').DataTable();
    table.MakeCellsEditable({
        "onUpdate": update,
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
                    { "value": "brand", "display": "Other" },
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
                    { "value": "duration", "display": "Other" },
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