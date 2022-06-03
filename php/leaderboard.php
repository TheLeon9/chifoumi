<?php
$bdd = new PDO('mysql:host=localhost;dbname=chifoumi_db;','root', '');
session_start();
if (!$_SESSION['id']) {
    header('Location: ../index.php');
}
//1
$tour = 1;
$pnom ="";
$pwin =0;
$plose =0;
$plevel =0;
//2
$snom ="";
$swin =0;
$slose =0;
$slevel =0;
//3
$tnom ="";
$twin =0;
$tlose =0;
$tlevel =0;
$recupleader = $bdd->query("SELECT Win, Username, Lose, Level FROM users ORDER BY Win DESC LIMIT 3");
while($users = $recupleader->fetch()){ 
    if($tour == 1){
        $pnom = $users['Username'];
        $plevel = $users['Level'];
        $pwin =   $users['Win'] ;
        $plose =     $users['Lose'];
        $tour++;
    }elseif($tour == 2){
        $snom = $users['Username'];
        $slevel = $users['Level'];
        $swin =   $users['Win'] ;
        $slose =     $users['Lose'];
        $tour++;
    }else{
        $tnom = $users['Username'];
        $tlevel = $users['Level'];
        $twin =   $users['Win'] ;
        $tlose =     $users['Lose'];
    }
}
                    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeaderBord - Page</title>
    <link rel="stylesheet" href="../assets/css/shop_leader.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
</head>

<body>
    <section>
        <div class="welcome-page">
            <div class="welcome-carre-leader">
                <h2>LeaderBord</h2>
                <div class="podium">
                    <div class="s">
                        <img src="../assets/images/leader-shop/2st.svg" alt="2">
                            <?php
                            echo "<h3>".$snom."</h3>";
                            ?>
                        <div>
                            <?php
                            echo "<p> <strong>Level : </strong> ".$slevel."</p>";
                            echo "<div class=\"flex\">";
                            echo "<p> <strong>W : </strong> ".$swin."</p>";
                            echo "<p> <strong>L :  </strong>".$slose."</p>";
                            echo "</div>";
                            ?>
                        </div>
                    </div>
                    <div class="p">
                    <img src="../assets/images/leader-shop/1st.svg" alt="1">
                        <?php
                            echo "<h3>".$pnom."</h3>";
                            ?>
                        <div>
                        <?php
                            echo "<p> <strong>Level : </strong> ".$plevel."</p>";
                            echo "<div class=\"flex\">";
                            echo "<p> <strong>W :  </strong>".$pwin."</p>";
                            echo "<p> <strong>L :  </strong>".$plose."</p>";
                            echo "</div>";
                            ?>
                        </div>
                    </div>
                    <div class="t">
                    <img src="../assets/images/leader-shop/3st.svg" alt="3">
                        <?php
                            echo "<h3>".$tnom."</h3>";
                            ?>
                        <div>
                        <?php
                            echo "<p> <strong>Level : </strong> ".$tlevel."</p>";
                            echo "<div class=\"flex\">";
                            echo "<p> <strong>W :  </strong>".$twin."</p>";
                            echo "<p> <strong>L :  </strong>".$tlose."</p>";
                            echo "</div>";
                            ?>
                        </div>
                    </div>

                </div>
                <a href="../php/menu.php">
                    <span></span><span></span><span></span><span></span>
                    Return
                </a>
            </div>
        </div>
    </section>
</body>

</html>
<div></div>