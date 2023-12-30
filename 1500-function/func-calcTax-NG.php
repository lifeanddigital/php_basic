×間違ったプログラム
<?php
$price = 3000;
$tax_rate = 0.08;
echo calcTax($price); // 表示結果　→  3000 ?

function calcTax($value) { // 税込金額を計算する関数
  return floor($value * $tax_rate);
}
