<pre><?php
// 連想配列の場合
$a["tanaka"] = 3;
$a["suzuki"] = 2;
$a["aikawa"] = 1;
foreach ($a as $key => $value) {
  echo "$key : $value\n";
}
// 数値配列の場合
$b[5] = 50;
$b[3] = 30;
$b[1] = 10;
foreach ($b as $key => $value) {
  echo "$key : $value\n";
}
