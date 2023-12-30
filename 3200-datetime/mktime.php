<pre><?php
$time = mktime(12,0,0,3,4,2012);
$str  = date("Y/m/d H:i:s", $time);
echo "$time ($str)";

