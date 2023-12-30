<meta charset="UTF-8"><pre><?php
require 'MDB2.php';
// データベースに接続する
$db = MDB2::connect('mysql://testuser:testpass@localhost/booksample');
// テーブルを作成するSQL
$query = <<< EOD
CREATE TABLE users (
  user_id   INT,
  name      TEXT,
  email     TEXT
)
EOD;
// SQLを実行する
$q = $db->query($query);
// 実行した結果を表示する
if (PEAR::isError($q)) {
  die("SQLの実行に失敗:" . $q->getMessage());
} else {
  echo "成功しました。";
}
