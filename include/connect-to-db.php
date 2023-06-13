<?php
// include for connecting to the database
define('DB_HOST', 'localhost');
define('DB_USER', 'zfortin_sdev355');
define('DB_PASSWORD', 'C3Nkuwzd!');
define('DB_NAME', 'zfortin_grcc');
// open connection to the database
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
mysqli_set_charset($connection, 'utf8');
?>
