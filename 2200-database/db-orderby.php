<meta charset="UTF-8"><pre><?php
require 'DB.php';
// データベースに接続する
$db = DB::connect('mysql://testuser:testpass@localhost/booksample');
if (DB::isError($db)) { die("DBへの接続失敗"); }
// 結果取得方法をカラム名の連想配列とする
$db->setFetchMode(DB_FETCHMODE_ASSOC);
// クエリを発行する
$result = $db->getAll("SELECT * FROM users ORDER BY name ASC");
foreach ($result as $row) {
  $user_id = $row["user_id"];
  $name    = $row["name"];
  $email   = $row["email"];
  echo "$user_id,$name,$email\n";
}
