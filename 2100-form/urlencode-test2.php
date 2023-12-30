<html><head><meta charset="utf-8" /></head><body><pre>
<?php
if (isset($_GET["q"])) {
  $q = $_GET["q"];
  echo htmlspecialchars($q) . "\n";
  echo urlencode($q). "\n";
}
?>
<form method="get">
  <input type="text" name="q" />
  <input type="submit" value="送信" />
</form>
</pre></body></html>
