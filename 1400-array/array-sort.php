<pre><?php
// sort() の使用例
$ages = array("miyata"=>32, "igawa"=>28, "yoneda"=>41, "tuboi"=>21);
sort($ages);
print_r($ages);
// ksort() の使用例
$ages = array("miyata"=>32, "igawa"=>28, "yoneda"=>41, "tuboi"=>21);
ksort($ages);
print_r($ages);
// asort() の使用例
$ages = array("miyata"=>32, "igawa"=>28, "yoneda"=>41, "tuboi"=>21);
asort($ages);
print_r($ages);
