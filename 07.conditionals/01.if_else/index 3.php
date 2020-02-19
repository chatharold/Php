<?php
    // if 
    if (false) {
        echo "First" . "<br>";
    } elseif (true) {
        echo "Second" . "<br>"; // this wins
    } else {
        echo "Third" . "<br>";
    }

    // && 
    if (true && true) {
        echo "I am true (&&)" . "<br>";
    } else {
        echo "I am false (&&)" . "<br>";
    }

    // ||
    if (true || false) {
        echo "True (||)" . "<br>";
    } else {
        echo "False (||)" . "<br>";
    }

?>

<body>
    <!-- if - else: endif -->
    <?php if(false) : ?>
        <?= "First"; ?>
    <?php else: ?>
        <?= "Second"; // this wins ?> 
    <?php endif; ?>
</body>


