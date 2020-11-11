<?php
    require_once("koneksi.php");

    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $confirmpassword = md5($_POST["confirm_password"]);

    if ($password != $confirmpassword) {
        echo "<center>";
        echo "<h2>Register Failed</h2><br>";
        echo "<a href='daftar.php'><- Back</a>";
        echo "</center>";
    } else {
        $sql = "INSERT INTO user(iduser, username, pass)
                    VALUES ('NULL','$username','$password')";
        $result = mysqli_query($conn, $sql);
        header("location: login.php");      
    }
?>