<?php
    // http://localhost/mysite/php_Basic/ph0040_php.php
    // https://lifeanddigital.net/mysite/php_Basic/ph0040_php.php --> 

    function sub_main() {
        header('Content-Type: text/html; charset=UTF-8');
        header('Content-Language: ja');
	    print "<h1>" ;
        print "Function が実行された" ;  
	    print "</h1>" ;
    }

    if (realpath($_SERVER["SCRIPT_FILENAME"]) == realpath(__FILE__)) {
        sub_main () ;
    }
?>
