<?php
// �t�@�C���Ƀe�L�X�g����������
file_put_contents("test.txt", "This is a pen.");
// �t�@�C���̓��e��ǂݍ���ŕ\������
$text = file_get_contents("test.txt");
echo htmlentities($text);

