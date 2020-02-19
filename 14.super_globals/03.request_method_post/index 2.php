<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="POST">
        <input type="text" name="username"><br><br>
        <input type="submit" name="submit">
    </form>
    <hr>
    <?php 
        // 1. check the method type
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_REQUEST["username"]; // fetch form data
            if (empty($name)) {
                echo "Empty value";
            } else {
                echo "Name = ", $name;
            }
        }
    ?>
</body>
</html>