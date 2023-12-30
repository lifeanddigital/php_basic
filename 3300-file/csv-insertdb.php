<pre><?php
require 'MDB2.php';
// データベースに接続する
$db = MDB2::connect('mysql://testuser:testpass@localhost/booksample');
// CSVを読み込んでデータベースに挿入する
$fh = fopen('users.csv', 'rb');
while (!feof($fh)) {
  $cols = fgetcsv($fh, 1024); // CSVを読み込む
  if (!$cols) continue;       // 空のデータは無視する
  // 読み込んだＣＳＶの各フィールドを表示
  echo "read : $cols[0]\n"; // id
  echo "       $cols[1]\n"; // name
  echo "       $cols[2]\n"; // email
  // データベースに挿入する
  $sth = $db->prepare("INSERT INTO users(user_id,name,email)VALUES(?,?,?)");
  $sth->execute($cols);
}

