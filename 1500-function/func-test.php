<?php
// 足し算を行う関数を定義する
function addNumber($a, $b) {
    $c = $a + $b;
    return $c;
}
// 宣言した関数を呼び出す
$result = addNumber(3, 5);
echo $result; // 表示結果→ 8

