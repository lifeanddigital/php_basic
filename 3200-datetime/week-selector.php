<meta charset="utf-8"><?php
do_main();
// -------------------------------------------------------------------
// 日付フォームの表示
function show_form($errors = array()) {
  $items = array();
  $base = mktime(0,0,0); // 今日の0時0分を基準
  // 明日から一週間分の日付リストを表示
  for ($i = 1; $i <= 7; $i++) {
    $time = strtotime("+$i day", $base);
    $text = date("m/d", $time);
    $items[] = "<option value='$time'>$text</option>";
  }
  $select = "<select name='date'>".implode("", $items)."</select>";
  $self = $_SERVER['SCRIPT_NAME'];
  echo implode("<br/>", $errors).
       "<form action='$self' method='GET'>$select".
       "<input type='submit' value='送信'></form>";
}
// -------------------------------------------------------------------
// フォームの検証
function validate_form() {
  $errors = array();
  $date = intval($_GET["date"]);
  $base = mktime(0,0,0); // 今日の0時0分を基準
  $range_from = strtotime("+1 day", $base);
  $range_to   = strtotime("+7 day", $base);
  if ($range_from > $date || $date > $range_to) {
    $errors[] = "不正な日付の値です。";
  }
  return $errors;
}
// -------------------------------------------------------------------
// フォームを処理する
function process_form() {
  $date = intval($_GET["date"]);
  echo "日付:".date("m/d", $date);
}
// -------------------------------------------------------------------
// メインロジック
function do_main() {
  if (array_key_exists("date", $_GET)) {
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
