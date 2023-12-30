<pre><?php
// ファイルを書込モードで開く
$fh = fopen("animals.txt", "wb");
fwrite($fh, "Wolf\n");
fwrite($fh, "Sheep\n");
fwrite($fh, "Serpent\n");
fwrite($fh, "Dove\n");
fclose($fh);

// ファイルを読込モードで開く
$fh = fopen("animals.txt", "rb");
while ($line = fgets($fh)) {
  echo htmlentities($line);
}
fclose($fh);
