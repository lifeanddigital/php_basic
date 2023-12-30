<?php
$hoge = array(array("id"=>1,"name"=>"banana"),array("id"=>2,"name"=>"apple"));
ob_start();                    // 捕捉開始
var_dump($hoge);               // 出力を行う
$contents = ob_get_contents(); // 補足した出力を$contentsに代入する
ob_end_clean();                // 出力を標準出力に戻す
error_log($contents);          // エラーログに書き出す
