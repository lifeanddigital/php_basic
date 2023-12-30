<pre><?php
// データベースに接続
$user = "testuser";
$pass = "testpass";
$db = new PDO('mysql:host=localhost;dbname=booksample', $user, $pass);
// usersテーブルの内容を表示
$r = $db->query("SELECT * FROM users");
foreach ($r as $row) {
  print_r($row);
}
