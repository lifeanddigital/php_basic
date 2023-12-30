<?php
// ファイルにテキストを書き込む
file_put_contents("test.txt", "This is a pen.");
// ファイルの内容を読み込んで表示する
$text = file_get_contents("test.txt");
echo htmlentities($text);

