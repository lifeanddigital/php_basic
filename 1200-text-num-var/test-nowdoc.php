<meta charset="UTF-8">
<?php
$a = 'test';
// Nowdoc
echo <<< '_BODY_'
<p>変数などが展開されない、それがNowdocです!!
$a の内容が展開されません。</p>
_BODY_;
// ヒアドキュメント
echo <<< "_BODY_"
<p>変数などが展開される。それがヒアドキュメントです!!
\$a の内容が展開され $a になります。</p>
_BODY_;
