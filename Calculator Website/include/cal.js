// This is the actully the code for the calculator 

var inputstring="";

function updatestring(value){
    inputstring +=value;
    document.calculator.input.value=inputstring;
}


// console.log("hi")





















// This is the actully the code for the validation of the login modal


function validation(){

var email =document.login.email.value;
var pass1 =document.login.password.value;


var pos1 = email.indexOf("@");
var pos2 = email.lastIndexOf(".");
if (pos1 < 1 || (pos2 - pos1 < 6)) {
    alert("Envalid Email address")
    document.login.email.focus();
    return false;
}

else if (pass1==""){
    alert("please Enter the password")
    return false;
}
else if (pass1.length < 8 ){
    alert("The password atleast 8 digit")
    document.login.password.focus();
    return false;

}
else if (pass1.length>15){
    alert("the password maximum length of 15")
    document.login.password.focus();
    return false;
}
else {
    return true;
}


};


// This is the actully the code for the valiadtion pf the signup modal


function validate1(){

    var name = documnet.signup.name.value;
    var em = document.signup.email.value;
    var pas =  document.signup.password.value;

    var pos1 = em.indexOf("@");
var pos2 = em.lastIndexOf(".");
if (pos1 < 1 || (pos2 - pos1 < 6)) {
    alert("Envalid Email address")
    document.signup.email.focus();
    return false;
}

else if (pas==""){
    alert("please Enter the password")
    return false;
}
else if (pas.length < 8 ){
    alert("The password atleast 8 digit")
    document.signup.password.focus();
    return false;

}
else if (pas.length>15){
    alert("the password maximum length of 15")
    document.signup.password.focus();
    return false;
}
else if (name==""){
    
    alert("Please Enter the name")
    document.signup.name.focus();
    return false;
}
else {
    return true;
}


}








