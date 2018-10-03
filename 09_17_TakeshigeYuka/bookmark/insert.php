<?php

if(
  !isset($_POST["book_name"]) || $_POST["book_name"]=="" ||
  !isset($_POST["book_url"]) || $_POST["book_url"]==""
){
  exit('<p>必須項目が入力されていません</p><br><a href="index.php">入力フォームに戻る</a>');
}

//1. POSTデータ取得
//$name = filter_input( INPUT_GET, "name" ); //こういうのもあるよ
//$url = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$name = $_POST["book_name"];
$url = $_POST["book_url"];
$comment = $_POST["book_comment"];
$comment = nl2br($comment);

//2. DB接続します
include('user/functions.php');
$pdo = db_conn();

//３．データ登録SQL作成
$sql ="INSERT INTO gs_bm_table(id, book_name, book_url, book_comment, create_time)
VALUES(NULL, :a1, :a2, :a3, sysdate())";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $name, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $url, PDO::PARAM_STR);   //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();                        //実行！！

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  // $error[2]は２番目だけ人間にわかる言葉が返ってくる
  exit("sqlError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("location: add.php");
}
?>
