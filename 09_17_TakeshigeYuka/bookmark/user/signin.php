<?php
session_start();
if( isset($_SESSION['chk_ssid']) != '') {
  header('location: ../select.php');
}
//2. DB接続します
include('functions.php');
$pdo = db_conn();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Sign in</title>
  <link href="../assets/css/reset.css" rel="stylesheet">
  <link href="../assets/css/sanitize.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/bookmark/ui/globalnav.php'); ?>
<form method="post" action="signin_act.php" class="box-wrap" onsubmit="return checkform(this)">
  <div class="box">
    <h1 class="headline">Sign in</h1>
    <label class="input-wrap">ログインID：<input type="text" name="lid" class="input"></label><br>
    <label class="input-wrap">パスワード：<input type="password" name="lpw" class="input"></label><br>
    <input type="submit" value="サインイン" class="button" name="signup">
    <a class="link" href="signup.php">新規登録はこちら</a>
  </div>
</form>
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/bookmark/js/assets.php'); ?>
</body>
</html>
