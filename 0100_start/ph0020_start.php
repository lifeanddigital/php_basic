<?php
    // http://localhost/mysite/PHP_Basic/ph0020_start.php
    // https://lifeanddigital.net/mysite/php_Basic/ph0020_start.php  
    function sub_main() {
        print ("レンタルサーバー上で、Function が実行された") ;  
    }
    if (realpath($_SERVER["SCRIPT_FILENAME"]) == realpath(__FILE__)) {
        sub_main () ;
    }
?>
