function go() {
    const delay = 500;
    const delay2 = 1000;
    const delay3 = 1500;
    const delay4 = 2000;
    const delay5 = 2500;
    const delay6 = 3000;
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