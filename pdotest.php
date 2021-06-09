<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pdotest</title>
</head>
<body>

<?php
  const DB_HOST = 'mysql:dbname=time_card_app;host=localhost:8889;charset=utf8';
  const DB_USER = 'time_card_user';
  const DB_PASSWORD = 'wlfkfakfk12'; 



  // 例外処理 Exception
  try{
    $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD, [ 
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
    ]);
    echo 'connection successful';
  }catch(PDOException $e){
    echo $e -> getMessage() . "\n";
    exit();
  }
?>

</body>
</html>