<?php

// create a file
$file = fopen("helloworld.txt", "w") or die("Unable to open, let me create it");

// write or overwrite text
$text = "Welcome to programming";
fwrite($file, $text);

// close
fclose($file);

// finish
die("Succesfully created");