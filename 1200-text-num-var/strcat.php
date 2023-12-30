<pre><?php
// 単純な文字列の結合の例
$str = "abc" . "def";
echo $str; // 出力結果 → abcdef
echo "\n";
// 数値や変数を混ぜた例
$price = 300;
$str   = "Price " . $price . "yen(tax " . 5 . "%)";
echo $str; // 出力結果 → Price 300yen(tax5%)"

