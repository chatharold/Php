<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="POST">
        User: <input type="text" name="username"> <br><br>
        Pass: <input type="password" name="password"> <br><br>
        <input type="submit" name="submit">
    </form>
    <hr>
    <?php
        if (isset($_POST["submit"])) {
            if (!empty($_POST["username"])) {
                echo "Username = ", htmlspecialchars($_POST["username"]) . "<br>";            
            }  

            if (!empty($_POST["password"])) {
                echo "Password = ", htmlspecialchars($_POST["password"]) . "<br>";
            }
        }
    ?>
</body>
</html>