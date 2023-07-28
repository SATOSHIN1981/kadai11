<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>家事分担を相談そうだんしよう</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="input.php">アンケートに戻る</a>
      </div>
    </div>

    <h3>おともだちを招待</h3>
    <p>おともだちを招待するURL: <a href="<?php echo $inputURL; ?>"><?php echo $inputURL; ?></a></p>

  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
<h2>あなたとおともだちの回答</h2>
    <div class="container jumbotron"><?= $view ?></div>
</div>
<!-- Main[End] -->

</body>
</html>
