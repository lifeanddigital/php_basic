<!--  URL : http://localhost/php/phpex/1-1-basic/4-1配列について/配列要素を繰り返し処理するforeach構文foreach-fruits.php --> 
<pre><?php
$fruits=array("banana","apple","peach");
foreach($fruits as $index=>$value){
echo"$index:$value\n";
}