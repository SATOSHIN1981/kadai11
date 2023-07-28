<?php

/**
 * [ここでやりたいこと]
 * 1. クエリパラメータの確認 = GETで取得している内容を確認する
 * 2. select.phpのPHP<?php ?>の中身をコピー、貼り付け
 * 3. SQL部分にwhereを追加
 * 4. データ取得の箇所を修正。
 */

 $id=$_GET['id'];

 require_once('model.php');

//2. DB接続します
$pdo = db_connect();



$stmt = $pdo->prepare(
    'SELECT*FROM kadai02_table WHERE id=:id;'
);

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

$status = $stmt->execute(); //実行


//３．データ表示
$result = '';
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    $result = $stmt->fetch() ;
}

// var_dump($result);

require_once('templates/detail_input.php');


