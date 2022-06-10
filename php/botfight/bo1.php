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

if($gender == "man"){
    $imagegender = "man.png";
}elseif($gender == "woman"){
    $imagegender = "woman.png";
}else{
    $imagegender = "other.png";
}
$nomrobot = "Bot #34445";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bo1 - Bot</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/bot.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
</head>

<body>
    <section>
        <div class="all">
            <div class="leftdessus" id="left">
                <h3>ON THE LEFT !</h3>
                <?php
                        echo  "<p>" . $u . " </p>";
                        echo  "<img src=\"../../assets/images/profile/".$imagegender."\" alt=\"genre\">";
                ?>
            </div>
            <div class="milieudessus" id="mid">
                <h4>Are you READY ?</h4>
                <button onclick="go()">GO</button>
            </div>
            <div class="rightdessus" id="right">
                <h3>ON THE RIGHT !</h3>
                <?php
                        echo  "<p>" . $nomrobot . " </p>";
                ?>
                <img src="../../assets/images/menu/robotfacile.png" alt="ez">
            </div>
            <div class="leftdessous">
                <h3>ON THE LEFT !</h3>
                <?php
                        echo  "<p>" . $u . " </p>";
                ?>
                <div>
                    <button>CHI</button>
                    <button>FOU</button>
                    <button>MI</button>
                </div>
            </div>
            <div class="milieudessous">

            </div>
            <div class="rightdessous">
            <h3>ON THE RIGHT !</h3>
                <?php
                        echo  "<p>" . $nomrobot . " </p>";
                ?>
                <div>
                    <button>CHI</button>
                    <button>FOU</button>
                    <button>MI</button>
                </div>
            </div>
        </div>
    </section>
    <script src="../../assets/js/index.js"></script>
</body>

</html>