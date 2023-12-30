<pre>
<?php
$name = "Yamashita";
$age = 18;
$body = <<< END_OF_DATA
name: $name
age : $age
END_OF_DATA;
echo $body;
