<pre><?php
try {
  // データベースに接続
  $db = new PDO('mysql:host=localhost;dbname=booksample',
                'testuser','testpass');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // プリペアードステートメントを準備する
  $stmt = $db->prepare(
     'INSERT INTO users ( user_id,  name,  email)'.
     '           VALUES (:user_id, :name, :email)');
  // 変数を束縛する
  $stmt->bindParam(':user_id', $user_id);
  $stmt->bindParam(':name',    $name);
  $stmt->bindParam(':email',   $email);
  
  // 変数に値を設定する(1)
  $user_id = 10;
  $name    = "seijuro";
  $email   = "seijuro@example.com";
  $stmt->execute();
  // 変数に値を設定する(2)
  $user_id = 11;
  $name    = "juniti";
  $email   = "juniti@example.com";
  $stmt->execute();
  // 最後に usersテーブルの内容を表示
  $r = $db->query("SELECT * FROM users");
  foreach ($r as $row) {
    print_r($row);
 }
} catch (PDOException $e) {
  die ("PDO Error:" . $e->getMessage());
}
