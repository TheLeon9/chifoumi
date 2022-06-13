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
    <title>Bo1 - Simulation</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/simu.css" />
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
            <h4 id="click" class="click">CLICK</h4>
            <div class="milieudessus" id="mid">
                <h4>Are you READY ?</h4>
                <p>The leader click on go</p>
                <p>Start the simulation</p>
                <button onclick="go()" >GO</button>
            </div>
            <div class="rightdessus" id="right">
                <h3>ON THE RIGHT !</h3>
                <?php
                        echo  "<p id=\"nomrobot\">" . $nomrobot . " </p>";
                ?>
                <img src="../../assets/images/loader.svg" alt="load" class="loader" id="load">
                <img src="../../assets/images/profile/man.png" alt="ez" id="imgrobot">
            </div>
            <div class="leftdessous">
                    <h3>
                        <?php
                            echo  $u ;
                    ?>
                    </h3>
                <div  class="pv">
                    <h5>HP : </h5>
                    <h6 id="pv">1 / 1</h6>
                </div>
                <div id="imageciseaux" class="imagejoueur">
                <?php
                    echo  "<img src=\"../../assets/images/ciseaux/".$skinc."\" alt=\"ciseaux\">";
                ?>
                </div>
                <div id="choix" class="choix">
                    <button name="chi">CHI</button>
                    <button name="fou">FOU</button>
                    <button name="mi">MI</button>
                </div>
            </div>
            <div class="rightdessous">
                <h3>
                    <?php
                        echo   $nomrobot;
                ?>
                </h3>
                <div  class="pv">
                    <h5>HP : </h5>
                    <h6 id="pvrobot">1 / 1</h6>
                </div>
                <div id="robotimage" class="robotimage">
                <?php
                echo  "<img src=\"../../assets/images/feuille/".$imagebot."\" alt=\"bot\">";
                ?>
                </div>
                <div id="choixrobot" class="choix">
                    <button name="chi">CHI</button>
                    <button  name="fou">FOU</button>
                    <button  name="mi">MI</button>
                </div>
            </div>
            <div class="milieudessous" id="m">
                <h4>Let's GO ?</h4>
                <p>It's a ONE SHOT</p>
                <p>GOOD LUCK</p>
                <p>Leader start the count</p>
                <div>
                    <a href="#" class="quit">GO</a>
                </div>
            </div>
            <div class="tchat" id="tchat">
                <h4>Chat</h4>
                <h6 id="naruto1">Naruto :</h6>
                <p id="naruto2"> I would honor my village</p>
                <h6 id="u1"><?php echo  $u. " : ";?></h6>
                <p id="u2">Nice you tell me you will do the leaf </p>
                <h6 id="naruto3">Naruto :</h6>
                <p id="naruto4"> I lose but i'm the Hokage so Wp !</p>
                <h6 id="u3"><?php echo  $u. " : ";?></h6>
                <p id="u4">^^ Rasengan in your face <br/> No i joke WP Hokage !!</p>
            </div>
            <div class="ciseauxj" id="cj">
            <h4>YOU WIN !!</h4>
                <?php
                echo  "<p> WP : " . $u . " </p>";
                echo  "<p> BOUH : " . $nomrobot . " </p>";
                ?>
                <p>Leave the simulation</p>
                <div>
                    <a href="#" class="restart">RESTART</a>
                    <a href="../menu.php" class="quit">QUIT</a>
                </div>
            </div>
        </div>
    </section>
    <script src="../../assets/js/simu.js"></script>
</body>

</html>