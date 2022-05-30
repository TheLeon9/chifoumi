
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
                <?php
                $bdd = new PDO('mysql:host=localhost;dbname=chifoumi_db;','root', '');
                session_start();
                if (!$_SESSION['id']) {
                    header('Location: ../index.php');
                }
                $recupleader = $bdd->query("SELECT Win, Username, Lose FROM users ORDER BY Win DESC LIMIT 3");
                while($users = $recupleader->fetch()){
                    ?>
                    <h3><?= $users['Username'];?></h3>
                    <p><?= $users['Win'] ;?></p>
                    <p><?= $users['Lose'];?></p>

                    <?php
                }
                    

                ?>
                <a href="../php/menu.php">
                        <span></span><span></span><span></span><span></span>
                        Return
                    </a>
            </div>
        </div>
    </section>
</body>

</html>