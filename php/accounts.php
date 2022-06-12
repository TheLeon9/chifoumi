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


if($level >= 0 && $level < 10 ){
    $title = "???";
}
elseif($level >= 10 && $level <20){
    $title = "SOLDIER";

}elseif($level >= 20 && $level < 30){
    $title = "SPECIAL_FORCE";
}
elseif($level >= 30 && $level < 40){
    $title = "GHOST";
}
elseif($level >= 40 && $level < 50){
    $title = "SHADOW";
}
elseif($level >= 50 && $level < 60){
    $title = "MARTIAL_MASTER";
}elseif($level >= 60 && $gender=="man"){
    $title = "THE_KING";
}
elseif($level >= 60 && $gender=="woman"){
    $title = "THE_QUEEN";
}
elseif($level >= 60 && $gender=="other"){
    $title = "THE_OTHER";
}

$imagegender= "";

if($gender == "man"){
    $imagegender = "man.png";
}elseif($gender == "woman"){
    $imagegender = "woman.png";
}else{
    $imagegender = "other.png";
}
$level = $win / 2;
$updateL = $bdd->prepare('UPDATE users SET level = ? WHERE Id= ?');
$updateL->execute(array($level , $id));

$_SESSION['level'] = $level;
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: ../index.php');
}
//name
    if (isset($_POST['newname'])){
        $username = htmlspecialchars($_POST["newname"]);
        $query = "SELECT Username FROM users WHERE Username=\"$username\"";
        $db_username = mysqli_query($bdd, $query);
        $alreadyexist = true;
        while ($row = mysqli_fetch_assoc($db_username)) {
            $user = $row['Username'];
        }
        if(!isset($user)){
            $alreadyexist = false;
            $updatenom = $bdd->prepare('UPDATE users SET Username = ? WHERE Id = ?');
            $updatenom->execute(array($username,$id));
            $u = $username;
            $_SESSION['name'] = $u;
        }
    }

