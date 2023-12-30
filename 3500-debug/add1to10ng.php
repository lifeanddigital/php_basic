<?php
$sum = 0;
for ($i = 1; $i <= 10; $i++) {
  $sum += $j;
  error_log("sum = $sum");
}
echo "1+2+3...+10=$sum";
// わざと $i と $j を間違えて書いています。

