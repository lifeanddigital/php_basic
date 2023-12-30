<pre><?php
require 'DB.php';
// データベースに接続する
$db = DB::connect('mysql://testuser:testpass@localhost/booksample');
$array2 = array(
  array(7, "Miles Iza", "iza@example.org"),
  array(8, "Jet\tIchiro", "jet@example.org"),
  array(9, "Bamboo\nSango", "bamboo@example.org"),
  array(10, "Orenge Kita", "kita@example.org"),
);
foreach ($array2 as $cols) {
  // データベースに挿入する
  $db->query(
    "INSERT INTO users(user_id,name,email)VALUES(?,?,?)",
    $cols);
}
