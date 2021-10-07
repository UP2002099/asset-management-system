function lettersOnly() {
    var charCode = event.keyCode;

    if ((charCode > 47 && charCode < 57) || (charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) ||  charCode == 8) {
        return true;
    } else {
        return false;
    }

}

function validateemail() {
    var x = document.info.email.value;
    var atposition=x.indexOf("@");  
    var dotposition=x.lastIndexOf(".");

    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){
        alert("Error - Invalid Email, please re-check your input");
        return false;
    }
}

function matchpass() {  
    var password=document.info.password.value;  
    var repassword=document.info.repassword.value;  
      
    if(password==repassword) {
        return true;  
    } else {
        alert("Error - Password does not match");  
        return false;  
    }
}

function validateform() {  
    var username=document.info.username.value;  
    var password=document.info.password.value;  
      
    if (username==null || username=="") {
        alert("Error - Username cannot be blank");  
        return false;  
    } else if(password.length<4) {
        alert("Error - Password must be at least 4 characters long");  
        return false;  
    } else if (username.length<4) {
        alert("Error - Username must be at least 4 characters long");
        return false;  
    }
}

function validatename() {
    var username=document.infoname.username.value;
    var newusername=document.infoname.newusername.value;
    var confirm=document.infoname.confirm.value;

    if (username==null || username=="" || newusername==null || newusername=="") {
        alert("Error - Username cannot be blank");
        window.location.href=window.location.href;
        return false;
    } else if(username==newusername) {
        alert("Error - New username is the same as the old username");  
        window.location.href=window.location.href;
        return false;
    } else if (username.length<4) {
        alert("Error - Username must be at least 4 characters long");
        window.location.href=window.location.href;
        return false;  
    } else if (confirm==null || confirm=="") {
        alert("Error - Enter a password to confirm");
        window.location.href=window.location.href;
        return false;
    }
}

function validatepass() {
    var oldpassword=document.infopass.oldpassword.value;
    var newpassword=document.infopass.newpassword.value;

    if(newpassword==null || newpassword=="" || oldpassword==null || oldpassword=="") {
        alert("Error - New username is the same as the old username");  
        window.location.href=window.location.href;
        return false; 
    } else if(newpassword==oldpassword) {
        alert("Error - New password is the same as the old password");
        window.location.href=window.location.href;  
        return false;  
    } else if(password.length<4) {
        alert("Error - Password must be at least 4 characters long");  
        window.location.href=window.location.href;
        return false;  
    }
}

function validateuseremail() {
    var oldemail=document.infoemail.oldemail.value;
    var newemail=document.infoemail.newemail.value;
    var confirm=document.infoemail.confirm.value;

    if(newemail==oldemail) {
        alert("Error - New email is the same as the old email");  
        window.location.href=window.location.href;
        return false;  
    } else if (confirm==null || confirm=="") {
        alert("Error - Enter a password to confirm");
        window.location.href=window.location.href;
        return false;
    }
}