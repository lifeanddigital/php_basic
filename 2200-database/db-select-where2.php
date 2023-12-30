<meta charset="UTF-8"><pre><?php
require 'DB.php';
// データベースに接続する
$db = DB::connect('mysql://testuser:testpass@localhost/booksample');
if (DB::isError($db)) { die("DBへの接続失敗"); }
// SQLを実行して結果を配列で得る
$result = $db->getAll('SELECT * FROM users WHERE email LIKE "%.com"');
print_r($result);
