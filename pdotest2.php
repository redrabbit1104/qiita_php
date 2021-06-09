<?php

require 'pdotest.php';

// ユーザー入力なし query
$sql = 'select * from accounts where user_id = 1';  //sql

$stmt = $pdo -> query($sql);     //sql実行結果のステートメント

$result = $stmt -> fetchall();

var_dump($result);