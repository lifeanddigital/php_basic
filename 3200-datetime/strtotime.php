<pre><?php
// 日本時間の2012年3月4日12時を基本とする
$base     = strtotime("2012-03-04T12:00:00+09:00");
$base_c   = date("c", $base);
$d3       = date("c", strtotime("+3 day", $base));
$w2       = date("c", strtotime("+2 week", $base));
$next_sun = date("c", strtotime("next Sunday", $base));
$last_mon = date("c", strtotime("last Monday", $base));

echo <<< EOS
base        : $base_c
+3 day      : $d3
+2 week     : $w2
next Sunday : $next_sun
last Monday : $last_mon
EOS;
