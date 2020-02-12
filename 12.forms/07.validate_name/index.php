<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            margin: 2rem 0;
            border: 2px solid tomato;
            height: 100px;
        }
    </style>
</head>
<body>
    <?php 
        // 1. variables
        $name = $nameErr = "";

        // 2. " whitespace ", "whi te sp ace", slashes, entities
        function formatData($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = str_replace(" ", "", $data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["username"])) {
                $nameErr = "Username is required";
            } else {
                $name = formatData($_POST["username"]);               
                if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                    $nameErr = "Letters and white space only";
                }
            }
        }
    ?>
    <div>
        <?php
            echo $name;
        ?>
    </div>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="POST">
        Name: <input type="text" name="username">
        <span><?= "* {$nameErr}"; ?></span>
        <br><br>
        <input type="submit" name="submit">
    </form>    
</body>
</html>
