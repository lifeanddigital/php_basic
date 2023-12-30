<?php
// http://localhost/php/phpex/1-1-basic/heredocment/test-heredocment.php -->

echo <<<_BODY_
□ヒアドキュメントの変数の展開について
便利なことに、ヒアドキュメントは、二重引用符の文字列のと同じ意味を持ちます。
そのため、変数の展開なども行われます。
また、echoで文字列を出力するだけでなく、変数に文字列を代入することも可能です。
_BODY_;

$name = "yamashita";

$age = 18;

$body = <<<END_OF_DATA

name:$name

age = $age

END_OF_DATA;

echo $body;



