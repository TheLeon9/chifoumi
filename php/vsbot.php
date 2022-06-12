<?php
$bdd = new mysqli('localhost', 'root', '', 'chifoumi_db');
session_start();
if (!$_SESSION['id']) {
    header('Location: ../index.php');
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

//difficulté
$diff = "";
if (isset($_POST['ez'])) {
    $diff = "easy";
}
else if (isset($_POST['med'])) {
    $diff = "medium";
}
else if(isset($_POST['hard'])) {
    $diff = "hard";
}

//bo
$bo = "??";
if (isset($_POST['boone'])) {
    $bo = "1";
}
else if (isset($_POST['bothree'])) {
    $bo = "3";

}
else if(isset($_POST['bofive'])) {
    $bo = "5";
}

if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Versus_BOT - Page</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/vsmenu.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
</head>

<body>
    <section>
        <div class="welcome-page">
            <div class="glo">
                <div class="rightside" id="r">
                    <h2>VERSUS BOT</h2>
                    <div>
                        <p>Easy :</p>
                        <p>- You earn nothing</p>
                        <p>Medium :</p>
                        <p>- You earn nothing</p>
                        <p>Hard :</p>
                        <p>- You can earn something</p>
                    </div>
                    <p>What do you want ?</p>
                    <form method="post" action="./vsbot.php" autocomplete="off">
                        <button type="submit" name="ez" onclick="showmiddle()"> Easy <img src="../assets/images/menu/robotfacile.png"
                                alt="ez"></button>
                        <button type="submit" name="med" onclick="showmiddle()" >Medium <img src="../assets/images/menu/robotmoyen.png"
                                alt="ez"></button>
                        <button type="submit" name="hard" onclick="showmiddle()">Hard <img src="../assets/images/menu/robothard.png"
                                alt="ez"></button>
                    </form>
                </div>
                <div class="middleside" id="m">
                    <h2>VERSUS BOT</h2>
                    <p>You choose level : <?php echo  "<span>". $diff ."</span>";?></p>
                    <?php
                if (isset($_POST['ez'])) { 
                ?>
                    <p>In easy mode, only "Bo1" is available</p>
                    <p>- Bo1 = 1 life</p>
                    <form method="post" action="./vsbot.php" autocomplete="off">
                        <button name="boone" onclick="showlast()">Bo1</button>
                    </form>
                    <?php    
                }elseif(isset($_POST['med'])){
                    ?>
                    <p>In medium mode, only "Bo3" is available</p>
                    <p>- Bo3 = 2 life</p>
                    <form method="post" action="./vsbot.php" autocomplete="off">
                        <button type="submit" name="bothree" onclick="showlast()">Bo3</button>
                    </form>
                    <?php

                }
                else{
                ?>
                    <p>In hard mode, only "Bo5" is available</p>
                    <p>- Bo5 = 3 life</p>
                    <p>- Your earn 1 win if you win and 0.5 level</p>
                    <p>- But if you lose you earn 1 lose and no level</p>
                    <form method="post" action="./vsbot.php" autocomplete="off">
                        <button type="submit" name="bofive" onclick="showlast()">Bo5</button>
                    </form>
                <?php
                }
                ?>
                </div>
                <div class="leftside" id="l">
                    <h2>VERSUS BOT</h2>
                    <p>Alright !</p>
                    <p>You choose level : 
                        <?php 
                        if(isset($_POST["boone"])){
                            echo  "<span>easy</span>";
                        }
                        else if(isset($_POST["bothree"])){
                            echo  "<span>medium</span>";
                        }
                        else if(isset($_POST["bofive"])){
                            echo  "<span>hard</span>";
                        }
                        else{
                            echo  "<span>??</span>";
                        }
                        ?>
                    </p>
                    <p>With Bo : <?php echo  "<span>". $bo ."</span>";?></p>
                    <?php
                    if($bo == '1'){
                    ?>
                    <button><a href="./botfight/bo1.php">Let's go</a></button>
                    <?php
                    }
                    if($bo == '3'){
                        ?>
                    <button><a href="./botfight/bo2.php">Let's go</a></button>
                    <?php
                    }
                    if($bo == '5'){
                    ?>
                    <button><a href="./botfight/bo3.php">Let's go</a></button>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <a href="./menu.php" class="return">Return ?</a>
        </div>
    </section>
    <script src="../assets/js/login_signin.js"></script>
</body>

</html>