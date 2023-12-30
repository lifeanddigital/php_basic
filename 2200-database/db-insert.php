<meta charset="UTF-8"><pre><?php
require 'MDB2.php';
// データベースに接続する
$db = MDB2::connect('mysql://testuser:testpass@localhost/booksample');
if (PEAR::isError($db)) { die("接続失敗:". $db->getMessage()); }
// テーブルにユーザ情報を挿入するSQL
$query = <<< EOD
INSERT INTO users (user_id, name,   email)
           VALUES (1,       "taro", "taro@example.com")
EOD;
// SQLを実行する
$q = $db->query($query);
// 実行した結果を表示する
if (MDB2::isError($q)) {
  die("SQLの実行に失敗:" . $q->getMessage());
} else {
  echo "成功しました。";
}
