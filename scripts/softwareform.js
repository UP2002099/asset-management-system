function loadform() {
    if (document.getElementById("genpurpose").checked) {
      document.getElementById("genpurposeform").style.display="block";
      document.getElementById("opersystemform").style.display="none";
      document.getElementById("utilityform").style.display="none";
      document.getElementById("miscform").style.display="none";
    } else if (document.getElementById("opersystem").checked) {
      document.getElementById("genpurposeform").style.display="none";
      document.getElementById("opersystemform").style.display="block";
      document.getElementById("utilityform").style.display="none";
      document.getElementById("miscform").style.display="none";
    } else if (document.getElementById("utility").checked) {
      document.getElementById("genpurposeform").style.display="none";
      document.getElementById("opersystemform").style.display="none";
      document.getElementById("utilityform").style.display="block";
      document.getElementById("miscform").style.display="none";
    } else if (document.getElementById("misc").checked) {
        document.getElementById("genpurposeform").style.display="none";
        document.getElementById("opersystemform").style.display="none";
        document.getElementById("utilityform").style.display="none";
        document.getElementById("miscform").style.display="block";

    }
}

function showquantity(val) {   //Global function
    var genpurpose = document.getElementById('quantityother');
    var opersystem = document.getElementById('operquantityother');
    var utility = document.getElementById('utilityquantityother');
    var misc = document.getElementById('miscquantityother');
    if (val=='Other' && document.getElementById("genpurpose").checked) {
        genpurpose.style.display = 'block';
        opersystem.style.display = 'none';
        utility.style.display = 'none'; 
        misc.style.display = 'none';
    } else if (val=='Other' && document.getElementById("opersystem").checked) {
        genpurpose.style.display = 'none';
        opersystem.style.display = 'block';
        utility.style.display = 'none'; 
        misc.style.display = 'none';
    } else if (val=='Other' && document.getElementById("utility").checked) {
        genpurpose.style.display = 'none';
        opersystem.style.display = 'none';
        utility.style.display = 'block'; 
        misc.style.display = 'none';
    } else if (val=='Other' && document.getElementById("misc").checked) {
        genpurpose.style.display = 'none';
        opersystem.style.display = 'none';
        utility.style.display = 'none'; 
        misc.style.display = 'block';
    } else {
        genpurpose.style.display = 'none';
        opersystem.style.display = 'none';
        utility.style.display = 'none'; 
        misc.style.display = 'none';
    }
}

function showbrand(val) {   //PC and Laptop exclusive function
    var genpurpose = document.getElementById('brandother');
    var opersystem = document.getElementById('operbrandother');
    var utility = document.getElementById('utilitybrandother');
    var misc = document.getElementById('miscbrandother');
    if (val=='Other' && document.getElementById("genpurpose").checked) {
        genpurpose.style.display = 'block';
        opersystem.style.display = 'none';
        utility.style.display = 'none'; 
        misc.style.display = 'none';
    } else if (val=='Other' && document.getElementById('opersystem').checked) {
        genpurpose.style.display = 'none';
        opersystem.style.display = 'block';
        utility.style.display = 'none'; 
        misc.style.display = 'none';
    } else if (val=='Other' && document.getElementById("utility").checked) {
        genpurpose.style.display = 'none';
        opersystem.style.display = 'none';
        utility.style.display = 'block'; 
        misc.style.display = 'none';
    } else if (val=='Other' && document.getElementById("misc").checked) {
        genpurpose.style.display = 'none';
        opersystem.style.display = 'none';
        utility.style.display = 'none'; 
        misc.style.display = 'block';
    } else {
        genpurpose.style.display = 'none';
        opersystem.style.display = 'none';
        utility.style.display = 'none'; 
        misc.style.display = 'none';
    }
}

function showduration(val) {   //PC and Laptop exclusive function
    var genpurpose = document.getElementById('licensedurationother');
    var opersystem = document.getElementById('operlicensedurationother');
    var utility = document.getElementById('utilitylicensedurationother');
    var misc = document.getElementById('misclicensedurationother');
    if (val=='Other' && document.getElementById("genpurpose").checked) {
        genpurpose.style.display = 'block';
        opersystem.style.display = 'none';
        utility.style.display = 'none'; 
        misc.style.display = 'none';
    } else if (val=='Other' && document.getElementById('opersystem').checked) {
        genpurpose.style.display = 'none';
        opersystem.style.display = 'block';
        utility.style.display = 'none'; 
        misc.style.display = 'none';
    } else if (val=='Other' && document.getElementById("utility").checked) {
        genpurpose.style.display = 'none';
        opersystem.style.display = 'none';
        utility.style.display = 'block'; 
        misc.style.display = 'none';
    } else if (val=='Other' && document.getElementById("misc").checked) {
        genpurpose.style.display = 'none';
        opersystem.style.display = 'none';
        utility.style.display = 'none'; 
        misc.style.display = 'block';
    } else {
        genpurpose.style.display = 'none';
        opersystem.style.display = 'none';
        utility.style.display = 'none'; 
        misc.style.display = 'none';
    }
}