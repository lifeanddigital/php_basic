<?php

// 割り算を行う関数
function div_test($a, $b) {
  if ($b == 0) { throw new Exception("Division by Zero"); }
  return $a / $b;
}
// 計算を行う
try {
  $value = 0;
  $value += div_test(6, 3);
  $value += div_test(5, 0);
  $value += div_test(4, 2);
  echo "[OK] value=$value";
} catch (Exception $e) {
  echo "[ERROR]".$e->getMessage();
}
