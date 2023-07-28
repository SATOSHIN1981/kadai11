<?php
// 0. SESSION開始！！
session_start();

//１．関数群の読み込み
require_once('model.php');
loginCheck();

//２．データ登録SQL作成
$pdo = db_connect();
$view = get_all_posts($pdo);

require_once('templates/list.php');


