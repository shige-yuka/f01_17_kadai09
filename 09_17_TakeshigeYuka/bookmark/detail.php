<?php
session_start();
include('user/functions.php');
loginCheck();

// getで送信されたidを取得
$id = $_GET['id'];


//1.  DB接続します
$pdo = db_conn();


//２．データ登録SQL作成，指定したidのみ表示する
$stmt = $pdo->prepare('SELECT * FROM gs_bm_table WHERE id = :id');
$stmt->bindValue(':id',$id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
if($status==false){
  // エラーのとき
  errorMsg($stmt);
}else{
  // エラーでないとき
  $rs = $stmt->fetch();
  // fetch()で1レコードを取得して$rsに入れる
  // $rsは配列で返ってくる．$rs["id"], $rs["name"]などで値をとれる
  // var_dump()で見てみよう
}
?>

<!-- htmlは「index.php」とほぼ同じです -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Book Bookmark 更新ページ</title>
  <link href="assets/css/reset.css" rel="stylesheet">
  <link href="assets/css/sanitize.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/bookmark/ui/globalnav.php'); ?>
<form method="post" action="update.php" class="box-wrap" onsubmit="return checkform(this)">
  <div class="box">
    <h1 class="headline">Book Bookmark 更新</h1>
    <label class="input-wrap">本の名前：<input type="text" name="book_name" class="input" value="<?=$rs['book_name']?>"></label><br>
    <label class="input-wrap">本のURL：<input type="text" name="book_url" class="input js-valdate-url" id="harf" value="<?=$rs['book_url']?>"></label><br>
    <label class="input-wrap">コメント：<br><textArea name="book_comment" rows="4" cols="40" class="textarea"><?=$rs['book_comment']?></textArea></label><br>
    <input type="submit" value="更新" class="button">
    <input type="hidden" name="id" value="<?=$rs['id']?>">
    <a class="link" href="select.php">データ一覧</a>
  </div>
  <!-- <a class="button signout" href="user/signout.php">サインアウト</a> -->
</form>
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/bookmark/js/assets.php'); ?>
</body>
</html>
