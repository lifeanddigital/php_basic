<?php
    // http://localhost/mysite/PHP_Basic/ph0020_start.php
    // https://lifeanddigital.net/mysite/php_Basic/ph0020_start.php --> 

    function sub_syntax() {
        echo <<< _SYNYAX_
        PHPスクリプトのファイルの拡張子「.php」にする。	
        PHPスクリプトはHTMLに埋め込む事ができる。

        PHPスクリプトは開始タグ「<?php 」 と終了タグ「 ?>」の間に記述する。	
        PHPスクリプトの文字コードは「UTF-8」を使用する。	
        PHPスクリプトは、半角英数で記述する。	

        PHPスクリプトのコードの最後にはセミコロン「;」を記述します。
        PHPスクリプトのコードの間は「半角スペース」「タブ」「改行」で区切る。
        PHPスクリプトの文法を満たせば、自由に記述できる。
        
        PHPスクリプトで //  以降の行はコメントになる
        PHPスクリプトで /*  */ で囲むとコメントになる。

        HTMLスクリプトのコメントは <!-- --> で囲む）
        _SYNYAX_
    }

    if (realpath($_SERVER["SCRIPT_FILENAME"]) == realpath(__FILE__)) {
        sub_main () ;
    }
?>