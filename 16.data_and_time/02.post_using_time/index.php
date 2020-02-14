<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            border: 2px solid tomato;
            padding: 2em;
            margin: 1em;
        }
    </style>
</head>
<body>
    <h2>Database</h2>
    <?php
        // set variables
        $date = $name = $nameErr = $password = $passErr = "";

        // formatData
        function formatData($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = str_replace(" ", "", $data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty ($_POST["name"]) || empty($_POST["password"])) {
                $nameErr = "Username required";
                $passErr = "Password required";
            } else {
                $name = formatData($_POST["name"]);
                $password = formatData($_POST["password"]);

                // sets the zone
                date_default_timezone_set("America/New_York");
                $date = date("h:i:sa");
            }
        }
    ?>
    <div>
        <?= "{$name} <br>";?>
        <?= "{$password} <br>" ;?>
        <?= "{$date} <br>" ;?>
    </div>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="POST">
        Name: <input type="text" name="name" value="<?= $name; ?>">
        <span><?= "* {$nameErr}"; ?></span>
        <br><br>
        Password: <input type="password" name="password" value="<?= $password; ?>">
        <span><?= "* {$passErr}"; ?></span>
        <br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>