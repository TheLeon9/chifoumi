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
    <title>Account - Page</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/account.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
</head>

<body>
    <section>
        <div class="welcome-page">
            <div class="welcome-carre">
                <h2>PROFILE</h2>
                <div class="default">
                    <div class="left">
                        <?php
                        echo  "<p><strong>NAME : </strong>" . $u . " </p>";
                        echo  "<p><strong>GENDER : </strong>" . $gender . " </p>";
                        echo  "<p><strong>TITLE : </strong>THE_KING  </p>";
                        ?>
                    </div>
                    <div class="right">
                        <?php
                            echo  "<p><strong>LEVEL : </strong>" . $level . " </p>";
                            echo  "<p><strong>WIN : </strong>" . $win . " </p>";
                            echo  "<p><strong>LOSE : </strong>" . $lose . " </p>";
                        ?>

                    </div>
                </div>
                <div class="secret" id ="secret">
                    <p onclick="cacher()" id="+">+</p>
                </div>
                <div class="cacher" id="cacher">
                    <div>
                        <?php
                            echo  "<p><strong>ID : </strong>" . $id . " </p>";
                            echo  "<p><strong>Email : </strong>" . $em . " </p>";
                            ?>
                    </div>
                    <p><strong>Password : </strong> Really ? </p>
                </div>
                <div class="skin">
                    <div>
                        <p>Choose chi skin : </p>

                    </div>
                    <div>
                        <p>Choose fou skin : </p>
                    </div>
                    <div>
                        <p>Choose mi skin : </p>
                    </div>
                </div>
                <div class="logout">
                    <a href="./menu.php">Return ?</a>
                    <form method="post" action="?" autocomplete="off">
                        <button name="logout" class="LOG OUT"><img src="../assets/images/profile/power.svg"
                                alt="off"></button>
                    </form>
                </div>
                <!-- <?php

                    //level - win - lose
                
                    //gender
                    echo "<img src=\"../assets/images/".$gender."\" alt=\"chi\">";
                    //pierre
                    echo  "<p><strong>Skin Chi : </strong>" . $skinp . " </p>";
                    echo "<img src=\"../assets/images/".$gender."\" alt=\"chi\">";
                    //feuille
                    echo  "<p><strong>Skin Fou : </strong>" . $skinf . " </p>";
                    echo "<img src=\"../assets/images/".$gender."\" alt=\"chi\">";
                    //ciseaux
                    echo  "<p><strong>Skin Mi  Lose : </strong>" . $skinc . " </p>";
                    echo "<img src=\"../assets/images/".$gender."\" alt=\"chi\">";
        
                    ?> -->
            </div>
        </div>
    </section>
    <script src="../assets/js/login_signin.js"></script>
</body>

</html>