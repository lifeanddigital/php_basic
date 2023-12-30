<meta charset="utf-8"><?php
$afile = "test-permission.txt";
// 書き込みテスト
if (is_writeable($afile)) {
  die("書込パーミッションがありません。");
}
file_put_contents($afile, "Hello, World!");

// 読み込みテスト
if (!file_exists($afile)) {
  die("ファイルがありません。");
}
if (!is_readable($afile)) {
  die("読込パーミッションがありません。");
}
$text = file_get_contents($afile);
echo htmlentities($text);
