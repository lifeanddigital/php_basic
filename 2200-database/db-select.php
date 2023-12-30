<meta charset="UTF-8"><pre><?php
require 'MDB2.php';
// データベースに接続する
$db = MDB2::connect('mysql://testuser:testpass@localhost/booksample');
if (PEAR::isError($db)) { die("接続失敗"); }
// エラー起きたらそこでプログラムを終了するように指定する
$db->setErrorHandling(PEAR_ERROR_DIE);
// SQLを実行する
$q = $db->query("SELECT user_id, name, email FROM users");
// 実行した結果を表示する
while ($row = $q->fetchRow()) {
  $user_id = $row[0];
  $name    = $row[1];
  $email   = $row[2];
  echo htmlentities("$user_id, $name, $email\n");
}
