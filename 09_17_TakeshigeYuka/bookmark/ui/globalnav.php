<?php

//1.  DB接続します
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table");
$status = $stmt->execute();

//３．データ表示
$nav="";
if( !isset($_SESSION['chk_ssid']) || $_SESSION['chk_ssid'] != session_id()) {
  $nav .= '<p class="username">サインインしていません</p>';
  $nav .= '<ul class="nav-list">';
  $nav .= '<li class="nav-item"><a class="nav-link" href="/bookmark/">Bookmark一覧</a></li>';
  $nav .= '<li class="nav-item"><a class="nav-link" href="/bookmark/user/signup.php">サインアップ</a></li>';
  $nav .= '<li class="nav-item"><a class="nav-link" href="/bookmark/user/signin.php">サインイン</a></li>';
  $nav .= '</ul>';
} else {
  if(!isset($_SESSION['kanri_flg']) || $_SESSION['kanri_flg'] != 1){
    $nav .= '<p class="username">';
    $nav .= $_SESSION['name'];
    $nav .= 'でログイン中</p>';
    $nav .= '<ul class="nav-list">';
    $nav .= '<li class="nav-item"><a class="nav-link" href="/bookmark/add.php">Bookmark追加</a></li>';
    $nav .= '<li class="nav-item"><a class="nav-link" href="/bookmark/select.php">Bookmark一覧</a></li>';
    $nav .= '<li class="nav-item"><a class="nav-link" href="/bookmark/user/signout.php">サインアウト</a></li>';
    $nav .= '</ul>';
  } else {
    $nav .= '<p class="username">';
    $nav .= $_SESSION['name'];
    $nav .= 'でログイン中</p>';
    $nav .= '<ul class="nav-list">';
    $nav .= '<li class="nav-item"><a class="nav-link" href="/bookmark/add.php">Bookmark追加</a></li>';
    $nav .= '<li class="nav-item"><a class="nav-link" href="/bookmark/select.php">Bookmark一覧</a></li>';
    $nav .= '<li class="nav-item"><a class="nav-link" href="/bookmark/user/add.php">ユーザー追加</a></li>';
    $nav .= '<li class="nav-item"><a class="nav-link" href="/bookmark/user/select.php">ユーザー一覧</a></li>';
    $nav .= '<li class="nav-item"><a class="nav-link" href="/bookmark/user/signout.php">サインアウト</a></li>';
    $nav .= '</ul>';
  }
}

?>


<nav class="nav">
  <div id="nav-drawer">
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content">
        <?=$nav?>
      </div>
  </div>
</nav>