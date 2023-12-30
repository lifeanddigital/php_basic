<?php
// 果物を色分けしたもの
$colors = array(
  "red"    => array("Apple","Strawberry","Watermelon"),
  "green"  => array("Cucumber","Cabbage","Avocado"),
  "yellow" => array("Pumpkin","Mango","Pine","Banana")
);
// 各要素を出力
foreach ($colors as $color => $list) {
  echo "<h3>$color</h3>";
  echo "<ul>";
  foreach ($list as $fruits) {
    echo "<li>$fruits</li>";
  }
  echo "</ul>";
}
