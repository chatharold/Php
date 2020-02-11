<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="GET">
        User: <input type="text" name="username"> <br><br>
        Pass: <input type="password" name="password"> <br><br>
        <input type="submit" name="submit">
    </form>
    <hr>
    <?php
        if (isset($_GET["submit"])) {
            if (!empty($_GET["username"])) {
                echo "Username = ", htmlspecialchars($_GET["username"]) . "<br>";            
            }  

            if (!empty($_GET["password"])) {
                echo "Password = ", htmlspecialchars($_GET["password"]) . "<br>";
            }
        }
    ?>
</body>
</html>