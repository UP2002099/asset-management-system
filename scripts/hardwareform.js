function loadform() {
    if (document.getElementById('pc').checked) {
      document.getElementById('pcform').style.display='block';
      document.getElementById('laptopform').style.display='none';
      document.getElementById('miscform').style.display='none';
    } else if (document.getElementById('laptop').checked) {
      document.getElementById('pcform').style.display='none';
      document.getElementById('laptopform').style.display='block';
      document.getElementById('miscform').style.display='none';
    } else if (document.getElementById('misc').checked) {
      document.getElementById('pcform').style.display='none';
      document.getElementById('laptopform').style.display='none';
      document.getElementById('miscform').style.display='block';
  
    }
}
  
function showwarranty(val) {   //Global function
    var pc = document.getElementById('warrantyother');
    var laptop = document.getElementById('lapwarrantyother');
    var misc = document.getElementById('miscwarrantyother');
    if (val=='Other' && document.getElementById('pc').checked) {
        pc.style.display = 'block';
        laptop.style.display = 'none';
        misc.style.display = 'none';
    } else if (val=='Other' && document.getElementById('laptop').checked) {
        pc.style.display = 'none';
        laptop.style.display = 'block';
        misc.style.display = 'none';
    } else if (val=='Other' && document.getElementById('misc').checked) {
        pc.style.display = 'none';
        laptop.style.display = 'none';
        misc.style.display = 'block';
    } else {
        pc.style.display = 'none';
        laptop.style.display = 'none';
        misc.style.display = 'none';
    }
}

function showbrand(val) {   //PC and Laptop exclusive function
    var pc = document.getElementById('brandother');
    var laptop = document.getElementById('lapbrandother');
    if (val=='Other' && document.getElementById('pc').checked) {
        pc.style.display = 'block';
        laptop.style.displau = 'none';
    } else if (val=='Other' && document.getElementById('laptop').checked) {
        pc.style.display = 'none';
        laptop.style.display = 'block';
    } else {
        pc.style.display = 'none';
        laptop.style.display = 'none';
    }
}
  
function showscreen(val) {   //Laptop exclusive function
    var laptop = document.getElementById('screenother');
    if (val=='Other') {
        laptop.style.display = 'block';
    } else {
        laptop.style.display = 'none';
    }
}
  
function showscreenres(val) {   //Laptop exclusive function
    var laptop = document.getElementById('screenresother');
    if (val=='Other') {
        laptop.style.display = 'block';
    } else {
        laptop.style.display = 'none';
    }
}
  
function showquantity(val) {   //Global function
    var pc = document.getElementById('quantityother');
    var laptop = document.getElementById('lapquantityother');
    var misc = document.getElementById('miscquantityother');
    if (val=='Other' && document.getElementById('pc').checked) {
        pc.style.display = 'block';
        laptop.style.display = 'none';
        misc.style.display = 'none';
    } else if (val=='Other' && document.getElementById('laptop').checked) {
        pc.style.display = 'none';
        laptop.style.display = 'block';
        misc.style.display = 'none';
    } else if (val=='Other' && document.getElementById('misc').checked) {
        pc.style.display = 'none';
        laptop.style.display = 'none';
        misc.style.display = 'block';
    } else {
        pc.style.display = 'none';
        laptop.style.display = 'none';
        misc.style.display = 'none';
    }
}

function showcpu(val) {   //PC and Laptop exclusive function
    var pc = document.getElementById('cpuother');
    var laptop = document.getElementById('lapcpuother');
    if (val=='cpuother' && document.getElementById('pc').checked) {
        pc.style.display = 'block';
        laptop.style.display = 'none';
    } else if (val=='lapcpuother' && document.getElementById('laptop').checked) {
        pc.style.display = 'none';
        laptop.style.display = 'block';
    } else {
        pc.style.display = 'none';
        laptop.style.display = 'none';
    }
}
  
function showgpu(val) {   //PC and Laptop exclusive function
    var pc = document.getElementById('gpuother');
    var laptop = document.getElementById('lapgpuother');
    if (val=='gpuother' && document.getElementById('pc').checked) {
        pc.style.display = 'block';
        laptop.style.display = 'none';
    } else if (val=='lapgpuother' && document.getElementById('laptop').checked) {
        pc.style.display = 'none';
        laptop.style.display = 'block';
    } else {
        pc.style.display = 'none';
        laptop.style.display = 'none';
    }
}
  
function showmiscbrand(val) {   //Miscellaneous exclusive function
    var misc = document.getElementById('miscbrandother');
    if (val=='Other') {
        misc.style.display = 'block';
    } else {
        misc.style.display = 'none';
    }
}
  
function showmisctype(val) {   //Miscellaneous exclusive function
    var misc = document.getElementById('misctypeother');
    if (val=='Other') {
        misc.style.display = 'block';
    } else {
        misc.style.display = 'none';
    }
}

function showcolour(val) {   //Global function
    var pc = document.getElementById('pccolourother');
    var laptop = document.getElementById('lapcolourother');
    var misc = document.getElementById('misccolourother');
    if (val=='Other' && document.getElementById('pc').checked) {
        pc.style.display = 'block';
        laptop.style.display = 'none';
        misc.style.display = 'none';
    } else if (val=='Other' && document.getElementById('laptop').checked) {
        pc.style.display = 'none';
        laptop.style.display = 'block';
        misc.style.display = 'none';
    } else if (val=='Other' && document.getElementById('misc').checked) {
        pc.style.display = 'none';
        laptop.style.display = 'none';
        misc.style.display = 'block';
    } else {
        pc.style.display = 'none';
        laptop.style.display = 'none';
        misc.style.display = 'none';
    }
}
