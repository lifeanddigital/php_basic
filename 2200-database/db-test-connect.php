<meta charset="UTF-8"><?php
require 'MDB2.php';
$db = MDB2::connect('mysql://testuser:testpass@localhost/booksample');
if (PEAR::isError($db)) {
  die("接続失敗:" . $db->getMessage());
} else {
  echo "接続できました。";
}
