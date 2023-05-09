<?php
require("connect_db.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autorizēšanās</title>
    <link rel="stylesheet" href="./style_login.css">
</head>
<body>
    <h2>Lūdzu Autorizējaties</h2>
    <div class="field">
        <form action = "Sākums.php" method = "post">
            <input type = "text" name = "Username" placeholder = "Lietotājvārds" required = ""><br>
            <input type = "password" name = "Pass" placeholder = "Parole" rquired = ""><br>
            <input class = "button" type = "submit" name = "login" value = "Autorizēties">
    </div>

    <?php
        if(isset($_POST ['login'])){
            $Lietotajvards = $_POST['Username'];
            $Parole = $_POST['Pass'];

        $select = mysqli_query($conn, "SELECT * FROM lietotaji WHERE Username = '$Lietotajvards' AND Pass = '$Parole' ");
        $row - mysqli_fetch_array($select);
        
        if(is_array($row)){
            $_SESSION["Username"] = $row ['Username'];
            $_SESSION["Pass"] = $row ['Pass'];
        }else{
            echo '<script type = "text/javascript">';
            echo 'alert("invalid Username or Password!")';
            echo 'window.location.href = "Sākums.php" ';
            echo '</script>';
        }
        }
        if(isset($_SESSION["Username"])){
            header("Location:login.php");
        }
    ?>
</body>
</html>