<meta charset="UTF-8"><pre><?php
require 'MDB2.php';
// データベースに接続する
$db = MDB2::connect('mysql://testuser:testpass@localhost/booksample');
if (PEAR::isError($db)) { die("接続失敗:". $db->getMessage()); }
// SQLを実行する
$id = $db->nextID('users');
$db->query("INSERT INTO users VALUES($id, 'roku', 'roku@example.com')");
$id = $db->nextID('users');
$db->query("INSERT INTO users VALUES($id, 'nana', 'nana@example.com')");
echo "OK";