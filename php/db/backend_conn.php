<?php

$env = parse_ini_file('../.env');

$host = $env['MY_SQL_HOST'];
$username = $env["MY_SQL_USERNAME"];
$password = $env["MY_SQL_PASSWORD"];

// Database configuration
$db_host = $host;
$db_user = $username;
$db_pass = $password;
$db_name = 'blog';

// Connect to the database
$db = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check for errors
if ($db->connect_error) {
  die('Connect Error (' . $db->connect_errno . ') ' . $db->connect_error);
}
else {
  // echo 'connected';
}


// echo getenv('SHELL');
// foreach (getenv() as $key => $value) {
//     echo $key . ' - ' . $value;
// }
// echo apache_getenv('MY_SQL_USERNAME_LOCAL');




?>