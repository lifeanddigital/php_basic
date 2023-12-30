<?php
// http://localhost/mysite/PHP_Basic/ph0005_main.php
// https://lifeanddigital.net/mysite/php_Basic/ph0005_main.php
if (realpath($_SERVER["SCRIPT_FILENAME"]) == realpath(__FILE__)){
    /** スクリプト名とファイル名を調べる*/
    print ( "スクリプト名：".realpath($_SERVER["SCRIPT_FILENAME"] ) );
    print ("<br>") ;
    print ( "ファイル名：". realpath(__FILE__) ) ;
}
?>
