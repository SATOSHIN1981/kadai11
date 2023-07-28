<?php
//共通に使う関数を記述
//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str){
    return htmlspecialchars($str,ENT_QUOTES,"UTF-8");
  };

//DB接続
function db_connect()
{
    try {
        $db_name = 'gs_db_kadai02';    //データベース名
        $db_id   = 'root';      //アカウント名
        $db_pw   = '';      //パスワード：XAMPPはパスワード無しに修正してください。
        $db_host = 'localhost'; //DBホスト
        $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
        return $pdo;
    } catch (PDOException $e) {
        exit('DB Connection Error:' . $e->getMessage());
    }
}

// ログインチェク処理 loginCheck()
function loginCheck()
{
    if(!isset($_SESSION['chk_ssid']) || $_SESSION['chk_ssid'] !== session_id()){
        exit('LOGIN ERROR');
    }else{
    session_regenerate_id(true);
    $_SESSION['chk_ssid'] = session_id();
    }
}


function get_all_posts($pdo){
    $stmt = $pdo->prepare('SELECT * FROM kadai02_table');
    $status = $stmt->execute();
    
    
    //３．データ表示
    $view = '';
    if ($status === false) {
        $error = $stmt->errorInfo();
        exit('SQLError:' . print_r($error, true));
    } else {
        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
            //GETデータ送信リンク作成
            // <a>で囲う。
            $view .= '<p>';
    
            $view .= '<a href="detail.php?id='.$result['id'].'">';
            $view .= $result['id'] . '：' . $result['uid']  .  $result['name']  .  getOptionLabel('q1', $result['q1']) . ' | ' . getOptionLabel('q2', $result['q2']) . ' | ' . getOptionLabel('q3', $result['q3']);
            $view .= '</a>';       
            
            if($_SESSION['kanri_flg']!==1){
                $view .= '<a href="delete.php?id='.$result['id'].'">';
                $view .= '[削除]';
                $view .= '</a>';  
            }
    
            $view .= '</p>';
        }
        return $view;
    }
}

function get_sameid_posts($pdo,$user_id){
    //２．データ取得SQL作成
    $stmt = $pdo->prepare("SELECT * FROM kadai02_table WHERE uid = :user_id");
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_STR);
    $status = $stmt->execute();
    
    //３．データ表示
    $view="";
    if ($status==false) {
        //execute（SQL実行時にエラーがある場合）
      $error = $stmt->errorInfo();
      exit("ErrorQuery:".$error[2]);
    
    }else{
      //Selectデータの数だけ自動でループしてくれる
      //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
      while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= "<p>";
        $view .= h($result['name']) . ' : ' . getOptionLabel('q1', $result['q1']) . ' | ' . getOptionLabel('q2', $result['q2']) . ' | ' . getOptionLabel('q3', $result['q3']);
        $view .= "</p>";
      }
      return $view;
    }

}

function getOptionLabel($question, $answer)
{
    switch ($question) {
        case 'q1':
            $questionLabel = "掃除の分担は？";
            break;
        case 'q2':
            $questionLabel = "洗濯の分担は？";
            break;
        case 'q3':
            $questionLabel = "料理の分担は？";
            break;
        default:
            $questionLabel = "";
            break;
    }

    switch ($answer) {
        case '1':
            $answerLabel = "あなた10割、相手0割";
            break;
        case '2':
            $answerLabel = "あなた8割、相手2割";
            break;
        case '3':
            $answerLabel = "あなた6割、相手4割";
            break;
        case '4':
            $answerLabel = "あなたと相手で半々";
            break;
        case '5':
            $answerLabel = "あなた4割、相手6割";
            break;
        case '6':
            $answerLabel = "あなた2割、相手8割";
            break;
        case '7':
            $answerLabel = "あなた0割、相手10割";
            break;
        case '8':
            $answerLabel = "その他";
            break;
        default:
            $answerLabel = "";
            break;
    }

    return "{$questionLabel}：{$answerLabel}";
}

