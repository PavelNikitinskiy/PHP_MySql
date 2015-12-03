<?php

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$when_it_happened = $_POST['whenithappend'];
$how_long = $_POST['howlong'];
$how_many = $_POST['howmany'];
$alien_description = $_POST['aliendescription'];
$what_they_did = $_POST['whattheydid'];
$fang_spotted = $_POST['fangspotted'];
$email = $_POST['email'];
$other = $_POST['other'];
$dbc = mysqli_connect ('127.0.0.1', 'root', '', 'aliendatabase') or die ('Error with mysql connection');

$query = "insert into aliens_abduction (first_name, last_name, when_it_happend,
 how_long, how_many, alien_description,
  what_they_did, fang_spotted,other,email) values
   ('$first_name', '$last_name', '$when_it_happened', '$how_long', '$how_many', '$alien_description',
   '$what_they_did','$fang_spotted','$other','$email')";
$result = mysqli_query($dbc,$query) or die ('Error with mysql executing');
mysqli_close($dbc);
if ($_POST) {
  echo "Sank you</br>";
  echo "$first_name $last_name</br>";
  echo "$when_it_happened</br>";
  echo "$how_long</br>";
  echo "$how_many</br>";
  echo "$alien_description</br>";
  echo "$what_they_did</br>";
  echo "$fang_spotted</br>";
  echo "$email</br>";
  echo "$other </br>";
}
