<?php
session_start();
include('functions.php');
admin();

//2. DB接続します
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
    <h1 class="headline">Add user</h1>
    <label class="input-wrap">名前：<input type="text" name="name" class="input"></label><br>
    <label class="input-wrap">ログインID：<input type="text" name="lid" class="input"></label><br>
    <label class="input-wrap">パスワード：<input type="password" name="lpw" class="input"></label><br>
    <label class="input-wrap">権限：</label><br>
    <input name="kanri_flg" type="radio" value="0" id="type01" class="radio" checked="checked">
    <label class="label" for="type01">編集者</label>
    <input name="kanri_flg" type="radio" value="1" id="type02" class="radio">
    <label class="label" for="type02">管理者</label>
    <input name="life_flg" type="hidden" value="0">
    <input type="submit" value="追加する" class="button">
    <a class="link" href="select.php">データ一覧</a>
  </div>
</form>
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/bookmark/js/assets.php'); ?>
</body>
</html>
