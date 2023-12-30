<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1679586369602702"
     crossorigin="anonymous"></script>
<!-- バナー -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-1679586369602702"
     data-ad-slot="1662254815"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<?php
    // http://localhost/mysite/php_basic/1120-basic-rule/ph1120_syntax.php
    // https://lifeanddigital.net/mysite/php_basic/1120-basic-rule/ph1120_syntax.php --> 

    function know_syntax() {
        echo <<< _SYNYAX_
        <pre>
        <h2>PHP プログラムを書く基本ルール </h2>

        PHPスクリプトのファイルの拡張子「.php」にする。	
        PHPスクリプトはHTMLに埋め込む事ができる。

        PHPスクリプトは開始タグ「<?php 」 と終了タグ「 ?>」の間に記述する。	
        PHPスクリプトの文字コーsドは「UTF-8」を使用する。	
        PHPスクリプトは、半角英数で記述する。	

        PHPスクリプトのコードの最後にはセミコロン「;」を記述します。
        PHPスクリプトのコードの間は「半角スペース」「タブ」「改行」で区切る。
        PHPスクリプトの文法を満たせば、自由に記述できる。
    
        PHPスクリプトの文字列は "" 又は ' ' で囲む
        PHPスクリプトの数値は、123 の様に直接表示する。
        
        PHPスクリプトで //  以降の行はコメントになる
        PHPスクリプトで /*  */ で囲むとコメントになる。
        PHP文法はこちら
        http://jp.php.net/manual/ja/
        </pre>
        _SYNYAX_;
    }
    function learn_syntax() {
        /**
         * ***** 以下にプログラムを書く
         * <?php                  
         *   print " PHP TEST " ;  
         * ?>
        */                    
    }
    
    if (realpath($_SERVER["SCRIPT_FILENAME"]) == realpath(__FILE__)) {
        header("Cache-Control: no-cache, must-revalidate"); 
        header('Content-Type: text/html; charset=UTF-8');
        header('Content-Language: ja');
        echo '<link rel="stylesheet" type="text/css" href="../../css/style.css" />' ;
        know_syntax() ;
        learn_syntax() ;
    }
?>
