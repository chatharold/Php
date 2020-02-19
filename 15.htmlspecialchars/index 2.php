<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
        <input type="text" name="username"><br><br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="submit">
    </form>
    <hr>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (!empty($_GET["username"])  || !empty("password")) {
                echo "User name = ", $_GET["username"] . "<br>";
                echo "Password = ", $_GET["password"] . "<br>";
            }
        }
    ?>
</body>
</html>
