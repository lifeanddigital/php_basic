<meta charset="UTF-8"><pre><?php
require 'MDB2.php';
// データベースに接続する
$db = MDB2::connect('mysql://testuser:testpass@localhost/booksample');
if (PEAR::isError($db)) { die("DBへの接続失敗"); }
$db->loadModule('Extended');
// データベースのエラーをレポートするように指定する
$db->setErrorHandling(PEAR_ERROR_CALLBACK, 'report_db_error');
// データベースのエラーを報告する関数を定義
function report_db_error($error_obj) {
  $info = $error_obj->getDebugInfo();
  echo $info;       // 出力
  error_log($info); // エラーログに記録
}
// SQLを実行して結果を表示する
$result = $db->getAll("SELECT * FROM users2");
print_r($result);
