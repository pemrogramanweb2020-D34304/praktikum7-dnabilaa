<!doctype html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
   
    <h1>halaman login</h1>
    <form action="kliklogin.php" method="post">
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" required></td>
        </tr>
    </table>
    <input type="submit" value="Login"><br>
    <a href=".php">register -></a>
    </form>
    
</body>
</html>