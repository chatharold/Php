<?php

// we use the fopen function also to create a file
// in case does not exist
$open_file = fopen("newFile.txt", "w") 
or die("File not found, let create one");