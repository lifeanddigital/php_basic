<?php
// 定数の定義
define("DEFAULT_TAX", 0.08);

// 定数を変数の初期値に指定
function calcPrice($value, $tax = DEFAULT_TAX) {
  return floor($value * (1 + $tax));
}
// 利用例
echo calcPrice(500);
