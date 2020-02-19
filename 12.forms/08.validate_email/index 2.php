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
        // init var
        $email = $emailErr = "";

        function formatData($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        // method type
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["email"])) {
                $emailErr = "Email required";
            } else {
                $email = formatData($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email";
                }
            }
        }
    ?>
    <h3>Database</h3>
    <div>
        <?= $email; ?>
    </div>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="POST">
        Email: <input type="text" name="email">
        <span><?= "* {$emailErr}"; ?></span>
        <br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
