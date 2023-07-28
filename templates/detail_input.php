<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ編集</title>
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">管理画面</a></div>
            </div>
        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <form method="POST" action="update.php">
        <div class="jumbotron">
            <fieldset>
                <legend>家事分担アンケート</legend>
                <label>名前：<input type="text" name="name" value="<?= $result['name'] ?>"></label><br>
                <label>UserID：<input type="text" name="user_id" value="<?= $result['uid'] ?>"></label><br>
                <input type="hidden" name="id" value="<?= $result['id'] ?>"> 
                    <!-- 上のは非表示のid -->

        <!-- user_idがURLに入っていないときだけユーザーIDが固有に生成される -->
        <h2>あなたと相手の家事分担の理想の割合を教えてね</h2>
        <label for="q1">掃除の分担は？</label><br>
        <select id="q1" name="q1">
               <option value="1" <?php if ($result['q1'] == 1) echo 'selected'; ?>>あなた10割、相手0割</option>
                <option value="2" <?php if ($result['q1'] == 2) echo 'selected'; ?>>あなた8割、相手2割</option>
                <option value="3" <?php if ($result['q1'] == 3) echo 'selected'; ?>>あなた6割、相手4割</option>
                <option value="4" <?php if ($result['q1'] == 4) echo 'selected'; ?>>あなたと相手で半々</option>
                <option value="5" <?php if ($result['q1'] == 5) echo 'selected'; ?>>あなた4割、相手6割</option>
                <option value="6" <?php if ($result['q1'] == 6) echo 'selected'; ?>>あなた2割、相手8割</option>
                <option value="7" <?php if ($result['q1'] == 7) echo 'selected'; ?>>あなた0割、相手10割</option>
                <option value="8" <?php if ($result['q1'] == 8) echo 'selected'; ?>>その他</option>
            </select><br>
            
            <label for="q2">洗濯の分担は？</label><br>
            <select id="q2" name="q2"  >
                <option value="1" <?php if ($result['q2'] == 1) echo 'selected'; ?>>あなた10割、相手0割</option>
                <option value="2" <?php if ($result['q2'] == 2) echo 'selected'; ?>>あなた8割、相手2割</option>
                <option value="3" <?php if ($result['q2'] == 3) echo 'selected'; ?>>あなた6割、相手4割</option>
                <option value="4" <?php if ($result['q2'] == 4) echo 'selected'; ?>>あなたと相手で半々</option>
                <option value="5" <?php if ($result['q2'] == 5) echo 'selected'; ?>>あなた4割、相手6割</option>
                <option value="6" <?php if ($result['q2'] == 6) echo 'selected'; ?>>あなた2割、相手8割</option>
                <option value="7" <?php if ($result['q2'] == 7) echo 'selected'; ?>>あなた0割、相手10割</option>
                <option value="8" <?php if ($result['q2'] == 8) echo 'selected'; ?>>その他</option>
            </select><br>
            
            <label for="q3">料理の分担は？</label><br>
            <select id="q3" name="q3"  >
                <option value="1" <?php if ($result['q3'] == 1) echo 'selected'; ?>>あなた10割、相手0割</option>
                <option value="2" <?php if ($result['q3'] == 2) echo 'selected'; ?>>あなた8割、相手2割</option>
                <option value="3" <?php if ($result['q3'] == 3) echo 'selected'; ?>>あなた6割、相手4割</option>
                <option value="4" <?php if ($result['q3'] == 4) echo 'selected'; ?>>あなたと相手で半々</option>
                <option value="5" <?php if ($result['q3'] == 5) echo 'selected'; ?>>あなた4割、相手6割</option>
                <option value="6" <?php if ($result['q3'] == 6) echo 'selected'; ?>>あなた2割、相手8割</option>
                <option value="7" <?php if ($result['q3'] == 7) echo 'selected'; ?>>あなた0割、相手10割</option>
                <option value="8" <?php if ($result['q3'] == 8) echo 'selected'; ?>>その他</option>
            </select><br>





                <input type="submit" value="更新">
            </fieldset>
        </div>
    </form>
</body>

</html>
