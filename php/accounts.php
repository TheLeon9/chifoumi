<?php
$bdd = new mysqli('localhost', 'root', '', 'chifoumi_db');
session_start();
if (!$_SESSION['id']) {
    header('Location: ../index.php');
}


$u = $_SESSION['name'];

$em = $_SESSION['email'];

$m = $_SESSION['mdp'];

$id = $_SESSION['id'];

$level = $_SESSION['level'];

$win = $_SESSION['win'];

$lose = $_SESSION['lose'];



if (isset($_POST['logout'])) {
    echo "oui";
    session_destroy();
    header('Location: ./inscription.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" type="text/css" href="../css/ban.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
</head>

<body>
    <section>
        <section class="all">
            <?php
            echo  "<p><strong>You : </strong>" . $u . " </p>";
            echo  "<p><strong>Email : </strong>" . $em . " </p>";
            echo  "<p><strong>Password : </strong>" . $m . " </p>";
            echo  "<p><strong>ID : </strong>" . $id . " </p>";
            echo  "<p><strong>Level : </strong>" . $level . " </p>";
            echo  "<p><strong>Nombre de Win : </strong>" . $win . " </p>";
            echo  "<p><strong>Nombre de  Lose : </strong>" . $lose . " </p>";

            ?>

        </section>
    </section>

</body>

</html>