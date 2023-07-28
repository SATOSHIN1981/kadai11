<?php

//PHP:コード記述/修正の流れ
//1. insert.phpの処理をマルっとコピー。
//2. $id = $_POST["id"]を追加
//3. SQL修正
//   "UPDATE テーブル名 SET 変更したいカラムを並べる WHERE 条件"
//   bindValueにも「id」の項目を追加
//4. header関数"Location"を「select.php」に変更

$name = $_POST['name'];
$user_id = $_POST['user_id'];
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$id = $_POST['id'];

require_once('model.php');

//2. DB接続します
$pdo = db_connect();



$stmt = $pdo->prepare(
    'UPDATE kadai02_table 
        SET uid=:uid,
            name=:name,
            q1=:q1,
            q2=:q2,
            q3=:q3
    WHERE id=:id;'
);

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':uid', $user_id, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':q1', $q1, PDO::PARAM_INT);
$stmt->bindValue(':q2', $q2, PDO::PARAM_INT);
$stmt->bindValue(':q3', $q3, PDO::PARAM_INT);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

$status = $stmt->execute(); //実行


//３．データ表示
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    header('Location: select.php') ;
    exit;
}



