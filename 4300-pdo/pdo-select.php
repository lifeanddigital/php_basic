<pre><?php
// データベースに接続
$db = new PDO('mysql:host=localhost;dbname=booksample',
              'testuser','testpass');
// プリペアードステートメントを準備する
$stmt = $db->prepare("SELECT * FROM users WHERE name=?");
// 変数とパラメータを結びつける
$stmt->bindParam(1, $name);
// 変数を設定してSQLを実行
$name = "taro";
$stmt->execute();
// 結果を表示
print_r($stmt->fetch());
