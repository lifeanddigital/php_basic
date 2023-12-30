<?php
require 'MDB2.php';
// (1) データベースに接続しusersテーブルのデータをすべて取り出す
$db = MDB2::connect('mysql://testuser:testpass@localhost/booksample');
if (PEAR::isError($db)) { die($db->getMessage()); }
$db->setFetchMode(MDB2_FETCHMODE_ASSOC);
$result = $db->query("SELECT * FROM users");
// (2) 出力ヘッダをセットする
header('Content-Type: text/xml');
header('Content-Disposition: attachment; filename="users.xml"');
// (3) XMLのヘッダを出力する
echo '<?xml version="1.0" encoding="utf-8" ?>'."\n";
echo "<info>\n";
// (4) 結果を出力する
while ($row = $result->fetchRow()) {
  $user_id = $row["user_id"];
  $name    = htmlentities($row["name"]);
  $email   = htmlentities($row["email"]);
  echo "<item>\n";
  echo "  <user_id>{$user_id}</user_id>\n";
  echo "  <name>{$name}</name>\n";
  echo "  <email>{$email}</email>\n";
  echo "</item>\n";
}
echo "</info>\n";
