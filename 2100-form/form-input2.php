<html><head><meta charset="UTF-8"></head><body>
<?php
// ユーザが名前を送信したか確認する
if (isset($_GET["username"])) {
  // 入力をHTMLエンティティに変換
  $username = htmlentities($_GET['username']);
  // 挨拶を表示
  echo "こんにちは、{$username}さん!!";
} else {
  // フォームの表示
  echo <<< END_OF_FORM
<form action="$_SERVER[SCRIPT_NAME]" method="GET">
  名前:<input type="text" name="username" />
  <input type="submit" value="送信" />
</form>
END_OF_FORM;
}
?>
</body></html>

