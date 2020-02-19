<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="GET">
        <label for="user-name">Username:</label>
        <input type="text" name="username" id="user-name"><br><br>
        <input type="submit" name="submit">
    </form>
    <hr>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $name_entered = $_REQUEST["username"];
            if (empty($name_entered)) {
                echo "No name has been set";
            } else {
                echo "Name = ", $name_entered;
            }
        }
    ?>
</body>
</html>