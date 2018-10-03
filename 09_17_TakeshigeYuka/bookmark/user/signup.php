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
  <title>Sign up</title>
  <link href="../assets/css/reset.css" rel="stylesheet">
  <link href="../assets/css/sanitize.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/bookmark/ui/globalnav.php'); ?>
<form method="post" action="insert.php" class="box-wrap" onsubmit="return checkform(this)">
  <div class="box">
    <h1 class="headline">Sign up</h1>
    <label class="input-wrap">名前：<input type="text" name="name" class="input"></label><br>
    <label class="input-wrap">ログインID：<input type="text" name="lid" class="input"></label><br>
    <label class="input-wrap">パスワード：<input type="password" name="lpw" class="input"></label><br>
    <input name="kanri_flg" type="hidden" value="0" checked="checked">
    <input name="life_flg" type="hidden" value="0" checked="checked">
    <input type="submit" value="サインアップ" class="button">
    <a class="link" href="signin.php">アカウントをお持ちの方はこちら</a>
    <!-- <a class="link" href="select.php">データ一覧</a> -->
  </div>
</form>
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/bookmark/js/assets.php'); ?>
</body>
</html>
