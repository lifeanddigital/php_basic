<meta charset="utf-8"><body><?php
do_main();
// -------------------------------------------------------------------
// 日付フォームの表示
function show_form($errors = array()) {
  $self = $_SERVER["SCRIPT_NAME"];
  $this_year = date('Y');
  echo "<form action='$self' method='GET'>";
  // 前後2年を選択肢に
  echo "<select name='year'>";
  for ($y = -2; $y <= 2; $y++) {
    $year = $this_year + $y;
    echo "<option value='$year'>{$year}年</option>\n";
  }
  echo "</select>";
  // 1月から12月を選択肢に
  echo "<select name='month'>";
  for ($m = 1; $m <= 12; $m++) {
    echo "<option value='$m'>{$m}月</option>\n";
  }
  echo "</select>";
  // 1日から31日を選択肢に
  echo "<select name='date'>";
  for ($d = 1; $d <= 31; $d++) {
    echo "<option value='$d'>{$d}日</option>\n";
  }
  echo "</select>";
  echo "<input type='submit' value='送信' />";
  echo "</form>";
  echo implode("<br/>", $errors);
}
// -------------------------------------------------------------------
// フォームの検証
function validate_form() {
  $errors = array();
  $this_year = date('Y');
  $range_from = mktime(0,0,0,1,1,$this_year-2);
  $range_to   = mktime(0,0,0,1,1,$this_year+3);
  $year  = intval($_GET["year"]);
  $month = intval($_GET["month"]);
  $date  = intval($_GET["date"]);
  if (!checkdate($month, $date, $year)) {
    $errors[] = "不正な日付が指定されました。";
  }
  $time  = mktime(0,0,0,$month, $date, $year);
  if ($range_from > $time || $time >= $range_to) {
    $errors[] = "不正な日付が指定されました。";
  }
  return $errors;
}
// -------------------------------------------------------------------
// フォームを処理する
function process_form() {
  $year  = intval($_GET["year"]);
  $month = intval($_GET["month"]);
  $date  = intval($_GET["date"]);
  $time  = mktime(0,0,0,$month, $date, $year);
  echo date("c", $time);
}
// -------------------------------------------------------------------
// メインロジック
function do_main() {
  if (array_key_exists("year", $_GET)) {
    if ($errors = validate_form()) {
      show_form($errors);
    } else {
      process_form();
    }
  } else {
    show_form();
  }
}
// -------------------------------------------------------------------
