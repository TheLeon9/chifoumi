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

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Versus_PLAYER - Page</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/vsmenu.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
</head>

<body>
    <section>
        <div class="welcome-page">
            <div class="glo">
                <div class="rightside">
                    <h2>VERSUS Player</h2>
                    <div>
                        <p>Bo1 : 1 life</p>
                        <p>- You earn nothing</p>
                        <p>Bo3 : 2 life</p>
                        <p>- You earn nothing</p>
                        <p>Bo5 : 3 life</p>
                        <p>- You can earn something</p>
                    </div>
                    <p>What do you want ?</p>
                    <div class="formss">
                        <button  onclick="showmiddlebo1()"> BO1 </button>
                        <button  onclick="showmiddlebo3()">BO3 </button>
                        <button   onclick="showmiddlebo5()">BO5</button>
                    </div>
                </div>
                <div class="middlesideplayer" id="m">
                    <h2>VERSUS Player</h2>
                    <?php echo  "<p> Alright : <span>". $u ."</span></p>";?>
                    <div id="bo1" class="boone">
                        <p>You choose BO1</p>
                    </div>
                    <div id="bo3" class="bothree">
                        <p>You choose BO3</p>
                    </div>
                    <div id="bo5" class="bofive">
                        <p>You choose BO5</p>
                    </div>
                        <p>After cliking on "NEXT" choose one of them :</p>
                        <p>- Create a Session</p>
                        <p>- Join a Session</p>
                        <p>- See a simulation</p>
                        <div class="bu">
                            <button onclick="showbutton1()" id="bo11">NEXT BO1</button>
                            <button onclick="showbutton2()" id="bo33">NEXT BO3</button>
                            <button onclick="showbutton3()" id="bo55">NEXT BO5</button>
                        </div>
                </div>
                <div class="leftsideside" id="but0">
                    <h2>VERSUS Player</h2>
                    <div id="but1">
                        <span>Bo1</span>
                        <a href="#">Create a Session</a>
                        <a href="#">Join a Session</a>
                        <a href="./simulation/sim1.php">See a simulation</a>
                    </div>
                    <div id="but2">
                        <span>Bo3</span>
                        <a href="#">Create a Session</a>
                        <a href="#">Join a Session</a>
                        <a href="./simulation/sim2.php">See a simulation</a>
                    </div>
                    <div id="but3">
                        <span>Bo5</span>
                        <a href="#">Create a Session</a>
                        <a href="#">Join a Session</a>
                        <a href="./simulation/sim3.php">See a simulation</a>
                    </div>
                </div>
            </div>
            <a href="./menu.php" class="return">Return ?</a>
        </div>
    </section>
    <script src="../assets/js/login_signin.js"></script>
</body>

</html>