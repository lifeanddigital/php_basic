<!-- URL : http://localhost/php/phpex/1-1-basic/escape/test2-escape.php -->
<pre>
<?php
//タブと改行のテスト
echo "Name ＼t　Point＼n";

echo"---＼ｔ---＼n";

echo "Akaiwa ＼t 30＼n"；

echo"sato＼t　3＼n＼n"

//ASCⅡの表示テスト

echo "mailto:test＼ｘ40example＼x20e com＼n＼n";

//変数の埋め込みテスト

$age = 30;

echo"$ageの値は...$age =＼n";