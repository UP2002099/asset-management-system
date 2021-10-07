function loadform() {
    if (document.getElementById('checkuser').checked) {
      document.getElementById('usernameform').style.display='block';
      document.getElementById('passform').style.display='none';
      document.getElementById('emailform').style.display='none';
    } else if (document.getElementById('checkpass').checked) {
      document.getElementById('usernameform').style.display='none';
      document.getElementById('passform').style.display='block';
      document.getElementById('emailform').style.display='none';
    } else if (document.getElementById('checkemail').checked) {
      document.getElementById('usernameform').style.display='none';
      document.getElementById('passform').style.display='none';
      document.getElementById('emailform').style.display='block';
  
    }
}