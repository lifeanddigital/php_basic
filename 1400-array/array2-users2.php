<pre><?php
$users = array(
  array(
      "id"    => 100, 
      "name"  => "Suzuki",
      "age"   => 28,
      "hobby" => array("Programming", "Reading")
  ),
  array(
      "id"    => 101, 
      "name"  => "Tanaka", 
      "age"   => 38,
      "hobby" => array("Surfin","Dance","Movie")
  ),
  array(
      "id"    => 102, 
      "name"  => "Inoue",
      "age"   => 32,
      "hobby" => array("Cooking")
  )
);
echo $users[0]["name"]."\n";     // 表示結果→Suzuki
echo $users[0]["hobby"][0]."\n"; // 表示結果→Programming
echo $users[0]["hobby"][1]."\n"; // 表示結果→Reading
echo $users[1]["hobby"][0]."\n"; // 表示結果→Surfin


