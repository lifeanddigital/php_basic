<?php
$price = 3000; 
$tax_rate = 0.08; 
echo calcTax($price); // 表示結果　→  240

function calcTax($value) { // 税込金額を計算する関数
  global $tax_rate; // グローバル変数を参照するように指示
  return floor($value * $tax_rate);
}
