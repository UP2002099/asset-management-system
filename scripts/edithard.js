$(document).ready(function () {
    $('#pctable').DataTable();
    $('#laptoptable').DataTable();
    $('#mischardtable').DataTable();
});

function loaddata() {
    if (document.getElementById("pc").checked) {
        document.getElementById("pcdata").style.display = "block";
        document.getElementById("laptopdata").style.display = "none";
        document.getElementById("mischarddata").style.display = "none";
    } else if (document.getElementById("laptop").checked) {
        document.getElementById("pcdata").style.display = "none";
        document.getElementById("laptopdata").style.display = "block";
        document.getElementById("mischarddata").style.display = "none";
    } else if (document.getElementById("mischard").checked) {
        document.getElementById("pcdata").style.display = "none";
        document.getElementById("laptopdata").style.display = "none";
        document.getElementById("mischarddata").style.display = "block";
    }
}

//
// ─── PC FUNCTION OTHER TEXTBOX ──────────────────────────────────────────────────
//
function brandsave() {
    var brand = document.getElementById('brandother').value;
    var x = confirm("Save changes to PC Database?");
    if (x == true) {
        window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
        "&price="+price+"&brand="+brand+"&name="+name+"&model="+model+"&warranty="+warranty+"&cpu_make="+cpu_make+
        "&cpu_model="+cpu_model+"&gpu_make="+gpu_make+"&gpu_model="+gpu_model+"&storage_type="+storage_type+
        "&storage_cap="+storage_cap+"&ram_size="+ram_size+"&ram_speed="+ram_speed+"&type=pc";
        
    } else {
        window.location.href=window.location.href;
    }
}

function warrantysave() {
    var warranty = document.getElementById('warrantyother').value;
    var x = confirm("Save changes to PC Database?");
    if (x == true) {
        window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
        "&price="+price+"&brand="+brand+"&name="+name+"&model="+model+"&warranty="+warranty+"&cpu_make="+cpu_make+
        "&cpu_model="+cpu_model+"&gpu_make="+gpu_make+"&gpu_model="+gpu_model+"&storage_type="+storage_type+
        "&storage_cap="+storage_cap+"&ram_size="+ram_size+"&ram_speed="+ram_speed+"&type=pc";
        
    } else {
        window.location.href=window.location.href;
    }
}

function cpusave() {
    var cpu_make = document.getElementById('cpuother').value;
    var x = confirm("Save changes to PC Database?");
    if (x == true) {
        window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
        "&price="+price+"&brand="+brand+"&name="+name+"&model="+model+"&warranty="+warranty+"&cpu_make="+cpu_make+
        "&cpu_model="+cpu_model+"&gpu_make="+gpu_make+"&gpu_model="+gpu_model+"&storage_type="+storage_type+
        "&storage_cap="+storage_cap+"&ram_size="+ram_size+"&ram_speed="+ram_speed+"&type=pc";
        
    } else {
        window.location.href=window.location.href;
    }
}

function gpusave() {
    var gpu_make = document.getElementById('gpuother').value;
    var x = confirm("Save changes to PC Database?");
    if (x == true) {
        window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
        "&price="+price+"&brand="+brand+"&name="+name+"&model="+model+"&warranty="+warranty+"&cpu_make="+cpu_make+
        "&cpu_model="+cpu_model+"&gpu_make="+gpu_make+"&gpu_model="+gpu_model+"&storage_type="+storage_type+
        "&storage_cap="+storage_cap+"&ram_size="+ram_size+"&ram_speed="+ram_speed+"&type=pc";
        
    } else {
        window.location.href=window.location.href;
    }
}

//
// ─── END PC FUNCTION ────────────────────────────────────────────────────────────
//

    

//
// ─── LAPTOP FUNCTION OTHER TEXTBOX ──────────────────────────────────────────────
//

function lapbrandsave() {
    var brand = document.getElementById('brandother').value;
    var x = confirm("Save changes to Laptop Database?");
    if (x == true) {
        window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
        "&price="+price+"&brand="+brand+"&name="+name+"&model="+model+"&warranty="+warranty+"&screensize="+screensize+
        "&screenres="+screenres+"&cpu_make="+cpu_make+"&cpu_model="+cpu_model+"&gpu_make="+gpu_make+
        "&gpu_model="+gpu_model+"&storage_type="+storage_type+"&storage_cap="+storage_cap+
        "&ram_size="+ram_size+"&ram_speed="+ram_speed+"&type=laptop";
        
    } else {
        window.location.href=window.location.href;
    }
}

