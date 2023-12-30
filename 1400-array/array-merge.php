<pre><?php
// (1) 連想配列の加算
$a = array("taro"=>"dog", "tama"=>"cat");
$b = array("sabu"=>"bird", "siro"=>"fox");
$c = $a + $b;
echo "--- 連想配列の加算 ---\n";
print_r($c);

// (2) 配列の加算
$a = array("banana", "orange");
$b = array("melon", "tomato", "mango");
$c = $a + $b; // ←要素0番と、1番が重なっていることに注意
echo "--- 配列の加算 ---\n";
print_r($c);
// (3) array_merge()を使う方法
$c = array_merge($a, $b);
echo "--- array_merge() ---\n";
print_r($c);
