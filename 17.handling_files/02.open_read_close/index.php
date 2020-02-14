<?php

/**
 *  => Modes	Description
r	Open a file for read only. File pointer starts at the beginning of the file
w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x	Creates a new file for write only. Returns FALSE and an error if file already exists
r+	Open a file for read/write. File pointer starts at the beginning of the file
w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+	Creates a new file for read/write. Returns FALSE and an error if file already exists
 */

// 1. read multiple lines with freads
// file path
$path = "file.txt";

// open file
$opened_file = fopen($path, "r") or die ("Unable to open the file");

// read file and print [multiple lines ]
echo fread($opened_file, filesize($path)) . "<br>";

// close file
fclose($opened_file);

//////////////////////////////////////////////////////

// 2. read single line with 
// file path
$path = "file.txt";

// open file
$opened_file = fopen($path, "r") or die ("Unable to open the file");

// read file and print [ single line ]
echo fgets($opened_file) . "<br>";

// close file
fclose($opened_file);


//////////////////////////////////////////////////////

// 3. feof() with while and fgets()
// read until the end of file line by line
$path = "file.txt";

// open file
$opened_file = fopen($path, "r") or die ("Can not read file");

// read until the end of file
while(!feof($opened_file)) {
    echo fgets($opened_file) . "<br>";
}

// close file
fclose($opened_file);

//////////////////////////////////////////////////////

// 4. read single character fgetc() 
$path = "file.txt";

// open file
$opened_file = fopen($path, "r") or die ("Can not open file");

// read and print
while(!feof($opened_file)) {
    echo fgetc($opened_file) . "<br>";
}

// close file
fclose($opened_file);