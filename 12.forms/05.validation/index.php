<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        Name: <input type="text" name="name"><br><br>
        Email:<input type="email" name="email"><br><br>
        Married: <br>
        Yes: <input type="radio" name="married" value="yes" checked>
        No: <input type="radio" name="married" value="no"><br><br>
        Description:
        <textarea name="description" cols="50" rows="10"></textarea><br><br>
        <input type="submit" name="submit">
        <hr>
   </form>
   <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = setData($_POST["name"]);
            $email = setData($_POST["email"]);
            $married = setData($_POST["married"]);
            $textarea = setData($_POST["description"]);
        }       

        function setData($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }        
   ?>  
   <?php
        echo "Username = ", $name . "<br>";
        echo "Email = ", $email . "<br>";
        echo "Radio = ", $married . "<br>";
        echo "Textarea = ", $textarea . "<br>";
   ?>
</body>
</html>