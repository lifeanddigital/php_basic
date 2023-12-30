<!-- URL : http://localhost/php/phpex/1-1-basic/strcat/test-strcat1.php -->
<pre>
<?php

//単純文字列の結合の例
　$　str　=　"abc"."def";

echo$str;//出力結果→abcdef

echo　"＼n;"

数値や変数を混ぜた例

$price　=　300;


$str ="price".$price."yen(tax". 8 ."%)";

echo &str//出力結果→price300yen(tax　8%)

?>