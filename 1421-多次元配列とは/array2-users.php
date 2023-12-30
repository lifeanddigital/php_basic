<!--  URL : http://localhost/php/phpex/1-1-basic/4-2多次元配列と配列の操作/多次元配列とは/array2-users.php --> 
<pre><?php
$users=array(
array("id"=>100,"name"=>"suzuki","age"=>28),
array("id"=>101,"name"=>"tanaka","age"=>38),
array("id"=>102,"name"=>"inoue","age"=>32)
);
echo $users[0]["id"]."\n";  //表示言語→100
echo $users[0]["name"]."\n";//表示言語→suzuki
echo $users[2]["age"]."\n";//表示言語→32
