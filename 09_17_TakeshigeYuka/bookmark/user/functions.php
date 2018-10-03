<?php

//DB接続関数（PDO）
function db_conn(){
  try {
    return new PDO('mysql:dbname=gs_f01_db17;charset=utf8;host=localhost','root','');
  } catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
  }
}

// テーブル名
$table = 'gs_user_table';

//SQL処理エラー
function errorMsg($stmt){
  $error = $stmt->errorInfo();
  exit('ErrorQuery:'.$error[2]);
}

/**
* XSS
* @Param:  $str(string) 表示する文字列
* @Return: (string)     サニタイジングした文字列
*/
function h($str){
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// login認証チェック
function loginCheck() {
  if( !isset($_SESSION['chk_ssid']) || $_SESSION['chk_ssid'] != session_id()) {
    header('location: /bookmark/user/signin.php');
    exit();
  } else {
    session_regenerate_id(true);
    $_SESSION['chk_ssid'] = session_id();
  }
}
function admin(){
  if(!isset($_SESSION['kanri_flg']) || $_SESSION['kanri_flg']!=1){
    header('location: /bookmark/user/signin.php');
  }
}
?>
