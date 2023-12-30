<?php
$price = 3000;   
test();          
echo $price;     // 表示結果 → 3000

function test() {
  $price = 100; // ←「test()」内のローカル変数 $price
}