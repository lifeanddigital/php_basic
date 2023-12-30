<!--　URL　：　　http://locakhost/php/phpex/1-1-basic/2-3数字について/算術演算子.php-->

//論理積

<?php
$a = 0xff;

$b = 0xf0;

$c = $a  &  $b;

echo sprintf("%08b\n", $c); //2進数で出力　→　11110000

//論理和

$a = 0xf0;

$b = 0x0f;

$c　= $a | $b; //論理和

echo sprintf("%08b\n",$c); //2進数で出力→111111111

?>