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
function showmiddlebo1(){
    document.getElementById("bo1").style.opacity = "1";
    document.getElementById("bo11").style.opacity = "1";
    document.getElementById("m").style.opacity = "1";
    document.getElementById("bo3").style.opacity = "0";
    document.getElementById("bo5").style.opacity = "0";
    document.getElementById("bo33").style.opacity = "0";
    document.getElementById("bo55").style.opacity = "0";
}
function showmiddlebo3(){
    document.getElementById("bo3").style.opacity = "1";
    document.getElementById("bo33").style.opacity = "1";
    document.getElementById("m").style.opacity = "1";
    document.getElementById("bo1").style.opacity = "0";
    document.getElementById("bo5").style.opacity = "0";
    document.getElementById("bo11").style.opacity = "0";
    document.getElementById("bo55").style.opacity = "0";
}
function showmiddlebo5(){
    document.getElementById("bo5").style.opacity = "1";
    document.getElementById("bo55").style.opacity = "1";
    document.getElementById("m").style.opacity = "1";
    document.getElementById("bo3").style.opacity = "0";
    document.getElementById("bo1").style.opacity = "0";
    document.getElementById("bo33").style.opacity = "0";
    document.getElementById("bo11").style.opacity = "0";
}
function showbutton1(){
    document.getElementById("but0").style.opacity = "1";
    document.getElementById("but1").style.opacity = "1";
    document.getElementById("but2").style.opacity = "0";
    document.getElementById("but3").style.opacity = "0";
}
function showbutton2(){
    document.getElementById("but0").style.opacity = "1";
    document.getElementById("but1").style.opacity = "0";
    document.getElementById("but2").style.opacity = "1";
    document.getElementById("but3").style.opacity = "0";
}
function showbutton3(){
    document.getElementById("but0").style.opacity = "1";
    document.getElementById("but1").style.opacity = "0";
    document.getElementById("but2").style.opacity = "0";
    document.getElementById("but3").style.opacity = "1";
}
