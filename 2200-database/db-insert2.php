<meta charset="UTF-8"><pre><?php
require 'MDB2.php';
// データベースに接続する
$db = MDB2::connect('mysql://testuser:testpass@localhost/booksample');
if (PEAR::isError($db)) { die("接続失敗:". $db->getMessage()); }
// エラーが起きたらそこでプログラムを終了するように指定する
$db->setErrorHandling(PEAR_ERROR_DIE);
// SQLを実行する
$db->query('INSERT INTO users VALUES(2, "jiro", "jiro@example.com")');
$db->query('INSERT INTO users VALUES(3, "sabu", "sabu@example.com")');
$db->query('INSERT INTO users VALUES(4, "siro", "siro@example.com")');
$db->query('INSERT INTO users VALUES(5, "goro", "goro@example.com")');
echo "OK";