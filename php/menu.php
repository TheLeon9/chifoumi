<?php
$bdd = new mysqli('localhost', 'root', '', 'chifoumi_db');
session_start();
if (!$_SESSION['id']) {
    header('Location: ../index.php');
}

$u = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Page</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/menu.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
</head>

<body>
    <section>
        <div class="welcome-page">
            <!-- <p id="troll" class="troll">Made by ME !!</p> -->
            <button class="parametre" onclick="troll()"><img src="../assets/images/menu/settings.svg" alt="" ></button>

            <div class="welcome-carre">
                <div class="text">
                    <h2>Welcome <?php echo  "<p>". $u ."</p>";?></h2>
                </div>
                <div class="bas">
                    <div class="allbutton">
                        <div>
                            <p>Profile</p>
                            <img src="../assets/images/welcome/chevrons-down.svg" alt="fleche bas">
                            <a href="./accounts.php"><img src="../assets/images/menu/user.svg" alt="profile"></a>
                        </div>
                        <div> 
                            <p>VS bot</p>
                            <img src="../assets/images/welcome/chevrons-down.svg" alt="fleche bas">
                            <a href="./vsbot.php"><img src="../assets/images/menu/robot.svg" alt="robot"></a>
                        </div>

                        <div>
                            <p>1 vs 1</p>
                            <img src="../assets/images/welcome/chevrons-down.svg" alt="fleche bas">
                            <a href="./vsplayer.php"><img src="../assets/images/menu/1v1.svg" class="versus" alt="versus"></a>
                        </div>
                        <div>
                            <p>Shop</p>
                            <img src="../assets/images/welcome/chevrons-down.svg" alt="fleche bas">
                            <a href="./shop.php"><img src="../assets/images/menu/shopping-cart.svg" alt="shop"></a>
                        </div>
                        <div>
                            <p>LeaderBoard</p>
                            <img src="../assets/images/welcome/chevrons-down.svg" alt="fleche bas">
                            <a href="./leaderboard.php"><img src="../assets/images/menu/award.svg" alt="leader"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <script src="../assets/js/index.js"></script>

</body>

</html>