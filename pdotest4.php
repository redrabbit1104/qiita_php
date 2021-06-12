<?php

require 'pdotest.php';

$pdo->beginTransaction();

try {
    //sql処理
    $sql = 'select * from accounts where user_id = ?'; //疑問符place holder
    $stmt = $pdo->prepare($sql);     //sql文を実行する準備を行う。戻り値はPDOStatement
    $stmt->bindValue(1, 1, PDO::PARAM_INT);   //値の紐付け
    $stmt->execute(); //実行

    $pdo->commit();
    $result = $stmt->fetchall();
    var_dump($result);
} catch (PDOException $e) {
    $pdo->rollback();    //処理のキャンセル
    echo $e;
}
