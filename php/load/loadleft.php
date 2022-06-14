<?php
$bdd = new mysqli('localhost', 'root', '', 'chifoumi_db');
session_start();
if (!$_SESSION['id']) {
    header('Location: ../../index.php');
}

$u = $_SESSION['name'];

$em = $_SESSION['email'];

// $m = $_SESSION['mdp'];

$id = $_SESSION['id'];

$level = $_SESSION['level'];

$win = $_SESSION['win'];

$lose = $_SESSION['lose'];

$gender = $_SESSION['gender'];

$skinp = $_SESSION['skinp'];
                    
$skinf = $_SESSION['skinf'];
                    
$skinc = $_SESSION['skinc'] ;

$botmove = rand(1,2);
$imagebot ="";
if($botmove == 1){
    $imagebot = "cartoonFr.png";
}else{
    $imagebot = "defaultFr.png";

}
if($gender == "man"){
    $imagegender = "man.png";
}elseif($gender == "woman"){
    $imagegender = "woman.png";
}else{
    $imagegender = "other.png";
}
$nomrobot = "NARUTO";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Load - Page</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/simu.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
</head>

<body>
    <section>
        <div class="all">
            <div class="leftdessus" id="left">
            <div style="display: flex; flex-direction:column; justify-content:center; margin-bottom: 200px; align-items:center;">
                <h3>ON THE LEFT !</h3>
                    <p style="opacity: 1;">Waiting for players</p>
                </div>
                <img src="../../assets/images/loader.svg" alt="load" class="loader" id="load" style="opacity: 1; top:45%;">
            </div>
            <div class="milieudessus" id="mid">
                <h4>ARE YOU READY !!</h4>
                <p>The leader click on go</p>
                <p>And GL guys</p>
                <button><a href="../menu.php" style="text-decoration: none; color:black;">GO / QUIT</a></button>
            </div>
            <div class="rightdessus" id="right">
                <h3 >ON THE RIGHT !</h3 >
                <?php
                        echo  "<p  style=\"opacity: 1;\">" . $u . " </p>";
                        echo  "<img src=\"../../assets/images/profile/".$imagegender."\" alt=\"genre\"  style=\"opacity: 1;\">";
                ?>
            </div>
        </div>
    </section>
</body>

</html>