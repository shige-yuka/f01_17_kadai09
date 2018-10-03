<?php
session_start();
include('functions.php');
loginCheck();

//1.  DB接続します
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table");
$status = $stmt->execute();

// print_r($_SESSION);

//３．データ表示
$view="";
if($status==false){
  errorMsg($stmt);
}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    if($result['life_flg'] != 0) {
      $view .= '<li class="item disabled">';
    } else {
      $view .= '<li class="item">';
    }
    $view .= '<p class="titleWrap">';
    $view .= '<span class="date">';
    $view .= $result["create_at"];
    $view .= '</span>';
    $view .= '<span class="name">';
    $view .= $result["name"];
    $view .= '</span>';
    $view .= '</p>';
    $view .= '<p class="comment">';
    $view .= $result["lid"];
    $view .= '</p>';
    $view .= '<a href="detail.php?id='.$result['id'].'" class="button btn-edit">';
    $view .= '<img src="../assets/img/pen-solid.svg" class="icon" alt="編集">';
    $view .= '</a>';
    if($result['life_flg'] = 0) {
      $view .= '<a href="delete.php?id='.$result['id'].'" class="button btn-del event-disabled">';
      $view .= '<img src="../assets/img/trash-solid.svg" class="icon" alt="削除">';
      $view .= '</a>';
    }
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
<title>sign up 完了</title>
<link href="../assets/css/reset.css" rel="stylesheet">
<link href="../assets/css/sanitize.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">
</head>
<body id="main">
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/bookmark/ui/globalnav.php'); ?>
<div>
  <div class="box-wrap">
    <div class="box">
      <h1 class="headline">ユーザー一覧</h1>
      <ul class="list">
        <?=$view?>
      </ul>
      <!-- <a class="button" href="index.php">サインアップに戻る</a> -->
    </div>
    <!-- <a class="button signout" href="signout.php">サインアウト</a> -->
  </div>
</div>
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/bookmark/js/assets.php'); ?>
</body>
</html>
