<?php
$hoge = array(array("id"=>1,"name"=>"banana"),array("id"=>2,"name"=>"apple"));
ob_start();                    // �ߑ��J�n
var_dump($hoge);               // �o�͂��s��
$contents = ob_get_contents(); // �⑫�����o�͂�$contents�ɑ������
ob_end_clean();                // �o�͂�W���o�͂ɖ߂�
error_log($contents);          // �G���[���O�ɏ����o��
