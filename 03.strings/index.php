<?php

    // define 
    $f_name = "Harold";
    $l_name = "Ramos";

    // concat
    $full_name = $f_name ."-". $l_name;

    // character escape
    $quote = "She said: \"I love you more\"";

    // length
    $string_len = strlen("Hello World");

    // get character
    $string = "Harold";
    $sec_character = $string[1];

    // functions
    // uppercase && lowercase
    $str_lower = strtoupper("i am a lower case string");
    $str_upper = strtolower("I AM AN UPPERCASE STRING");

    // replace string
    $str_pike = "Pike";
    $str_poke = str_replace("Pi", "Po", $str_pike); 

?>

<body>
    <?php
        echo "Full name: {$full_name}" . "<br>";
        echo "Quote: {$quote}" . "<br>";
        echo "Length: ", $string_len . "<br>";
        echo "Second character: {$sec_character}" . "<br>";
        echo "Uppercase: ", $str_lower . "<br>";
        echo "Lowercase: ", $str_upper . "<br>";
        echo "Poke replaces Pike: ", $str_poke . "<br>";
    ?>
</body>