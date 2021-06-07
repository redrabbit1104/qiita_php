<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php

$_SESSION['date'] = date('c');

echo $_SESSION['date'];
echo '<br>';

$_SESSION = [];

if(isset($_COOKIE['PHPSESSID'])){
  setcookie('PHPSESSID', '', time() - 3600, '/');
}

session_destroy();

// setcookie("id", '', time() -1800, '/');
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

echo '<pre>';
var_dump($_COOKIE);
echo '</pre>'
?>

</body>
</html>