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
//feuille ou pierre
$botmove = rand(1,2);
$imagebot ="";
if($botmove == 1){
    $imagebot = "cartoonFr.png";
}else{
    $imagebot = "defaultFr.png";
}
$botmove2 = rand(1,2);
$imagebot2 ="";
if($botmove2 == 1){
    $imagebot2 = "cartoonPr.png";
}else{
    $imagebot2 = "defaultPr.png";
}
if($gender == "man"){
    $imagegender = "man.png";
}elseif($gender == "woman"){
    $imagegender = "woman.png";
}else{
    $imagegender = "other.png";
}
$nomrobot = "Bot#".rand(100 , 1000);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bo3 - Bot</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/bot3&5.css" />
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
                <img src="../../assets/images/menu/robotmoyen.png" alt="med">
            </div>
            <div class="leftdessous">
                <h3>
                    <?php
                            echo  $u ;
                    ?>
                </h3>
                <div class="pv">
                    <h5>HP : </h5>
                    <h6 id="pv">2 / 2</h6>
                    <h6 id="pvautre"></h6>
                </div>
                <div id="imagepierre" class="imagejoueur">
                    <?php
                    echo  "<img src=\"../../assets/images/pierre/".$skinp."\" alt=\"pierre\">";
                ?>
                </div>
                <div id="imagefeuille" class="imagejoueur">
                    <?php
                    echo  "<img src=\"../../assets/images/feuille/".$skinf."\" alt=\"feuille\">";
                ?>
                </div>
                <div id="imageciseaux" class="imagejoueur">
                    <?php
                    echo  "<img src=\"../../assets/images/ciseaux/".$skinc."\" alt=\"ciseaux\">";
                ?>
                </div>
                <div id="choix" class="choix">
                    <button onclick="playp()" name="chi">CHI</button>
                    <button onclick="playf()" name="fou">FOU</button>
                    <button onclick="playc()" name="mi">MI</button>
                </div>
            </div>
            <div class="rightdessous">
                <h3>
                    <?php
                        echo   $nomrobot;
                ?>
                </h3>
                <div class="pv">
                    <h5>HP : </h5>
                    <h6 id="pvrobot">2 / 2</h6>
                    <h6 id="pvautrerobot"></h6>
                </div>
                <div id="robotimage" class="robotimage">
                    <?php
                echo  "<img src=\"../../assets/images/feuille/".$imagebot."\" alt=\"bot\">";
                ?>
                </div>
                <div id="robotimageautre" class="robotimageautre">
                    <?php
                echo  "<img src=\"../../assets/images/pierre/".$imagebot2."\" alt=\"bot\">";
                ?>
                </div>
                <div id="choix" class="choix">
                    <button name="chi">BOT</button>
                    <button name="fou">BOT</button>
                    <button name="mi">BOT</button>
                </div>
            </div>
            <div class="milieudessous" id="m">
                <h4>Let's GO ?</h4>
                <p>It's a TWO SHOT</p>
                <p>GOOD LUCK</p>
                <div>
                    <a href="../menu.php" class="quit">QUIT</a>
                </div>
            </div>
            <div class="pierrej" id="lose">
                <h4>YOU LOSE !!</h4>
                <?php
                echo  "<p> BOUH : " . $u . " </p>";
                ?>
                <div>
                    <a href="./bo2.php" class="restart">RESTART</a>
                    <a href="../menu.php" class="quit">QUIT</a>
                </div>
            </div>
            <div class="feuillej" id="egalite">
                <h4>NO WINNER !!</h4>
                <p>GO AGAIN !</p>
                <div>
                    <a href="../menu.php" class="quit">QUIT</a>
                </div>
            </div>
            <div class="ciseauxj" id="win">
                <h4>YOU WIN !!</h4>
                <?php
                echo  "<p> WP : " . $u . " </p>";
                ?>
                <p>You earn nothing !!</p>
                <div>
                    <a href="./bo2.php" class="restart">RESTART</a>
                    <a href="../menu.php" class="quit">QUIT</a>
                </div>
            </div>
            <div class="hplose" id="hplose">
                <h4>OH NO !!</h4>
                <?php
                echo  "<p>" . $u . " : Lose 1 HP</p>";
                ?>
                <p>FIGHT TILL THE END !!</p>
                <div>
                    <a href="../menu.php" class="quit">QUIT</a>
                </div>
            </div>
            <div class="hpnotlose" id="hpnotlose">
                <h4>OH YES !!</h4>
                <?php
                echo  "<p>" . $nomrobot. " : Lose 1 HP</p>";
                ?>
                <p>FNISH HIM !!</p>
                <div>
                    <a href="../menu.php" class="quit">QUIT</a>
                </div>
            </div>
        </div>
    </section>
    <script src="../../assets/js/bo3.js"></script>
</body>

</html>