function lapwarrantysave() {
    var warranty = document.getElementById('warrantyother').value;
    var x = confirm("Save changes to Laptop Database?");
    if (x == true) {
        window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
        "&price="+price+"&brand="+brand+"&name="+name+"&model="+model+"&warranty="+warranty+"&screensize="+screensize+
        "&screenres="+screenres+"&cpu_make="+cpu_make+"&cpu_model="+cpu_model+"&gpu_make="+gpu_make+
        "&gpu_model="+gpu_model+"&storage_type="+storage_type+"&storage_cap="+storage_cap+
        "&ram_size="+ram_size+"&ram_speed="+ram_speed+"&type=laptop";
        
    } else {
        window.location.href=window.location.href;
    }
}

function laptopcpusave() {
    var cpu_make = document.getElementById('cpuother').value;
    var x = confirm("Save changes to Laptop Database?");
    if (x == true) {
        window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
        "&price="+price+"&brand="+brand+"&name="+name+"&model="+model+"&warranty="+warranty+"&screensize="+screensize+
        "&screenres="+screenres+"&cpu_make="+cpu_make+"&cpu_model="+cpu_model+"&gpu_make="+gpu_make+
        "&gpu_model="+gpu_model+"&storage_type="+storage_type+"&storage_cap="+storage_cap+
        "&ram_size="+ram_size+"&ram_speed="+ram_speed+"&type=laptop";
        
    } else {
        window.location.href=window.location.href;
    }
}

function lapgpusave() {
    var gpu_make = document.getElementById('gpuother').value;
    var x = confirm("Save changes to Laptop Database?");
    if (x == true) {
        window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
        "&price="+price+"&brand="+brand+"&name="+name+"&model="+model+"&warranty="+warranty+"&screensize="+screensize+
        "&screenres="+screenres+"&cpu_make="+cpu_make+"&cpu_model="+cpu_model+"&gpu_make="+gpu_make+
        "&gpu_model="+gpu_model+"&storage_type="+storage_type+"&storage_cap="+storage_cap+
        "&ram_size="+ram_size+"&ram_speed="+ram_speed+"&type=laptop";
        
    } else {
        window.location.href=window.location.href;
    }
}

function screenres() {
    var screenres = document.getElementById('screenother').value;
    var x = confirm("Save changes to Laptop Database?");
    if (x == true) {
        window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
        "&price="+price+"&brand="+brand+"&name="+name+"&model="+model+"&warranty="+warranty+"&screensize="+screensize+
        "&screenres="+screenres+"&cpu_make="+cpu_make+"&cpu_model="+cpu_model+"&gpu_make="+gpu_make+
        "&gpu_model="+gpu_model+"&storage_type="+storage_type+"&storage_cap="+storage_cap+
        "&ram_size="+ram_size+"&ram_speed="+ram_speed+"&type=laptop";
        
    } else {
        window.location.href=window.location.href;
    }
}

function screensize() {
    var screensize = document.getElementById('screenresother').value;
    var x = confirm("Save changes to Laptop Database?");
    if (x == true) {
        window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
        "&price="+price+"&brand="+brand+"&name="+name+"&model="+model+"&warranty="+warranty+"&screensize="+screensize+
        "&screenres="+screenres+"&cpu_make="+cpu_make+"&cpu_model="+cpu_model+"&gpu_make="+gpu_make+
        "&gpu_model="+gpu_model+"&storage_type="+storage_type+"&storage_cap="+storage_cap+
        "&ram_size="+ram_size+"&ram_speed="+ram_speed+"&type=laptop";
        
    } else {
        window.location.href=window.location.href;
    }
}

//
// ─── END LAPTOP FUNCTION ────────────────────────────────────────────────────────
//

//
// ─── MISCHARD FUNCTION OTHER TEXTBOX ────────────────────────────────────────────
//

function miscbrandsave() {
    var brand = document.getElementById('brandother').value;
    var x = confirm("Save changes to Laptop Database?");
    if (x == true) {
        window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
        "&price="+price+"&brand="+brand+"&name="+name+"&model="+model+"&warranty="+warranty+
        "&serialnum="+serialnum+"&misctype="+misctype+"&type=mischard";
        
    } else {
        window.location.href=window.location.href;
    }
}

function miscwarrantysave() {
    var warranty = document.getElementById('warrantyother').value;
    var x = confirm("Save changes to Miscellaneous Database?");
    if (x == true) {
        window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
        "&price="+price+"&brand="+brand+"&name="+name+"&model="+model+"&warranty="+warranty+
        "&serialnum="+serialnum+"&misctype="+misctype+"&type=mischard";
        
    } else {
        window.location.href=window.location.href;
    }
}

