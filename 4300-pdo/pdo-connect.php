<pre><?php
// �f�[�^�x�[�X�ɐڑ�
$user = "testuser";
$pass = "testpass";
$db = new PDO('mysql:host=localhost;dbname=booksample', $user, $pass);
// users�e�[�u���̓��e��\��
$r = $db->query("SELECT * FROM users");
foreach ($r as $row) {
  print_r($row);
}
