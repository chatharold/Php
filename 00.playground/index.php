<?php

// path
$path = "wow.txt";

// open
$open_file = fopen($path, "w") or die("Can not open file");

// add to the file
fwrite($open_file, "have a nice day");

fclose(($open_file));

die("Finished");