function misctypesave() {
    var misctype = document.getElementById('misctypeother').value;
    var x = confirm("Save changes to Miscellaneous Database?");
    if (x == true) {
        window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
        "&price="+price+"&brand="+brand+"&name="+name+"&model="+model+"&warranty="+warranty+
        "&serialnum="+serialnum+"&misctype="+misctype+"&type=mischard";
        
    } else {
        window.location.href=window.location.href;
    }
}

//
// ─── END MISCHARD FUNCTION ──────────────────────────────────────────────────────
//

var update = function (updatedCell, updatedRow, oldValue) {
    if (document.getElementById("pc").checked) {
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

        while (true) {
            if (brand == "brand") {
                document.getElementById('brand').innerHTML = "<input class='other-style' id='brandother' placeholder='Max. 16 Characters' \
                oninput='this.value=this.value.slice(0,this.maxLength)' type = 'text' maxlength = '16'></input> \
                <input type='button' id='savebrand' class='btn btn-outline-success' onclick='brandsave();' value='Save'>";
                break;
            } else if (warranty == "warranty") {
                document.getElementById('warranty').innerHTML = "<input class='other-style' id='warrantyother' \
                placeholder='Max. 2 Digits' oninput='this.value=this.value.slice(0,this.maxLength)' type = 'number' maxlength = '2'\
                onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input> \
                <input type='button' id='savewarranty' class='btn btn-outline-success' onclick='warrantysave();' value='Save'>";
                break;
            } else if (cpu_make == "cpu") {
                document.getElementById('cpu').innerHTML = "<input class='other-style' type='text' id='cpuother' oninput='this.value=this.value.slice(0,this.maxLength)' \
                placeholder='Max. 8 Characters' maxlength = '8'> \
                <input type='button' id='savecpu' class='btn btn-outline-success' onclick='cpusave();' value='Save'>";
                break;
            } else if (gpu_make == "gpu") {
                document.getElementById('gpu').innerHTML = "<input class='other-style' type='text' id='gpuother' oninput='this.value=this.value.slice(0,this.maxLength)' \
                placeholder='Max. 8 Characters' maxlength = '8'> \
                <input type='button' id='savegpu' class='btn btn-outline-success' onclick='gpusave();' value='Save'>";
                break;
            } else {
                var x = confirm("Save changes to PC Database?");
                if (x == true) {
                    window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
                    "&price="+price+"&brand="+brand+"&name="+name+"&model="+model+"&warranty="+warranty+"&cpu_make="+cpu_make+
                    "&cpu_model="+cpu_model+"&gpu_make="+gpu_make+"&gpu_model="+gpu_model+"&storage_type="+storage_type+
                    "&storage_cap="+storage_cap+"&ram_size="+ram_size+"&ram_speed="+ram_speed+"&type=pc";
                    break;
                    
                } else {
                    window.location.href=window.location.href;
                    break;
                }
            }
        }

    } else if (document.getElementById("laptop").checked) {
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
    
        while (true) {
            if (brand == "brand") {
                document.getElementById('brand').innerHTML = "<input class='other-style' id='brandother' placeholder='Max. 16 Characters' \
                oninput='this.value=this.value.slice(0,this.maxLength)' type = 'text' maxlength = '16'></input> \
                <input type='button' id='savebrand' class='btn btn-outline-success' onclick='lapbrandsave();' value='Save'>";
                break;
            } else if (warranty == "warranty") {
                document.getElementById('warranty').innerHTML = "<input class='other-style' id='warrantyother' \
                placeholder='Max. 2 Digits' oninput='this.value=this.value.slice(0,this.maxLength)' type = 'number' maxlength = '2'\
                onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input> \
                <input type='button' id='savewarranty' class='btn btn-outline-success' onclick='lapwarrantysave();' value='Save'>";
                break;
            } else if (cpu_make == "cpu") {
                document.getElementById('cpu').innerHTML = "<input class='other-style' type='text' id='cpuother' oninput='this.value=this.value.slice(0,this.maxLength)' \
                placeholder='Max. 8 Characters' maxlength = '8'> \
                <input type='button' id='savecpu' class='btn btn-outline-success' onclick='lapcpusave();' value='Save'>";
                break;
            } else if (gpu_make == "gpu") {
                document.getElementById('gpu').innerHTML = "<input class='other-style' type='text' id='gpuother' oninput='this.value=this.value.slice(0,this.maxLength)' \
                placeholder='Max. 8 Characters' maxlength = '8'> \
                <input type='button' id='savegpu' class='btn btn-outline-success' onclick='lapgpusave();' value='Save'>";
                break;
            } else if (screensize == "screensize") {
                document.getElementById('screensize').innerHTML = "<input class='other-style' id='screenother' style='display:none;' placeholder='Max. 4 Characters' \
                oninput='this.value=this.value.slice(0,this.maxLength)' type = 'text' maxlength = '4'> \
                <input type='button' id='savescreensize' class='btn btn-outline-success' onclick='screensize();' value='Save'>";
                break;
            } else if (screenres == "screenres") {
                document.getElementById('screenres').innerHTML = "<input class='other-style' id='screenresother' style='display:none;' placeholder='Max. 12 Characters' \
                oninput='this.value=this.value.slice(0,this.maxLength)' type = 'text' maxlength = '12'> \
                <input type='button' id='savescreenres' class='btn btn-outline-success' onclick='screenres();' value='Save'>";
                break;
            } else {
                var x = confirm("Save changes to Laptop Database?");
                if (x == true) {
                window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
                "&price="+price+"&brand="+brand+"&name="+name+"&model="+model+"&warranty="+warranty+"&screensize="+screensize+
                "&screenres="+screenres+"&cpu_make="+cpu_make+"&cpu_model="+cpu_model+"&gpu_make="+gpu_make+
                "&gpu_model="+gpu_model+"&storage_type="+storage_type+"&storage_cap="+storage_cap+
                "&ram_size="+ram_size+"&ram_speed="+ram_speed+"&type=laptop";
                break;

                } else {
                    window.location.href=window.location.href;
                    break;
                }
            }
        }

    } else if (document.getElementById("mischard").checked) {
        var row = updatedRow.data();
        id = row[0];
        price = row[3];
        brand = row[4];
        name = row[5];
        model = row[6];
        misctype = row[7]
        warranty = row[8];
        serialnum = row[9];

        while (true) {
            if (brand == "brand") {
                document.getElementById('brand').innerHTML = "<input class='other-style' id='brandother' placeholder='Max. 16 Characters' \
                oninput='this.value=this.value.slice(0,this.maxLength)' type = 'text' maxlength = '16'></input> \
                <input type='button' id='savebrand' class='btn btn-outline-success' onclick='miscbrandsave();' value='Save'>";
                break;
            } else if (warranty == "warranty") {
                document.getElementById('warranty').innerHTML = "<input class='other-style' id='warrantyother' \
                placeholder='Max. 2 Digits' oninput='this.value=this.value.slice(0,this.maxLength)' type = 'number' maxlength = '2'\
                onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input> \
                <input type='button' id='savewarranty' class='btn btn-outline-success' onclick='miscwarrantysave();' value='Save'>";
                break;
            } else if (misctype == "misctype") {
                document.getElementById('misctype').innerHTML = "<input class='other-style id='misctypeother' style='display:none;' placeholder='[Max. 16 Characters]' \
                oninput='this.value=this.value.slice(0,this.maxLength)' type = 'text' maxlength = '16'> \
                <input type='button' id='savemisctype' class='btn btn-outline-success' onclick='misctypesave();' value='Save'>";
                break;
            } else {
                var x = confirm("Save changes to Miscellaneous Database?");
                if (x == true) {
                    window.location.href = "http://localhost/inventory_management_system/recordkeep/editdata.php?id="+id+
                    "&price="+price+"&brand="+brand+"&name="+name+"&model="+model+"&warranty="+warranty+
                    "&serialnum="+serialnum+"&misctype="+misctype+"&type=mischard";
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

pctable = $('#pctable').DataTable();
pctable.MakeCellsEditable({
    "onUpdate": update,
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
                { "value": "brand", "display": "Other"},
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
                { "value": "warranty", "display": "Other" },
            ]
        },
        {
            "column": 8, 
            "type": "list",
            "options":[
                { "value": "Intel", "display": "Intel" },
                { "value": "AMD", "display": "AMD" },
                { "value": "cpu", "display": "Other" },
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
                { "value": "gpu", "display": "Other" },
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

$(document).ready(function () {
    laptoptable = $('#laptoptable').DataTable();
    laptoptable.MakeCellsEditable({
        "onUpdate": update,
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
                    { "value": "warranty", "display": "Other" },
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
                    { "value": "screensize", "display": "Other" },
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
                    { "value": "screenres", "display": "Other" },
                ]
            },
            {
                "column": 10, 
                "type": "list",
                "options":[
                    { "value": "Intel", "display": "Intel" },
                    { "value": "AMD", "display": "AMD" },
                    { "value": "cpu", "display": "Other" },
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
                    { "value": "gpu", "display": "Other" },
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

$(document).ready(function () {
    mischardtable = $('#mischardtable').DataTable();
    mischardtable.MakeCellsEditable({
        "onUpdate": update,
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