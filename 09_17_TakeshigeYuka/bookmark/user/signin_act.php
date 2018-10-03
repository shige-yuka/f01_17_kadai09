<?php
//最初にSESSIONを開始！！
session_start();

//0.外部ファイル読み込み
include('functions.php');

//1.  DB接続します
$pdo = db_conn();
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

//３．データ登録SQL作成
$sql ="SELECT * FROM gs_user_table WHERE lid=:lid AND lpw=:lpw AND life_flg=0";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();                        //実行！！

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  // $error[2]は２番目だけ人間にわかる言葉が返ってくる
  exit("sqlError:".$error[2]);
}

//4. 抽出データ数を取得
//$count = $stmt->fetchColumn(); //SELECT COUNT(*)で使用可能()
$val = $stmt->fetch(); //1レコードだけ取得する方法(table内の該当するデータを持ってくる))

//5. 該当レコードがあればSESSIONに値を代入
if( $val["id"] != "" ) {
  $_SESSION["chk_ssid"]  = session_id();
  $_SESSION["kanri_flg"] = $val['kanri_flg'];
  $_SESSION["name"]      = $val['name'];
  $_SESSION["life_flg"]  = $val['life_flg'];
  header('Location: ../select.php');
} else {
  header('Location: signin.php');
}

exit();
?>
