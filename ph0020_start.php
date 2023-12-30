<?php
    // http://localhost/mysite/PHP_Basic/ph_start.php

    function ex_print() {
        print ("Hello php") ;  
    }
  
    function php_start() {
        ex_print() ;
    }

    if (realpath($_SERVER["SCRIPT_FILENAME"]) == realpath(__FILE__)){
        /** realpath($_SERVER["SCRIPT_FILENAME"] 実行されているプログラム名　*/
        /** realpath(__FILE__)　このプログラムのファイル名　*/
        /** ここに処理を書く */
        print ( "main program") ;
    }
?>