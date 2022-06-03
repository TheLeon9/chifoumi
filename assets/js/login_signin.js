var delay = 50;

function seeSignIN(){
    document.getElementById("login").style.animation = "mynewmove2 1s 1";
    document.getElementById("signin").style.animation = "mynewmove1 0.5s 1";
    document.getElementById("signin").style.opacity = "1";
    document.getElementById("signin").style.zIndex = "1";
    setTimeout(function () {
        document.getElementById("login").style.opacity = "0";
        document.getElementById("login").style.zIndex = "-1";
    }, delay);
}
function seeLogIn(){
    document.getElementById("signin").style.animation = "mynewmove 1s 1";
    document.getElementById("login").style.animation = "mynewmove1 0.5s 1";
    document.getElementById("login").style.opacity = "1";
    document.getElementById("login").style.zIndex = "1";
    setTimeout(function () {
        document.getElementById("signin").style.opacity = "0";
        document.getElementById("signin").style.zIndex = "-1";
    }, delay);
}
function cacher(){
    if(document.getElementById("+").innerHTML == "-"){
        document.getElementById("cacher").style.opacity = "0";
        document.getElementById("+").innerHTML = "+";
    }else{
        document.getElementById("cacher").style.opacity = "1";
        document.getElementById("+").innerHTML = "-";
    }

}
function showmodifname(){
    document.getElementById("modifname").style.top="70px";
}
function hidemodifname(){
    document.getElementById("modifname").style.top="-1000px";
}
function showmodiftitle(){
    document.getElementById("modiftitle").style.top="70px";
}
function hidemodiftitle(){
    document.getElementById("modiftitle").style.top="-1000px";
}