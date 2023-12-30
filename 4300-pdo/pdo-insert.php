<pre><?php
try {
  // �f�[�^�x�[�X�ɐڑ�
  $db = new PDO('mysql:host=localhost;dbname=booksample',
                'testuser','testpass');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // �v���y�A�[�h�X�e�[�g�����g����������
  $stmt = $db->prepare(
     'INSERT INTO users ( user_id,  name,  email)'.
     '           VALUES (:user_id, :name, :email)');
  // �ϐ��𑩔�����
  $stmt->bindParam(':user_id', $user_id);
  $stmt->bindParam(':name',    $name);
  $stmt->bindParam(':email',   $email);
  
  // �ϐ��ɒl��ݒ肷��(1)
  $user_id = 10;
  $name    = "seijuro";
  $email   = "seijuro@example.com";
  $stmt->execute();
  // �ϐ��ɒl��ݒ肷��(2)
  $user_id = 11;
  $name    = "juniti";
  $email   = "juniti@example.com";
  $stmt->execute();
  // �Ō�� users�e�[�u���̓��e��\��
  $r = $db->query("SELECT * FROM users");
  foreach ($r as $row) {
    print_r($row);
 }
} catch (PDOException $e) {
  die ("PDO Error:" . $e->getMessage());
}
