<html><head><meta charset="UTF-8"></head><body>
<?php
if (isset($_POST["str"])) {
  process_form();
} else {
  show_form();
}
function show_form() {
  echo <<< EOS
<form action="{$_SERVER['SCRIPT_NAME']}" method="POST">
  <input type="text" name="str" value="温和" />
  <input type="submit" value="送信" />
</form>
EOS;
}
function process_form() {
  $str = $_POST["str"];
  $enc = mb_detect_encoding($str);
  echo "ENCODING : $enc";
}
