<pre><?php
// �f�[�^�x�[�X�ɐڑ�
$db = new PDO('mysql:host=localhost;dbname=booksample',
              'testuser','testpass');
// SQL����������
$stmt = $db->prepare(
  'INSERT INTO users (user_id,name,email) VALUES (?,?,?)');
// SQL�����s
$stmt->execute(array(13,"arasi","arasi@example.com"));
// ���ʂ�\��
print_r($db->query("SELECT * FROM users")->fetchAll());
