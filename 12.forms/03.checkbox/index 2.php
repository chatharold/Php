<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="POST">
        <label>Pick what you like to eat:</label> <br><br>
        Bread: <input type="checkbox" name="foods[]" value="bread"> <br><br>
        Salad: <input type="checkbox" name="foods[]" value="salad"> <br><br>
        Pizza: <input type="checkbox" name="foods[]" value="pizza"> <br><br>
        Shrimp: <input type="checkbox" name="foods[]" value="shrimp"> <br><br>
        <input type="submit" name="submit">
    </form>
    <hr>
    <h2>Results:</h2>
    <?php 
        // thinking process
        // echo $_POST["foods"][0]. "<br>";
        // echo $_POST["foods"][1] . "<br>";
        // echo $_POST["foods"][2] . "<br>";
        // echo $_POST["foods"][3] . "<br>";

        // get all at once
        if (isset($_POST["submit"])) { // once you click submit
            if (!empty($_POST["foods"])) { // check for empty fields
                foreach($_POST["foods"] as $food) {
                    echo "Food = ", $food . "<br>"; // loop over them
                }
            }
        }
    ?>
</body>
</html>