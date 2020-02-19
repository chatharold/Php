<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- using require -->
    <?php require("header.php"); ?>

    <!-- fatal error stops the script -->
    <?php require("anyfile.php"); ?>

    <?php require("footer.php"); ?>
</body>
</html>