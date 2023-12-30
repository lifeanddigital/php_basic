<pre><?php
// 奇数なら true を返す関数
function is_odd($num) {
  if ($num % 2 == 1) {
    return true;
  }
  return false;
}
// 結果を出力する関数
function print_result($num) {
  if (is_odd($num)) {
    echo "$num is odd\n";
  } else {
    echo "$num is even\n";
  }
}
// 関数を利用する例
print_result(33);
print_result(48);
print_result(102);
