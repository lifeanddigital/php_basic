<pre><?php
// �f�[�^�x�[�X�ɐڑ�
$db = new PDO('mysql:host=localhost;dbname=booksample',
              'testuser','testpass');
// �v���y�A�[�h�X�e�[�g�����g����������
$stmt = $db->prepare("SELECT * FROM users WHERE name=?");
// �ϐ��ƃp�����[�^�����т���
$stmt->bindParam(1, $name);
// �ϐ���ݒ肵��SQL�����s
$name = "taro";
$stmt->execute();
// ���ʂ�\��
print_r($stmt->fetch());
