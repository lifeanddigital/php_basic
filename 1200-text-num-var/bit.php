<pre>
<?php
// 論理積
$a = 0xFF;
$b = 0xF0;
$c = $a & $b;
echo sprintf("%08b\n", $c); // 二進数で出力→ 11110000

// 論理和
$a = 0xF0;
$b = 0x0F;
$c = $a | $b; // 論理和
echo sprintf("%08b\n", $c); // 二進数で出力→ 11111111

