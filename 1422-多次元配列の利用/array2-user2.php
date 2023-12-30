<!--  URL : http://localhost/php/phpex/1-1-basic/4-2多次元配列と配列の操作/多次元配列の利用/array2-user2.php --> 
<pre><?php
$users=array(
array(
"id"=>100,
"name"=>"suzuki"
"age"=>28,
"hoby"=>array("programming","reading")
),
array(
"id"=>101,
"name=>"tanaka",
"age"=>38,
"hobby"=>array(cooking)
),
array(
"id"=>102,
"name"=>"inoue",
"age"=>32,
"hobby"=>array("cooking")
)
);
echo $users[0]["name"]."\n";
echo $users[0]["hobby"][0]."\n";
echo $users[0]["hobby"][1]."\n";
echo $users[1]["hobby"][0]."\n";