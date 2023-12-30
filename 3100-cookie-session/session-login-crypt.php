<?php
// UTF-8を利用することを宣言(文字化け対策)
header("Content-type: text/html; charset=utf-8;");

//--------------------------------------------------------------------
// 初期設定 : ユーザ名とパスワードの設定
// echo hash("sha256","pass123".$salt)."<br/>";
// echo hash("sha256","pass234".$salt)."<br/>";
$users = array(
  // ユーザID => 暗号化されたパスワード
  "taro"=>"ce461aadd28c72cba86b863e0bd6acfbcb9661e0dffef0a0ba5fdb8a409a1b77", 
  "zoro"=>"5d041beae17215e32a6da2e783d27936e84050572a775a2471ac794d49460d21"
);
// パスワードからハッシュを得るオリジナル関数
function genPasswordHash($password) {
  $salt = "rl#kl3g4.hnC0bi8M_K"; // 暗号化に使うsalt
  return hash("sha256", $password.$salt);
}
//--------------------------------------------------------------------
// メインプログラム
session_start(); // セッションを開始する
// ログインしているか?
if (!isset($_SESSION["user"])) { // ログインしていないとき
  // ログイン判定が必要か?
  if (isset($_POST["action"]) && $_POST["action"] == "trylogin") checkLogin();
  // ログインしていないならばフォームを表示
  showLoginForm();
}
else { // ログインしているとき
  // ログオフの実行をするか?
  if (isset($_GET["action"]) && $_GET["action"] == "logoff") { logOff(); }
  // ログインしているのでコンテンツを表示する
  showContents();
}
//--------------------------------------------------------------------
// フォームを表示する関数
function showLoginForm($errors = null) {
  echo <<< EOS
<form action="{$_SERVER['SCRIPT_NAME']}" method="POST">
  User ID :<input type="text"     name="userid" /><br/>
  Password:<input type="password" name="password" /><br/>
  <input type="hidden" name="action" value="trylogin" />
  <input type="submit" value="ログイン" />
</form>
EOS;
  if ($errors) {
    echo "<div>".implode("<br/>", $errors)."</div>";
  }
  exit;
}
// ログイン判定を行う関数
function checkLogin() {
  global $users;
  $errors = array();
  $userid   = trim($_POST["userid"]);
  $password = trim($_POST["password"]);
  // ユーザIDが正しく指定されているか確認
  if (strlen($userid) < 2) {
    $errors[] = "正しいユーザIDとパスワードを入力してください。";
  }
  // ユーザが存在するか確認
  else if (!array_key_exists($userid, $users)) {
    $errors[] = "正しいユーザIDとパスワードを入力してください。";
  }
  // パスワードの照合
  else if (empty($users[$userid]) || 
    genPasswordHash($password) != $users[$userid]) {
    $errors[] = "正しいユーザIDとパスワードを入力してください。";
  }
  // エラーがあれば再度フォームを表示する
  if ($errors) {
    showLoginForm($errors);
  }
  // ログインしたことをセッションに記録
  $_SESSION["user"] = $userid;
  echo "ログイン成功しました。";
  echo "<a href='{$_SERVER['SCRIPT_NAME']}'>次へ</a>";
  exit;
}
// コンテンツを表示する関数
function showContents() {
  echo "<h1>コンテンツのサンプル</h1>";
  echo "こんにちは。{$_SESSION['user']}さん。<br/>";
  echo "<a href='{$_SERVER['SCRIPT_NAME']}?action=logoff'>→ログオフする</a>";
  exit;
}
// ログオフする関数
function logOff() {
  unset($_SESSION["user"]);
  echo "ログオフしました。"; exit;
}
