<?php

// input.phpのURLを生成
$user_id = $_GET['user_id'];
$inputURL = "input.php?user_id={$user_id}";

require_once('model.php');

//1.  DB接続します
$pdo = db_connect();
$view = get_sameid_posts($pdo,$user_id);

require_once('class.php');

$namename = $_GET['name'];
$person = new Person($namename);
$person -> sayHello();


require_once('templates/answer.php');
