<meta charset="utf-8">
<?php
if ($_POST["year"]) {
  if ($erros = validate_form()) {
      show_form($erros);
  } else {
      process_form();
  }
}
else {
  show_form();
}
// フォームを検証する
function validate_form() {
  // 送信された値を整数に変換する
  $year  = intval($_POST["year"]);
  $month = intval($_POST["month"]);
  $day   = intval($_POST["day"]);
  // エポックタイムに変換する
  $check_date = strtotime("$year-$month-$day");
  $now   = time();
  $range_sec = 60 * 60 * 24 * 10; // 10日を表わす値
  $range_start = $now - $range_sec;
  $range_end   = $now + $range_sec;
  if ($range_start <= $check_date && $check_date <= $range_end) {
    return array();
  }
  else {
    return array("日付が範囲外です。");
  }
}
// フォームを表示する
function show_form($errors = array()) {
  print_r($errors);
  echo <<< EOD
<form method="POST">
  Date:
  <input type="text" name="year"> -
  <input type="text" name="month"> -
  <input type="text" name="day">
  <br/>
  <input type="submit" />
</form>
EOD;
}
// フォームを処理する
function process_form() {
  echo "ok";
}

