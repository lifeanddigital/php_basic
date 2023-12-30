<?php
require 'MDB2.php';
// データベースに接続する
$db = MDB2::connect('mysql://testuser:testpass@localhost/booksample');
$db->loadModule('Extended');
$result = $db->getAll("SELECT * FROM users");
// 出力ヘッダをセットする
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="users.csv"');
// 結果を出力する
foreach ($result as $cols) {
  echo implode_csv_cols($cols);
}
// CSVセルのエスケープが必要か調べてエスケープする
function implode_csv_cols($cols) {
  foreach ($cols as $i => $v) {
    $esc = false;
    foreach (array(',','"',' ',"\t","\n","\r") as $ch) {
      if (strpos($v, $ch) !== false) { $esc = true; break; }
    }
    if ($esc) {
      $v = str_replace('"', '""', $v);
      $cols[$i] = '"'.$v.'"';
    }
  }
  return implode(',', $cols)."\n";
}
