<?php

session_start();

// sessionを初期化
$_SESSION = array();

// cookieに保存してあるsessionIDの保存期間を過去にしてはき
if ( isset($_COOKIE[session_name()])) {
  setcookie(session_name(), '', time() - 42000, '/');
}

// サーバー側でのセッションIDの破棄
session_destroy();

// 処理後、signin.phpへリダイレクト
header('location: /bookmark/user/signin.php');
exit();

?>