//title
if (isset($_POST['validertitle'])){
    if(isset($_POST['newtitle']) != ""){
        $title = htmlspecialchars($_POST["newtitle"]);
    }
}
//SKIN
if (isset($_POST['v'])){
    if(isset($_POST['pp'])){
        $skinp = "cartoonP.png";
        $updateP = $bdd->prepare('UPDATE users SET skinp = ? WHERE Id= ?');
        $updateP->execute(array($skinp , $id));
    }
    else if(isset($_POST['p'])){
        $skinp = "defaultP.png";
        $updateP = $bdd->prepare('UPDATE users SET skinp = ? WHERE Id= ?');
        $updateP->execute(array($skinp, $id));
    }
    if(isset($_POST['ff'])){
        $skinf = "cartoonF.png";
        $updateF = $bdd->prepare('UPDATE users SET skinf = ? WHERE Id= ?');
        $updateF->execute(array($skinf , $id));
    }
    else if(isset($_POST['f'])){
        $skinf = "defaultF.png";
        $updateF = $bdd->prepare('UPDATE users SET skinf = ? WHERE Id= ?');
        $updateF->execute(array($skinf, $id));
    }
    if(isset($_POST['cc'])){
        $skinc = "cartoonC.png";
        $updateC = $bdd->prepare('UPDATE users SET skinc = ? WHERE Id= ?');
        $updateC->execute(array($skinc , $id));
    }
    else if(isset($_POST['c'])){
        $skinc = "defaultC.png";
        $updateC = $bdd->prepare('UPDATE users SET skinc = ? WHERE Id= ?');
        $updateC->execute(array($skinc, $id));
    }
    $_SESSION['skinp'] = $skinp;
    $_SESSION['skinf'] = $skinf;
    $_SESSION['skinc'] = $skinc;
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
            <div class="skinactuel">
                <h3>Your Skin :</h3>
                <p>CHI :</p>
                <?php
                echo  "<img src=\"../assets/images/pierre/".$skinp."\" alt=\"genre\">";
                ?>
                <p>FOU :</p>
                <?php
                echo  "<img src=\"../assets/images/feuille/".$skinf."\" alt=\"genre\">";
                ?>
                <p>MI :</p>
                <?php
                echo  "<img src=\"../assets/images/ciseaux/".$skinc."\" alt=\"genre\">";
                ?>
            </div>
            <div class="modifname" id="modifname">
                <div class="modifff">
                    <h3>Edit your Name</h3>
                    <?php
                        echo  "<p><strong>Actual Name : </strong>" . $u . " </p>";
                    ?>
                    <label for="newname">You want a new Name ?</label>
                    <label for="newname">Write it and "Edit"</label>
                    <form method="post" action="accounts.php" autocomplete="off">
                        <input type="text"  name="newname" id="new" placeholder="New Name Here" required>
                        <?php
                                if(isset($alreadyexist)){
                                    if($alreadyexist){
                                        echo  "<p class=\"exist\">Name already exist !</p>";
                                    }
                                }
                                ?>

                        <div>
                            <input type="submit" value="EDIT" class="edit" name="validername" />
                    </form>
                    <button class="cancel" onclick="hidemodifname()"><img src="../assets/images/profile/x.svg"
                            alt="cancel"></button>
                </div>
            </div>
        </div>
        <div class="modifname" id="modiftitle">
            <div class="modifff">
                <h3>Edit your Title</h3>
                <?php
                        echo  "<p><strong>Actual Title : </strong>" . $title . " </p>";
                    ?>
                <label for="newtitle">You want a new Title ?</label>
                <label for="newtitle">Write it and "Edit"</label>
                <form method="post" action="" autocomplete="off">
                    <input type="text" name="newtitle" id="new" placeholder="New Title Here" required>

                    <div>
                        <input type="submit" value="EDIT" class="edit" name="validertitle" />
                </form>
                <button class="cancel" onclick="hidemodiftitle()"><img src="../assets/images/profile/x.svg"
                        alt="cancel"></button>
            </div>
        </div>
        </div>
        <div class="welcome-carre">
            <h2>PROFILE</h2>
            <div class="default">
                <div class="left">
                    <?php
                        echo  "<p><strong>NAME : </strong>" . $u . " </p>";
            
                        echo  "<p><strong>GENDER : </strong><img src=\"../assets/images/profile/".$imagegender."\" alt=\"genre\"></p>";
                        echo  "<p><strong>TITLE : </strong>". $title ."</p>";
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
            <div class="secret" id="secret">
                <p onclick="cacher()" id="+">+</p>
                <div>
                    <h3><button onclick="showmodifname()"><img src="../assets/images/profile/edit.svg"
                                alt="modif"></button>
                        <-Edit Name</h3> <h3><button onclick="showmodiftitle()"><img
                                    src="../assets/images/profile/edit.svg" alt="modif"></button>
                            <-Edit Title</h3> </div> </div> <div class="cacher" id="cacher">
                                <div>
                                    <?php
                            echo  "<p><strong>ID : </strong>" . $id . " </p>";
                            echo  "<p><strong>Email : </strong>" . $em . " </p>";
                            ?>
                                </div>
                                <p><strong>Password : </strong> Really ? </p>
                </div>
                <div class="skin">
                    <p>Choose ! </p>
                    <form method="post" action="accounts.php" autocomplete="off">
                    <div>
                        <p>Chi skin : </p>
                            <div class="fo">
                                <input type="checkbox" name="p">
                                <label for="p"><img src="../assets/images/pierre/defaultP.png" alt=""> </label>
                                <input type="checkbox" name="pp">
                                <label for="pp"><img src="../assets/images/pierre/cartoonP.png" alt=""> </label>
                            </div>
                    </div>
                    <div>
                        <p>Fou skin : </p>
                        <div class="fo">
                            <input type="checkbox" name="f">
                            <label for="f"><img src="../assets/images/feuille/defaultF.png" alt=""> </label>
                            <input type="checkbox" name="ff">
                            <label for="ff"><img src="../assets/images/feuille/cartoonF.png" alt=""> </label>
                        </div>
                    </div>
                    <div>
                        <p>Mi skin : </p>
                        <div class="fo">
                            <input type="checkbox" name="c">
                            <label for="c"><img src="../assets/images/ciseaux/defaultC.png" alt=""> </label>
                            <input type="checkbox" name="cc">
                            <label for="cc"><img src="../assets/images/ciseaux/cartoonC.png" alt=""> </label>
                            <input type="submit" value="Choose" class="edit" name="v" />
                        </div>
                        </form>
                    </div>
                </div>
                <div class="logout">
                    <a href="./menu.php">Return ?</a>
                    <form method="post" action="?" autocomplete="off">
                        <button name="logout"><img src="../assets/images/profile/power.svg" alt="off"></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="../assets/js/login_signin.js"></script>
</body>

</html>