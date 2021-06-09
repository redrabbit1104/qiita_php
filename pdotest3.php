<?php

require 'pdotest.php';

// ユーザー入力あり 
// $sql = 'select * from accounts where user_id = :id';  //名前付きplace holder
// $stmt = $pdo -> prepare($sql);     //sql文を実行する準備を行う。戻り値はPDOStatement
// $stmt -> bindValue('id', 4, PDO::PARAM_INT);    //値の紐付け

$sql = 'select * from accounts where user_id = ?'; //疑問符place holder
$stmt = $pdo -> prepare($sql);     //sql文を実行する準備を行う。戻り値はPDOStatement
$stmt -> bindValue(1, 1, PDO::PARAM_INT);   //値の紐付け

$stmt -> execute(); //実行

$result = $stmt -> fetchall();

var_dump($result);