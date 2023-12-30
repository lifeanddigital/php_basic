<meta charset="UTF-8"><pre><?php
require 'MDB2.php';
// データベースに接続する
$db = MDB2::connect('mysql://testuser:testpass@localhost/booksample');
if (PEAR::isError($db)) { die("DBへの接続失敗"); }
// 拡張モジュールを使う
$db->loadModule('Extended');
// SQLを実行して結果を配列で得る
$result = $db->getAll("SELECT * FROM users");
// 結果を表示する
foreach ($result as $row) {
  $user_id = $row[0];
  $name    = $row[1];
  $email   = $row[2];
  echo htmlentities("$user_id,$name,$email\n");
}