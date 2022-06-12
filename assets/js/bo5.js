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
function playp(){
    document.getElementById('m').style.opacity ="0";
    document.getElementById('m').style.zIndex ="1";
    document.getElementById('imagepierre').style.opacity = "1";
    document.getElementById('imagefeuille').style.opacity ="0";
    document.getElementById('imageciseaux').style.opacity ="0";
    const robot = Math.floor(Math.random() * 3);
    if (robot === 1 ){
        document.getElementById('robotimageautre').style.opacity ="1";
        document.getElementById('robotimage').style.opacity ="0";
        document.getElementById('robotimageautreautre').style.opacity ="0";
        document.getElementById('egalite').style.opacity ="1";
        document.getElementById('egalite').style.zIndex ="2";
        document.getElementById('hplose').style.opacity ="0";
        document.getElementById('hplose').style.zIndex ="1";
        document.getElementById('hpnotlose').style.opacity ="0";
        document.getElementById('hpnotlose').style.zIndex ="1";  
    }else if(robot === 2){
        document.getElementById('robotimageautre').style.opacity ="0";
        document.getElementById('robotimage').style.opacity ="1";
        document.getElementById('robotimageautreautre').style.opacity ="0";
        if(document.getElementById("pv").innerHTML == "3 / 3"){
            document.getElementById("pv").innerHTML = "2 / 3";
            document.getElementById("pvautreautre").style.backgroundColor = "white";
            document.getElementById('egalite').style.opacity ="0";
            document.getElementById('egalite').style.zIndex ="1";
            document.getElementById('hplose').style.opacity ="1";
            document.getElementById('hplose').style.zIndex ="2";
            document.getElementById('hpnotlose').style.opacity ="0";
            document.getElementById('hpnotlose').style.zIndex ="1";  
        }else if(document.getElementById("pv").innerHTML == "2 / 3"){
            document.getElementById("pv").innerHTML = "1 / 3";
            document.getElementById("pvautreautre").style.backgroundColor = "white";
            document.getElementById("pvautre").style.backgroundColor = "white";
            document.getElementById('egalite').style.opacity ="0";
            document.getElementById('egalite').style.zIndex ="1";
            document.getElementById('hplose').style.opacity ="1";
            document.getElementById('hplose').style.zIndex ="2";
            document.getElementById('hpnotlose').style.opacity ="0";
            document.getElementById('hpnotlose').style.zIndex ="1";  
        }
        else {
            document.getElementById("pv").innerHTML = "0 / 3";
            document.getElementById("pv").style.backgroundColor = "white";
            document.getElementById("pvautre").style.backgroundColor = "white";
            document.getElementById("pvautreautre").style.backgroundColor = "white";
            document.getElementById('egalite').style.opacity ="0";
            document.getElementById('egalite').style.zIndex ="1";
            document.getElementById('hplose').style.opacity ="0";
            document.getElementById('hplose').style.zIndex ="1";
            document.getElementById('hpnotlose').style.opacity ="0";
            document.getElementById('hpnotlose').style.zIndex ="1";  
            document.getElementById('lose').style.opacity ="1";
            document.getElementById('lose').style.zIndex ="2";  
            document.getElementById('choix').style.opacity ="0";
        }

    }else{
        document.getElementById('robotimageautre').style.opacity ="0";
        document.getElementById('robotimage').style.opacity ="0";
        document.getElementById('robotimageautreautre').style.opacity ="1";
        if(document.getElementById("pvrobot").innerHTML == "3 / 3"){
            document.getElementById("pvrobot").innerHTML = "2 / 3";
            document.getElementById("pvautrerobotautre").style.backgroundColor = "white";
            document.getElementById('egalite').style.opacity ="0";
            document.getElementById('egalite').style.zIndex ="1";
            document.getElementById('hplose').style.opacity ="0";
            document.getElementById('hplose').style.zIndex ="1";
            document.getElementById('hpnotlose').style.opacity ="1";
            document.getElementById('hpnotlose').style.zIndex ="2";  
        }else if(document.getElementById("pvrobot").innerHTML == "2 / 3"){
            document.getElementById("pvrobot").innerHTML = "1 / 3";
            document.getElementById("pvautrerobotautre").style.backgroundColor = "white";
            document.getElementById("pvautrerobot").style.backgroundColor = "white";
            document.getElementById('egalite').style.opacity ="0";
            document.getElementById('egalite').style.zIndex ="1";
            document.getElementById('hplose').style.opacity ="0";
            document.getElementById('hplose').style.zIndex ="1";
            document.getElementById('hpnotlose').style.opacity ="1";
            document.getElementById('hpnotlose').style.zIndex ="2";  
        }
        else {
            document.getElementById("pvrobot").innerHTML = "0 / 3";
            document.getElementById("pvrobot").style.backgroundColor = "white";
            document.getElementById("pvautrerobotautre").style.backgroundColor = "white";
            document.getElementById("pvautrerobot").style.backgroundColor = "white";
            document.getElementById('egalite').style.opacity ="0";
            document.getElementById('egalite').style.zIndex ="1";
            document.getElementById('hplose').style.opacity ="0";
            document.getElementById('hplose').style.zIndex ="1";
            document.getElementById('hpnotlose').style.opacity ="0";
            document.getElementById('hpnotlose').style.zIndex ="1";  
            document.getElementById('win').style.opacity ="1";
            document.getElementById('win').style.zIndex ="2";  
            document.getElementById('choix').style.opacity ="0";
        }

    }
}
function playf(){
    document.getElementById('m').style.opacity ="0";
    document.getElementById('m').style.zIndex ="1";
    document.getElementById('imagepierre').style.opacity = "0";
    document.getElementById('imagefeuille').style.opacity ="1";
    document.getElementById('imageciseaux').style.opacity ="0";
    const robot = Math.floor(Math.random() * 3);
    if (robot === 1 ){
        document.getElementById('robotimageautre').style.opacity ="0";
        document.getElementById('robotimage').style.opacity ="1";
        document.getElementById('robotimageautreautre').style.opacity ="0";
        document.getElementById('egalite').style.opacity ="1";
        document.getElementById('egalite').style.zIndex ="2";
        document.getElementById('hplose').style.opacity ="0";
        document.getElementById('hplose').style.zIndex ="1";
        document.getElementById('hpnotlose').style.opacity ="0";
        document.getElementById('hpnotlose').style.zIndex ="1";  
    }else if(robot === 2){
        document.getElementById('robotimageautre').style.opacity ="0";
        document.getElementById('robotimage').style.opacity ="0";
        document.getElementById('robotimageautreautre').style.opacity ="1";
        if(document.getElementById("pv").innerHTML == "3 / 3"){
            document.getElementById("pv").innerHTML = "2 / 3";
            document.getElementById("pvautreautre").style.backgroundColor = "white";
            document.getElementById('egalite').style.opacity ="0";
            document.getElementById('egalite').style.zIndex ="1";
            document.getElementById('hplose').style.opacity ="1";
            document.getElementById('hplose').style.zIndex ="2";
            document.getElementById('hpnotlose').style.opacity ="0";
            document.getElementById('hpnotlose').style.zIndex ="1";  
        }else if(document.getElementById("pv").innerHTML == "2 / 3"){
            document.getElementById("pv").innerHTML = "1 / 3";
            document.getElementById("pvautreautre").style.backgroundColor = "white";
            document.getElementById("pvautre").style.backgroundColor = "white";
            document.getElementById('egalite').style.opacity ="0";
            document.getElementById('egalite').style.zIndex ="1";
            document.getElementById('hplose').style.opacity ="1";
            document.getElementById('hplose').style.zIndex ="2";
            document.getElementById('hpnotlose').style.opacity ="0";
            document.getElementById('hpnotlose').style.zIndex ="1";  
        }
        else {
            document.getElementById("pv").innerHTML = "0 / 3";
            document.getElementById("pv").style.backgroundColor = "white";
            document.getElementById("pvautre").style.backgroundColor = "white";
            document.getElementById("pvautreautre").style.backgroundColor = "white";
            document.getElementById('egalite').style.opacity ="0";
            document.getElementById('egalite').style.zIndex ="1";
            document.getElementById('hplose').style.opacity ="0";
            document.getElementById('hplose').style.zIndex ="1";
            document.getElementById('hpnotlose').style.opacity ="0";
            document.getElementById('hpnotlose').style.zIndex ="1";  
            document.getElementById('lose').style.opacity ="1";
            document.getElementById('lose').style.zIndex ="2";  
            document.getElementById('choix').style.opacity ="0";
        }

    }else{
        document.getElementById('robotimageautre').style.opacity ="1";
        document.getElementById('robotimage').style.opacity ="0";
        document.getElementById('robotimageautreautre').style.opacity ="0";
        if(document.getElementById("pvrobot").innerHTML == "3 / 3"){
            document.getElementById("pvrobot").innerHTML = "2 / 3";
            document.getElementById("pvautrerobotautre").style.backgroundColor = "white";
            document.getElementById('egalite').style.opacity ="0";
            document.getElementById('egalite').style.zIndex ="1";
            document.getElementById('hplose').style.opacity ="0";
            document.getElementById('hplose').style.zIndex ="1";
            document.getElementById('hpnotlose').style.opacity ="1";
            document.getElementById('hpnotlose').style.zIndex ="2";  
        }else if(document.getElementById("pvrobot").innerHTML == "2 / 3"){
            document.getElementById("pvrobot").innerHTML = "1 / 3";
            document.getElementById("pvautrerobotautre").style.backgroundColor = "white";
            document.getElementById("pvautrerobot").style.backgroundColor = "white";
            document.getElementById('egalite').style.opacity ="0";
            document.getElementById('egalite').style.zIndex ="1";
            document.getElementById('hplose').style.opacity ="0";
            document.getElementById('hplose').style.zIndex ="1";
            document.getElementById('hpnotlose').style.opacity ="1";
            document.getElementById('hpnotlose').style.zIndex ="2";  
        }
        else {
            document.getElementById("pvrobot").innerHTML = "0 / 3";
            document.getElementById("pvrobot").style.backgroundColor = "white";
            document.getElementById("pvautrerobotautre").style.backgroundColor = "white";
            document.getElementById("pvautrerobot").style.backgroundColor = "white";
            document.getElementById('egalite').style.opacity ="0";
            document.getElementById('egalite').style.zIndex ="1";
            document.getElementById('hplose').style.opacity ="0";
            document.getElementById('hplose').style.zIndex ="1";
            document.getElementById('hpnotlose').style.opacity ="0";
            document.getElementById('hpnotlose').style.zIndex ="1";  
            document.getElementById('win').style.opacity ="1";
            document.getElementById('win').style.zIndex ="2";  
            document.getElementById('choix').style.opacity ="0";
        }

    }
}
function playc(){
    document.getElementById('m').style.opacity ="0";
    document.getElementById('m').style.zIndex ="1";
    document.getElementById('imagepierre').style.opacity = "0";
    document.getElementById('imagefeuille').style.opacity ="0";
    document.getElementById('imageciseaux').style.opacity ="1";
    const robot = Math.floor(Math.random() * 3);
    if (robot === 1 ){
        document.getElementById('robotimageautre').style.opacity ="0";
        document.getElementById('robotimage').style.opacity ="0";
        document.getElementById('robotimageautreautre').style.opacity ="1";
        document.getElementById('egalite').style.opacity ="1";
        document.getElementById('egalite').style.zIndex ="2";
        document.getElementById('hplose').style.opacity ="0";
        document.getElementById('hplose').style.zIndex ="1";
        document.getElementById('hpnotlose').style.opacity ="0";
        document.getElementById('hpnotlose').style.zIndex ="1";  
    }else if(robot === 2){
        document.getElementById('robotimageautre').style.opacity ="1";
        document.getElementById('robotimage').style.opacity ="0";
        document.getElementById('robotimageautreautre').style.opacity ="0";
        if(document.getElementById("pv").innerHTML == "3 / 3"){
            document.getElementById("pv").innerHTML = "2 / 3";
            document.getElementById("pvautreautre").style.backgroundColor = "white";
            document.getElementById('egalite').style.opacity ="0";
            document.getElementById('egalite').style.zIndex ="1";
            document.getElementById('hplose').style.opacity ="1";
            document.getElementById('hplose').style.zIndex ="2";
            document.getElementById('hpnotlose').style.opacity ="0";
            document.getElementById('hpnotlose').style.zIndex ="1";  
        }else if(document.getElementById("pv").innerHTML == "2 / 3"){
            document.getElementById("pv").innerHTML = "1 / 3";
            document.getElementById("pvautreautre").style.backgroundColor = "white";
            document.getElementById("pvautre").style.backgroundColor = "white";
            document.getElementById('egalite').style.opacity ="0";
            document.getElementById('egalite').style.zIndex ="1";
            document.getElementById('hplose').style.opacity ="1";
            document.getElementById('hplose').style.zIndex ="2";
            document.getElementById('hpnotlose').style.opacity ="0";
            document.getElementById('hpnotlose').style.zIndex ="1";  
        }
        else {
            document.getElementById("pv").innerHTML = "0 / 3";
            document.getElementById("pv").style.backgroundColor = "white";
            document.getElementById("pvautre").style.backgroundColor = "white";
            document.getElementById("pvautreautre").style.backgroundColor = "white";
            document.getElementById('egalite').style.opacity ="0";
            document.getElementById('egalite').style.zIndex ="1";
            document.getElementById('hplose').style.opacity ="0";
            document.getElementById('hplose').style.zIndex ="1";
            document.getElementById('hpnotlose').style.opacity ="0";
            document.getElementById('hpnotlose').style.zIndex ="1";  
            document.getElementById('lose').style.opacity ="1";
            document.getElementById('lose').style.zIndex ="2";  
            document.getElementById('choix').style.opacity ="0";
        }

    }else{
        document.getElementById('robotimageautre').style.opacity ="0";
        document.getElementById('robotimage').style.opacity ="1";
        document.getElementById('robotimageautreautre').style.opacity ="0";
        if(document.getElementById("pvrobot").innerHTML == "3 / 3"){
            document.getElementById("pvrobot").innerHTML = "2 / 3";
            document.getElementById("pvautrerobotautre").style.backgroundColor = "white";
            document.getElementById('egalite').style.opacity ="0";
            document.getElementById('egalite').style.zIndex ="1";
            document.getElementById('hplose').style.opacity ="0";
            document.getElementById('hplose').style.zIndex ="1";
            document.getElementById('hpnotlose').style.opacity ="1";
            document.getElementById('hpnotlose').style.zIndex ="2";  
        }else if(document.getElementById("pvrobot").innerHTML == "2 / 3"){
            document.getElementById("pvrobot").innerHTML = "1 / 3";
            document.getElementById("pvautrerobotautre").style.backgroundColor = "white";
            document.getElementById("pvautrerobot").style.backgroundColor = "white";
            document.getElementById('egalite').style.opacity ="0";
            document.getElementById('egalite').style.zIndex ="1";
            document.getElementById('hplose').style.opacity ="0";
            document.getElementById('hplose').style.zIndex ="1";
            document.getElementById('hpnotlose').style.opacity ="1";
            document.getElementById('hpnotlose').style.zIndex ="2";  
        }
        else {
            document.getElementById("pvrobot").innerHTML = "0 / 3";
            document.getElementById("pvrobot").style.backgroundColor = "white";
            document.getElementById("pvautrerobotautre").style.backgroundColor = "white";
            document.getElementById("pvautrerobot").style.backgroundColor = "white";
            document.getElementById('egalite').style.opacity ="0";
            document.getElementById('egalite').style.zIndex ="1";
            document.getElementById('hplose').style.opacity ="0";
            document.getElementById('hplose').style.zIndex ="1";
            document.getElementById('hpnotlose').style.opacity ="0";
            document.getElementById('hpnotlose').style.zIndex ="1";  
            document.getElementById('win').style.opacity ="1";
            document.getElementById('win').style.zIndex ="2";  
            document.getElementById('choix').style.opacity ="0";
        }

    }

}