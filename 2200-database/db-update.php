<meta charset="UTF-8"><pre><?php
require 'MDB2.php';
// データベースに接続する
$db = MDB2::connect('mysql://testuser:testpass@localhost/booksample');
if (PEAR::isError($db)) { die("DBへの接続失敗"); }
$db->loadModule('Extended');
// SQLを実行する
$affected = $db->exec('UPDATE users SET email="taro@example.org" WHERE user_id=1');
echo "変更したのは.." . $affected . " 件です。\n";
// 実行した結果を表示する
$r = $db->getAll("SELECT * FROM users");
print_r($r);
