<?php
// getで送信されたidを取得
$id = $_GET['id'];

//1.  DB接続します
include('functions.php');
$pdo = db_conn();


//２．データ登録SQL作成，指定したidのみ表示する
$stmt = $pdo->prepare('SELECT * FROM gs_user_table WHERE id = :id');
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
$kanri = '';
if($rs['kanri_flg'] != 0) {
  $kanri = '管理者';
}else {
  $kanri = '編集者';
}
$life = '';
if($rs['life_flg'] != 0) {
  $life = '退会';
}else {
  $life = '登録中';
}
?>

<!-- htmlは「index.php」とほぼ同じです -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザー情報更新</title>
  <link href="../assets/css/reset.css" rel="stylesheet">
  <link href="../assets/css/sanitize.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">

</head>
<body>
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/bookmark/ui/globalnav.php'); ?>
<form method="post" action="update.php" class="box-wrap" onsubmit="return checkform(this)">
  <div class="box">
    <h1 class="headline">ユーザー情報更新</h1>
    <label class="input-wrap">名前：<input type="text" name="name" class="input" value="<?=$rs['name']?>"></label><br>
    <label class="input-wrap">ログインID：<input type="text" name="lid" class="input" value="<?=$rs['lid']?>"></label><br>
    <label class="input-wrap">パスワード：<input type="password" name="lpw" class="input" value="<?=$rs['lpw']?>"></label><br>
    <label class="input-wrap">現在の権限：<?=$kanri?></label><br>
    <input name="kanri_flg" type="radio" value="0" id="type01" class="radio" checked="checked">
    <label class="label" for="type01">編集者</label>
    <input name="kanri_flg" type="radio" value="1" id="type02" class="radio">
    <label class="label" for="type02">管理者</label>
    
    <label class="input-wrap">現在のアカウント状態：<?=$life?></label><br>
    <input name="life_flg" type="radio" value="0" id="type04" class="radio" checked="checked">
    <label class="label" for="type04">登録中</label>
    <input name="life_flg" type="radio" value="1" id="type03" class="radio">
    <label class="label" for="type03">退会</label>
    <input type="submit" value="送信" class="button">
    <input type="hidden" name="id" value="<?=$rs['id']?>">
    <a class="link" href="select.php">データ一覧に戻る</a>
  </div>
</form>
<?php include( $_SERVER['DOCUMENT_ROOT'] . '/bookmark/js/assets.php'); ?>
</body>
</html>
