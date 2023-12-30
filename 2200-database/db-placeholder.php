<meta charset="UTF-8"><pre><?php
require 'MDB2.php';
// データベースに接続する
$db = MDB2::connect('mysql://testuser:testpass@localhost/booksample');
if (PEAR::isError($db)) { die("DBへの接続失敗"); }
// プレースホルダを使ってクエリを発行する
$keyword = "%ro";
$sth = $db->prepare("SELECT * FROM users WHERE name LIKE ?");
$q = $sth->execute($keyword);
while ($res = $q->fetchRow()) {
  printf("id:%d, name:%s, email:%s\n", $res[0], $res[1], $res[2]);
}
