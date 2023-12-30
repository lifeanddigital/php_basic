<pre><?php
// trim()の利用例
$s = "    abc     ";
echo trim($s);   // 表示結果 → abc
echo "\n";
// strlen()の利用例
$s = "1234567890";
echo strlen($s); // 表示結果 → 10
echo "\n";
$s = "漢字";
echo strlen($s); // 表示結果 → 4から6(文字コードにより異なる)
echo "\n";
// substr()の利用例
$s = "0123456789";
echo substr($s,0,5)."\n"; // 表示結果 → 01234
echo substr($s,3,2)."\n"; // 表示結果 → 34
echo substr($s,6)."\n";   // 表示結果 → 6789
echo substr($s,-2,2)."\n";   // 表示結果 → 89
// strpos()の利用例
$s = "abcdefghijk";
echo strpos($s, "c")."\n";   // 表示結果 → 2
echo strpos($s, "def")."\n"; // 表示結果 → 3
$i = strpos($s, "x");
if ($i === false) { echo 'false'; } else { echo $i; } // 表示結果 → false
