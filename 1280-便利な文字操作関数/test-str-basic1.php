<!-- URL : http://localhost/php/phpex/1-1-basic/str-basic/test-str-basic1.php -->
<pre>
<?php
//trim()利用例
$s　=　"abc";
echo　"＼n";

//stlen（）利用例

$s = "123456789";

echo　"＼n";

$s　=　"漢字";

echo stren($s);//表示結果→10

echo　stren（$s);//表示結果→4から6（文字コードにより異なる）

echo　"＼n";

//substr(利用例)
$s　= "0123456789";


echo sub str($s ,0.5.)"＼n";//表示結果→01234

echo substr($s,3,2)."＼n";//表示結果→34


echo substr(&s,6)."＼n";//表示結果→6789

echo　substr($s,-2,2)."＼n";//表示結果→89

//strpos（）利用例

$s　=　"abcdefghijk";
echo　strpos($s,"c")."／n";//表示結果→2

echo　strpos($s,"def")."／n";//表示結果3

$i = strpos( $S,"x");
if($i === false){echo 'false';}else{echo $i;}//表示結果→falese





?>