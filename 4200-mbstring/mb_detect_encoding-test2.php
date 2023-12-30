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
  <input type="text" name="str" value="" />
  <input type="hidden" name="dummy" value="牛乳で美しい堀を造る" />
  <input type="submit" value="送信" />
</form>
EOS;
}
function process_form() {
  $enc = mb_detect_encoding($_POST["dummy"]);
  echo "ENCODING : $enc";
}
