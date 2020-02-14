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
        // set variables
        $url = $urlErr = "";

        // check method type
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["url"])) {
                $urlErr = "Required field";
            } else {
                $url = filter_var($_POST["url"], FILTER_VALIDATE_URL);
            }
        }
    ?>
    <h3>Database</h3>
    <div>
        <?= $url; ?>
    </div>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        Url: <input type="text" name="url" value="<?= htmlspecialchars($url); ?>">
        <span><?= "* {$urlErr}"; ?></span>
        <br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
