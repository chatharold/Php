<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="POST">
        <label>Search user data: (name, age, id)</label> <br><br>
        <input type="text" name="username"><br><br>
        <input type="submit" name="submit">
    </form>
    <hr>

    <?php
        const user = [
            "name" => "Harold", 
            "age" => 34,
            "id" => 190
        ];

        if (isset($_POST["submit"])) {
            if (!empty($_POST["username"])) {
                echo user[$_POST["username"]] . "<br>";
            } 
        }
    ?>
</body>
</html>

