<pre><?php
// 税込価格を表示する関数
function printPrice($price, $tax_rate = 0.08) {
  $tax = floor($price * $tax_rate);
  $price2 = $price + $tax;
  echo "$price2 yen = $price + $tax\n";
}
// 関数を呼び出す
printPrice(100);
printPrice(500);
printPrice(100, 0.1);
printPrice(500, 0.1);
