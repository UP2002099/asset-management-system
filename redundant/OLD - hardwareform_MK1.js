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

function showwarranty(name) {   //Global function
  if (name=="Other" && document.getElementById("pc").checked) {
    document.getElementById("warrantyother").innerHTML='Other: <input type="text" name="other">';
    document.getElementById("lapwarrantyother").innerHTML="";
    document.getElementById("miscwarrantyother").innerHTML="";
  } else if (name=="Other" && document.getElementById("laptop").checked) {
    document.getElementById("warrantyother").innerHTML="";
    document.getElementById("lapwarrantyother").innerHTML='Other: <input type="text" name="other">';
    document.getElementById("miscwarrantyother").innerHTML="";
  } else if (name=="Other" && document.getElementById("misc").checked) {
    document.getElementById("warrantyother").innerHTML="";
    document.getElementById("lapwarrantyother").innerHTML="";
    document.getElementById("miscwarrantyother").innerHTML='Other: <input type="text" name="other">';
  } else {
    document.getElementById("warrantyother").innerHTML="";
    document.getElementById("lapwarrantyother").innerHTML="";
    document.getElementById("miscwarrantyother").innerHTML="";

  }
}

function showbrand(name) {   //PC and Laptop exclusive function
  if (name=="Other" && document.getElementById("pc").checked) {
    document.getElementById("brandother").innerHTML='Other: <input type="text" id="input"/>';
    var input = document.getElementById("input").value;
    document.getElementById("other").value = input;
    console.log(other);
    document.getElementById("lapbrandother").innerHTML="";
  } else if (name=="Other" && document.getElementById("laptop").checked) {
    document.getElementById("brandother").innerHTML="";
    document.getElementById("lapbrandother").innerHTML='Other: <input type="text" name="other">';
  } else {
    document.getElementById("brandother").innerHTML="";
    document.getElementById("lapbrandother").innerHTML="";

  }
}

function showscreen(name) {   //Laptop exclusive function
  if (name=="Other") {
    document.getElementById("screenother").innerHTML='Other: <input type="text" name="other">';
  } else {
    document.getElementById("screenother").innerHTML="";
  
  }
}

function showscreenres(name) {   //Laptop exclusive function
  if (name=="Other") {
    document.getElementById("screenresother").innerHTML='Other: <input type="text" name="other">';
  } else {
    document.getElementById("screenresother").innerHTML="";
  
  }
}

function showquantity(name) {   //Global function
  if (name=="Other" && document.getElementById("pc").checked) {
    document.getElementById("quantityother").innerHTML='Other: <input type="text" name="other">';
    document.getElementById("lapquantityother").innerHTML="";
    document.getElementById("miscquantityother").innerHTML="";
  } else if (name=="Other" && document.getElementById("laptop").checked) {
    document.getElementById("quantityother").innerHTML="";
    document.getElementById("lapquantityother").innerHTML='Other: <input type="text" name="other">';
    document.getElementById("miscquantityother").innerHTML="";
  
  } else if (name=="Other" && document.getElementById("misc").checked) {
    document.getElementById("quantityother").innerHTML="";
    document.getElementById("lapquantityother").innerHTML="";
    document.getElementById("miscquantityother").innerHTML='Other: <input type="text" name="other">';
  } else {
    document.getElementById("quantityother").innerHTML="";
    document.getElementById("lapquantityother").innerHTML="";
    document.getElementById("miscquantityother").innerHTML="";

  }
}

function showcpu(name) {   //PC and Laptop exclusive function
  if (name=="cpuother" && document.getElementById("pc").checked) {
    document.getElementById("cpuother").innerHTML='Other: <input type="text" name="cpuother">';
    document.getElementById("lapcpuother").innerHTML="";
  } else if (name=="lapcpuother" && document.getElementById("laptop").checked) {
    document.getElementById("cpuother").innerHTML="";
    document.getElementById("lapcpuother").innerHTML='Other: <input type="text" name="cpuother">';
  } else {
    document.getElementById("cpuother").innerHTML="";
    document.getElementById("lapcpuother").innerHTML="";

  }
}

function showgpu(name) {   //PC and Laptop exclusive function
  if (name=="gpuother" && document.getElementById("pc").checked) {
    document.getElementById("gpuother").innerHTML='Other: <input type="text" name="gpuother">';
    document.getElementById("lapgpuother").innerHTML="";
  } else if (name=="lapgpuother" && document.getElementById("laptop").checked) {
    document.getElementById("gpuother").innerHTML="";
    document.getElementById("lapgpuother").innerHTML='Other: <input type="text" name="gpuother">';
  } else {
    document.getElementById("gpuother").innerHTML="";
    document.getElementById("lapgpuother").innerHTML="";

  }
}

function showmiscbrand(name) {   //Miscellaneous exclusive function
  if (name=="Other") {
    document.getElementById("miscbrandother").innerHTML='Other: <input type="text" name="other">';
    document.getElementById("misclaptopaccessory").innerHTML="";
    document.getElementById("miscpcaccessory").innerHTML="";
  } else if (name=="laptopaccessory") {
    document.getElementById("miscbrandother").innerHTML="";
    document.getElementById("misclaptopaccessory").innerHTML=
      '<div class="md-form active-pink-2 mb-3">' + 
      '<input class="form-control" type="text" placeholder="Search for Laptop iD" aria-label="Search">' +
      '</div>';
    document.getElementById("miscpcaccessory").innerHTML="";
  } else if (name=="pcaccessory") {
    document.getElementById("miscbrandother").innerHTML="";
    document.getElementById("misclaptopaccessory").innerHTML="";
    document.getElementById("miscpcaccessory").innerHTML=
      '<div class="md-form active-pink-2 mb-3">' + 
      '<input class="form-control" type="text" placeholder="Search for PC iD" aria-label="Search">' +
      '</div>';
  } else {
    document.getElementById("miscbrandother").innerHTML="";
    document.getElementById("misclaptopaccessory").innerHTML="";
    document.getElementById("miscpcaccessory").innerHTML="";
  }
}

function showmisctype(name) {   //Miscellaneous exclusive function
  if (name=="Other") {
    document.getElementById("misctypeother").innerHTML='Other: <input type="text" name="other">';
  } else {
    document.getElementById("misctypeother").innerHTML="";
  
  }
}