<?php
$price = 3000; 
$GLOBALS["tax_rate"] = 0.08; 
echo calcTax($price); // 表示結果　→  240 

function calcTax($value) { // 税込金額を計算する関数
  return floor($value * $GLOBALS["tax_rate"]);
}
