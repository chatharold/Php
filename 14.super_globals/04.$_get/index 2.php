<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
        Username: <input type="text" name="username"> <br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" name="submit">
        <hr>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                if (!empty($_GET["username"]) || !empty($_GET["password"])) {
                    echo "User = ", htmlspecialchars($_GET["username"]) . "<br>";
                    echo "Password = ", htmlspecialchars($_GET["password"]) . "<br>"; 
                }
            }
        ?>
    </form>
</body>
</html>