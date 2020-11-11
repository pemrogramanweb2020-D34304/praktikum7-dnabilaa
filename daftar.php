<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Register</title>
</head>
<body>
    <center>
        <h1>REGISTER</h1>
    <form action="klikdaftar.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="confirm_password" required></td>
            </tr>
        </table>
        <input type="submit" value="Register"><br>
        Sudah memiliki akun? <a href="login.php">Login -></a>
    </form>
    </center>
</body>
</html>