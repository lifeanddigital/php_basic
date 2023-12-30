<?php
    // http://localhost/mysite/php_basic/ph0040_php.php
    // https://lifeanddigital.net/mysite/php_basic/ph0040_php.php --> 

    function sub_main() {  
	print "<h1>" ;
    print "Function が実行された" ;  
	print "</h1>" ;
    }
    
    if (realpath($_SERVER["SCRIPT_FILENAME"]) == realpath(__FILE__)) {
        # header('Location: http://www.example.com/');
        header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
        header('Content-Type: text/html; charset=UTF-8');
        header('Content-Language: ja');
    
        sub_main () ;
    }
?>
