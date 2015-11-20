<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
  return false;    // сервер возвращает файлы напрямую.
} else {
  echo "<p>Welcome to PHP</p>";
}
$dbc = mysqli_connect ('127.0.0.1', 'root', '', 'aliendatabase') or die ('Error with mysql connection');

$query = "insert into aliens_abduction (first_name, last_name, when_it_happend,
 how_long, how_many, alien_description,
  what_they_did, fang_spotted,other,email) values
   ('Sally', 'Johns', '3 day ago', '1 day', 'four', 'green with tentakles',
   'just tok play with dog','yes','maby i saw your dog','sally@gregs-list.net')";
$result = mysqli_query($dbc,$query) or die ('Error with mysql executing');
mysqli_close($dbc);


$when_it_happend = $_POST['whenithappend'];
$how_long = $_POST['howlong'];
$how_many = $_POST['howmany'];
