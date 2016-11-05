<?php
  include "dbconnect.php";
  $ = $_POST['']; //receives result from the form

  $="select ______ FROM listings WHERE ______ = '$______'"; //this is a database query

  $homeResults=mysqli_query($dbc, $results) or die(mysqli_error($dbc)); //runs the database connect and the senior query, or returns an error if failed
  echo '<h3>Your Results</h3>'; //prints results in a table

while ($list = mysqli_fetch_row($homeResults)){
  echo '';
  echo $list[0];
  echo '';
  echo $list[1];
  echo '';
  echo $list[2];
  echo '';
  echo $list[3];
  echo '<br /><br />';

}
//runs a loop for as many times as the $homeResults query returns a true result
?>
