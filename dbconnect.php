<?php

  $DB_HOST='localhost'; //this is the host, usually WAMP
  $DB_USER='root'; //this is the username
  $DB_PASS=''; //this is password
  $DB_NAME='util.test'; //this is the database name

$dbc = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS); //makes a variable and attempts to connect

if (!$dbc) die ("Unable to select database" .mysqli_error($dbc)); //this throws up an error if connection is refused

mysqli_select_db($dbc, $DB_NAME)
  or die('could not select db');
  //attempts to connect the specific database within an account
?>
