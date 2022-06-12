function go() {
    const delay = 100;
    const delay2 = 200;
    const delay3 = 300;
    const delay4 = 400;
    const delay5 = 500;
    const delay6 = 600;
    setTimeout(function () {
        document.getElementById("left").style.left = "-100px";
        document.getElementById("right").style.right = "-100px";
        document.getElementById("mid").style.top = "250px";

    }, delay);
    setTimeout(function () {
        document.getElementById("left").style.left = "-200px";
        document.getElementById("right").style.right = "-200px";
        document.getElementById("mid").style.top = "150px";

    }, delay2);
    setTimeout(function () {
        document.getElementById("left").style.left = "-400px";
        document.getElementById("right").style.right = "-400px";
        document.getElementById("mid").style.top = "100px";

    }, delay3);
    setTimeout(function () {
        document.getElementById("left").style.left = "-600px";
        document.getElementById("right").style.right = "-600px";
        document.getElementById("mid").style.top = "50px";

    }, delay4);
    setTimeout(function () {
        document.getElementById("left").style.left = "-700px";
        document.getElementById("right").style.right = "-700px";
        document.getElementById("mid").style.top = "25px";

    }, delay5);
    setTimeout(function () {
        document.getElementById("left").style.left = "-1500px";
        document.getElementById("right").style.right = "-1500px";
        document.getElementById("mid").style.top = "-1500px";

    }, delay6);
}
function jouerp(){
    document.getElementById('choix').style.opacity ="0";
    document.getElementById('m').style.opacity ="0";
    document.getElementById('m').style.zIndex ="1";
    document.getElementById('pj').style.opacity ="1";
    document.getElementById('pj').style.zIndex ="2";
    document.getElementById('fj').style.opacity ="0";
    document.getElementById('fj').style.zIndex ="1";
    document.getElementById('robotimage').style.opacity ="1";
    document.getElementById('imagepierre').style.opacity ="1";
    document.getElementById('imagefeuille').style.opacity ="0";
    document.getElementById("pv").innerHTML = "0 / 1";
    document.getElementById("pv").style.backgroundColor = "white";
}
function jouerf(){
    document.getElementById('m').style.opacity ="0";
    document.getElementById('m').style.zIndex ="1";
    document.getElementById('fj').style.opacity ="1";
    document.getElementById('fj').style.zIndex ="2";
    document.getElementById('robotimage').style.opacity ="1";
    document.getElementById('imagefeuille').style.opacity ="1";
}
function jouerc(){
    document.getElementById('choix').style.opacity ="0";
    document.getElementById('m').style.opacity ="0";
    document.getElementById('m').style.zIndex ="1";
    document.getElementById('cj').style.opacity ="1";
    document.getElementById('cj').style.zIndex ="2";
    document.getElementById('fj').style.opacity ="0";
    document.getElementById('fj').style.zIndex ="1";
    document.getElementById('robotimage').style.opacity ="1";
    document.getElementById('imageciseaux').style.opacity ="1";
    document.getElementById('imagefeuille').style.opacity ="0";
    document.getElementById("pvrobot").innerHTML = "0 / 1";
    document.getElementById("pvrobot").style.backgroundColor = "white";
}