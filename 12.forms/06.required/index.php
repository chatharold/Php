<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span {
            color: tomato;
        }
    </style>
</head>
<body>
    <?php
        // variables
        $name = $email = $gender = "";
        $nameErr = $emailErr = $genderErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // extra sanitize the data (" ", /, XSS) 
            function cleanData($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            // name
            if (!empty($_POST["username"])) {
                $name = cleanData($_POST["username"]);
                echo "User = ", $name . "<br>";
            } else {             
                $nameErr = "Username is required";
            }
            // email
            if (!empty($_POST["email"])) {
                $email = cleanData($_POST["email"]);
                echo "Email = ", $email . "<br>";
            } else {
                $emailErr = "Email required";
            }
            // gender
            if (!empty($_POST["email"])) {
                $gender = cleanData($_POST["gender"]);
                echo "Gender = ", $gender . "<br>";
            } else {
                $genderErr = "Gender required";
            }
         }
    ?>
    <form 
     action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
     method="POST">
        <label>Username:</label>
        <input type="text" name="username">
        <span><?php echo "*", $nameErr; ?></span>
        <br><br>
       
        <label>Email:</label>
        <input type="text" name="email">
        <span><?php echo "*", $emailErr; ?></span>
        <br><br>

        <label>Gender:</label><br><br>
        Male: <input type="radio" name="gender" value="male">
        Female: <input type="radio" name="gender" value="female">
        <span><?php echo "*", $genderErr; ?></span>
        <br><br>
        
        <input type="submit" name="submit">
    </form> 
</body>
</html>