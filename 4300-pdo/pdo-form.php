<html><meta charset="utf-8"><body><?php
// MySQLへの接続設定 ----------(*1)
$user = 'testuser';
$pass = 'testpass';
$db = new PDO(
  'mysql:host=localhost;dbname=booksample',
  $user, $pass);

// ユーザーからのフォーム送信があったか -----(*2)
if (isset($_POST['name'])) {
  process_form();
} else {
  show_form();
}

// フォームを表示 ----------------(*3)
function show_form() {
  // フォームの表示
  $self = $_SERVER['SCRIPT_NAME'];
  echo <<< END_OF_FORM
<form method="POST" action="$self">
  Name:<input type="text" name="name" /><br/>
  Price:<input type="text" name="price" /><br/>
  <input type="submit" />
</form><hr/>
END_OF_FORM;
  show_items();
}
// フォームの処理 ----------------(*4)
function process_form() {
  global $db;
  // 入力データの検証
  if (!isset($_POST['name'])) err('no name');
  if (!isset($_POST['price'])) err('no price');
  $name  = $_POST['name'];
  $price = intval($_POST['price']);
  if (strlen($name) > 63) err('name too long');
  if ($price <= 50) err('Invalid price');
  // データベースに挿入(プレースホルダを使用)
  $stmt = $db->prepare(
    'INSERT INTO items(name, price)'.
    'VALUES(?,?)');
  $stmt->execute(array($name, $price));
  // 結果を表示
  $self = $_SERVER['SCRIPT_NAME'];
  echo "データを挿入しました。";
  echo "<a href='$self'>→戻る</a>";
}
// エラーの表示
function err($msg) {
  echo "[ERROR] $msg"; exit;
}
// アイテム一覧を表示 ----------(*5)
function show_items() {
  global $db;
  $r = $db->query("SELECT * FROM items ORDER BY item_id DESC");
  if (!$r) err("Database error");
  echo "<table><tr><th>品名</th><th>値段</th></tr>";
  foreach ($r as $row) {
    $name = htmlentities($row['name']);
    $price = intval($row['price']);
    echo "<tr><td>$name</td><td>{$price}円</td></tr>";
  }
  echo "</table>";
}
?><body></html>

