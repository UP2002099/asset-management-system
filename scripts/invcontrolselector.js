function loadform() {
    if (document.getElementById("hard").checked) {
        document.getElementById("harddatabase").style.display="block";
        document.getElementById("softdatabase").style.display="none";
    } else if (document.getElementById("soft").checked) {
        document.getElementById("harddatabase").style.display="none";
        document.getElementById("softdatabase").style.display="block";
    } else {
        document.getElementById("harddatabase").style.display="none";
        document.getElementById("softdatabase").style.display="none";
    }

}

function loaddata() {
    if (document.getElementById("pcdata").checked) {
        document.getElementById("listpc").style.display="block";
        document.getElementById("listlaptop").style.display="none";
        document.getElementById("listmischard").style.display="none";
        document.getElementById("listgenpurpose").style.display="none";
        document.getElementById("listopersystem").style.display="none";
        document.getElementById("listutility").style.display="none";
        document.getElementById("listmiscsoft").style.display="none";
    } else if (document.getElementById("laptopdata").checked) {
        document.getElementById("listpc").style.display="none";
        document.getElementById("listlaptop").style.display="block";
        document.getElementById("listmischard").style.display="none";
        document.getElementById("listgenpurpose").style.display="none";
        document.getElementById("listopersystem").style.display="none";
        document.getElementById("listutility").style.display="none";
        document.getElementById("listmiscsoft").style.display="none";
    } else if (document.getElementById("mischarddata").checked) {
        document.getElementById("listpc").style.display="none";
        document.getElementById("listlaptop").style.display="none";
        document.getElementById("listmischard").style.display="block";
        document.getElementById("listgenpurpose").style.display="none";
        document.getElementById("listopersystem").style.display="none";
        document.getElementById("listutility").style.display="none";
        document.getElementById("listmiscsoft").style.display="none";
    } else if (document.getElementById("genpurposedata").checked) {
        document.getElementById("listpc").style.display="none";
        document.getElementById("listlaptop").style.display="none";
        document.getElementById("listmischard").style.display="none";
        document.getElementById("listgenpurpose").style.display="block";
        document.getElementById("listopersystem").style.display="none";
        document.getElementById("listutility").style.display="none";
        document.getElementById("listmiscsoft").style.display="none";
    } else if (document.getElementById("opersystemdata").checked) {
        document.getElementById("listpc").style.display="none";
        document.getElementById("listlaptop").style.display="none";
        document.getElementById("listmischard").style.display="none";
        document.getElementById("listgenpurpose").style.display="none";
        document.getElementById("listopersystem").style.display="block";
        document.getElementById("listutility").style.display="none";
        document.getElementById("listmiscsoft").style.display="none";
    } else if (document.getElementById("utilitydata").checked) {
        document.getElementById("listpc").style.display="none";
        document.getElementById("listlaptop").style.display="none";
        document.getElementById("listmischard").style.display="none";
        document.getElementById("listgenpurpose").style.display="none";
        document.getElementById("listopersystem").style.display="none";
        document.getElementById("listutility").style.display="block";
        document.getElementById("listmiscsoft").style.display="none";
    } else if (document.getElementById("miscsoftdata").checked) {
        document.getElementById("listpc").style.display="none";
        document.getElementById("listlaptop").style.display="none";
        document.getElementById("listmischard").style.display="none";
        document.getElementById("listgenpurpose").style.display="none";
        document.getElementById("listopersystem").style.display="none";
        document.getElementById("listutility").style.display="none";
        document.getElementById("listmiscsoft").style.display="block";
    } else {
        document.getElementById("listpc").style.display="none";
        document.getElementById("listlaptop").style.display="none";
        document.getElementById("listmischard").style.display="none";
        document.getElementById("listgenpurpose").style.display="none";
        document.getElementById("listopersystem").style.display="none";
        document.getElementById("listutility").style.display="none";
        document.getElementById("listmiscsoft").style.display="none";
    }
}