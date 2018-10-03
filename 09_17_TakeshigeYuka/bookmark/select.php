<?php
session_start();
include('user/functions.php');
loginCheck();

//1.  DB接続します
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  errorMsg($stmt);
}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<li class="item">';
    $view .= '<p class="titleWrap">';
    $view .= '<span class="date">';
    $view .= $result["create_time"];
    $view .= '</span>';
    $view .= '<span class="name">';
    $view .= '<a href="'.$result["book_url"].'" class="link" target="_block" rel="noopener noreferrer">';
    $view .= $result["book_name"];
    $view .= '</a>';
    $view .= '</span>';
    $view .= '</p>';
    $view .= '<p class="comment">';
    $view .= $result["book_comment"];
    $view .= '</p>';
    $view .= '<a href="detail.php?id='.$result['id'].'" class="button btn-edit">';
    $view .= '<img src="assets/img/pen-solid.svg" class="icon">';
    $view .= '</a>';
    $view .= '<a href="delete.php?id='.$result['id'].'" class="button btn-del">';  //削除用aタグを作成
    $view .= '<img src="assets/img/trash-solid.svg" class="icon">';
    $view .= '</a>';
    $view .= '</li>';
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>本の登録完了</title>
<link href="assets/css/reset.css" rel="stylesheet">
<link href="assets/css/sanitize.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
</head>
<body id="main">
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/bookmark/ui/globalnav.php'); ?>
<div>
  <div class="box-wrap">
    <div class="box">
      <h1 class="headline">Bookmark一覧</h1>
      <ul class="list">
        <?=$view?>
      </ul>
      <a class="button" href="add.php">Bookmark登録へ</a>
    </div>
    <!-- <a class="button signout" href="user/signout.php">サインアウト</a> -->
  </div>
</div>
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/bookmark/js/assets.php'); ?>
</body>
</html>
