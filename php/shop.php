<?php
$bdd = new mysqli('localhost', 'root', '', 'chifoumi_db');
session_start();
if (!$_SESSION['id']) {
    header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - Page</title>
    <link rel="stylesheet" href="../assets/css/shop_leader.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
</head>

<body>
    <section>
        <div class="welcome-page">
            <div class="welcome-carre-shop">
                <h2>Coming Soon <span>.</span> <span class="middle">.</span> <span>.</span></h2> 
                <div>
                    <img src="../assets/images/leader-shop/lego.svg" alt="lego">
                    <img src="../assets/images/leader-shop/lego2.svg" alt="lego">
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