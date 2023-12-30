<meta charset="UTF-8"><pre><?php
require 'MDB2.php';
// データベースに接続する
$db = MDB2::connect('mysql://testuser:testpass@localhost/booksample');
if (PEAR::isError($db)) { die("DBへの接続失敗"); }
// 結果取得方法をカラム名の連想配列とする
$db->setFetchMode(MDB2_FETCHMODE_ASSOC);
// クエリを発行する
$sth = $db->prepare("SELECT * FROM users WHERE name LIKE ?");
$q = $sth->execute("ro%");
while ($row = $q->fetchRow()) {
  $user_id = $row["user_id"];
  $name    = $row["name"];
  $email   = $row["email"];
  echo "$user_id,$name,$email\n";
}
