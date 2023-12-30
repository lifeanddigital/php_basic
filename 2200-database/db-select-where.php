<meta charset="UTF-8"><pre><?php
require 'DB.php';
// データベースに接続する
$db = DB::connect('mysql://testuser:testpass@localhost/booksample');
if (DB::isError($db)) { die("DBへの接続失敗"); }
// SQLを実行して結果を配列で得る
$result = $db->getAll("SELECT * FROM users WHERE user_id % 3 = 0");
// 結果を表示する
foreach ($result as $row) {
  $user_id = $row[0];
  $name    = $row[1];
  $email   = $row[2];
  echo htmlentities("$user_id,$name,$email\n");
}