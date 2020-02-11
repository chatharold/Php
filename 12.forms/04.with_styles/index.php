<?php
    $username = $email = "";

    if (isset($_POST["submit"])) {
        if (empty($_POST["username"]) || empty($_POST["email"])) {
            $username = "Please enter a username:";
            $email = "Please enter a valid email:";
        } else {
            $username = $_POST["username"];
            $email = $_POST["email"];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
        <h1>Create an account</h1>        
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
            <label for="username">User:</label>
            <input type="text" name="username" id="username" value="<?= htmlspecialchars($username); ?>">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?= htmlspecialchars($email); ?>">

            <input type="submit" name="submit" value="Submit" id="submit">
        </form>
    </div>
</body>
</html>