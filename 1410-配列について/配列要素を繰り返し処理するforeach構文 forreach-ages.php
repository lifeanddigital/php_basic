<!--  URL : http://localhost/php/phpex/1-1-basic/4-1配列について/配列要素を繰り返し処理するforreach構文 forreach-ages.php-->
<pre><?php
$ages=array("tanaka"=>32,"suzuki"=>28,"itou"=>18);
foreach($ages as $name=>$age){
echo"$name:$age \n";
}
