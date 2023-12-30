<!-- URL : http://localhost/php/phpex/1-1-basic/nowdocs/test-nowdocs.php -->

<?php

$a = 'test';

//Nowdoc

echo <<< '_BODY_'
<p>変数などが展開されないそれがNowdocです!!
$aの内容が展開されません。</p>
_BODY_;

//ヒアドキュメント

echo <<<"_BODY_"
<p>

変数などが展開される。それがヒアドキュメントです。！！

\$aがなどが展開されaになります。</p>

_BODY_;


?>
