<pre><?php
// データベースに接続
$db = new PDO('mysql:host=localhost;dbname=booksample',
              'testuser','testpass');
// SQLを準備する
$stmt = $db->prepare(
  'INSERT INTO users (user_id,name,email) VALUES (?,?,?)');
// SQLを実行
$stmt->execute(array(13,"arasi","arasi@example.com"));
// 結果を表示
print_r($db->query("SELECT * FROM users")->fetchAll());
