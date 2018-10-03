<?php
session_start();
include('user/functions.php');
loginCheck();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Book Bookmark</title>
  <link href="assets/css/reset.css" rel="stylesheet">
  <link href="assets/css/sanitize.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/bookmark/ui/globalnav.php'); ?>
<form method="post" action="insert.php" class="box-wrap" onsubmit="return checkform(this)">
  <div class="box">
    <h1 class="headline">Book Bookmark</h1>
    <label class="input-wrap">本の名前：<input type="text" name="book_name" class="input"></label><br>
    <label class="input-wrap">本のURL：<input type="text" name="book_url" class="input js-valdate-url" id="harf" value="https://"></label><br>
    <label class="input-wrap">コメント：<br><textArea name="book_comment" rows="4" cols="40" class="textarea"></textArea></label><br>
    <input type="submit" value="登録" class="button">
    <a class="link" href="select.php">データ一覧</a>
  </div>
  <!-- <a class="button signout" href="user/signout.php">サインアウト</a> -->
</form>
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/bookmark/js/assets.php'); ?>
</body>
</html>
