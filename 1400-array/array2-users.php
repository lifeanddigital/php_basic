<pre><?php
$users = array(
  array("id" => 100, "name" => "Suzuki", "age" => 28),
  array("id" => 101, "name" => "Tanaka", "age" => 38),
  array("id" => 102, "name" => "Inoue",  "age" => 32)
);
echo $users[0]["id"]."\n";   // 表示言語→ 100
echo $users[0]["name"]."\n"; // 表示言語→ Suzuki
echo $users[2]["age"]."\n";  // 表示結果→ 32
