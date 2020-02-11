<?php

 // superglobals: are accessible from any scope
////////////////////////////////////////////// $GLOBALS

// 1. GLOBALS[""]
// $first = 10;
// $second = 20;


// function displayValue() {
//     echo "Sum = ", $GLOBALS["first"] + $GLOBALS["second"];
// }
// displayValue();

////////////////////////////////////////////// $_SERVER

// IMPORTANT
// 2. $_SERVER["PHP_SELF"]
// echo "PHP_SELF = ", $_SERVER["PHP_SELF"];
// => /php-course/00.playground/index.php


// 3. $_SERVER["GATEWAY_INTERFACE"]
// echo "GATEWAY_INTERFACE = ", $_SERVER["GATEWAY_INTERFACE"];
// => CGI/1.1


// 4. $_SERVER["SERVER_ADDR"]
// echo "SERVER_ADDR = ", $_SERVER["SERVER_ADDR"];
// => ::1


// 5. $_SERVER["SERVER_NAME"]
// echo "SERVER_NAME = ", $_SERVER["SERVER_NAME"];
// => localhost


// 5. $_SERVER["SERVER_SOFTWARE"]
// echo "SERVER_SOFTWARE = ", $_SERVER['SERVER_SOFTWARE'];
// =>  Apache/2.2.34 (Unix) mod_wsgi/3.5 Python/2.7.13 
// => PHP/7.3.8 mod_ssl/2.2.34 OpenSSL/1.0.2o 
// => DAV/2 mod_fastcgi/mod_fastcgi-SNAP-0910052141 
// => mod_perl/2.0.10 Perl/v5.24.0


// 6. $_SERVER["SERVER_PROTOCOL"]
// echo "SERVER_PROTOCOL = ", $_SERVER["SERVER_PROTOCOL"];
// => HTTP/1.1


// IMPORTANT
// 7. $_SERVER["REQUEST_METHOD"]
// echo "REQUEST_METHOD = ", $_SERVER["REQUEST_METHOD"];
// => GET
// -> POST


// IMPORTANT
// 8. $_SERVER["QUERY_STRING"]
// echo "QUERY_STRING = ", $_SERVER["QUERY_STRING"];
// => /?name=james

// 9. $_SERVER["REQUEST_TIME"]
// echo "REQUEST_TIME = ", $_SERVER["REQUEST_TIME"];
// => 1581308523


// 10. $_SERVER["HTTP_ACCEPT"]
// echo "HTTP_ACCEPT = ", $_SERVER["HTTP_ACCEPT"];
// => text/html,application/xhtml+xml,application/xml;
// => q=0.9,image/webp,image/apng,*/*;
// => q=0.8,application/signed-exchange;v=b3;q=0.9


// 11. $_SERVER["HTTP_HOST"]
// echo "HTTP_HOST = ", $_SERVER["HTTP_HOST"];
// => localhost:8888


// 12. $_SERVER["REMOTE_PORT"]
// echo "REMOTE_PORT = ", $_SERVER["REMOTE_PORT"];
// => 59968


// 13. $_SERVER["SERVER_ADMIN"]
// echo "SERVER_ADMIN = ", $_SERVER["SERVER_ADMIN"];
// => you@example.com


// 14. $_SERVER["SERVER_PORT"]
// echo "SERVER_PORT = ", $_SERVER["SERVER_PORT"];
// => 8888


// 15. $_SERVER["SCRIPT_NAME"]
// echo "SCRIPT_NAME = ", $_SERVER["SCRIPT_NAME"];
// => /php-course/00.playground/index.php
