<?php
// データが送信されたかどうかチェックする
if (array_key_exists('name', $_POST)) {
  process_form();
} else {
  show_form();
}
// フォームが送信されている時の処理
function process_form() {
  // $_POSTを参照して送信された値を処理することが可能
  $name = $_POST["name"];
  echo "Hello, $name !!";
}
// フォームを表示する処理
function show_form() {
  echo <<<END_OF_FORM
<form method="POST" action="$_SERVER[SCRIPT_NAME]">
  Name: <input type="text" name="name" /><input type="submit" />
</form>
END_OF_FORM;
}
