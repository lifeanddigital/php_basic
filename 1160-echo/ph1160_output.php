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
// http://localhost/mysite/PHP_basic/1160-echo/ph1160_output.php
// https://lifeanddigital.net/mysite/php_basic/1160-echo/ph1160_output.php  
// https://lifeanddigital.net/php-source/ph1160_output-php/

function know_output() { 
    echo "<h2>文字出力</h2>" ;
    echo <<< _KNOW_
    <pre>
    「echo」や「print」を使うと
    画面に文字列や数字・演算式を表示する事ができます。
     
        echo "Hello PHP" ;
        echo 123 ;
        
        print ("Hello PHP") ;
        print ( 123 ) ;

    補足
    PHPスクリプトの文字列は " " 又は ' ' で囲みます。
    PHPスクリプトで " " を出力させてたい時は ' ' で囲みます。
    PHPスクリプトで ' ' を出力させてたい時は " " で囲みます
    PHPスクリプトの数値は、123 の様に直接表示する。
    PHPスクリプトの数値は、演算式を使うと、計算結果が表示される。

    </pre>
    _KNOW_;
}

function learn_output() {
    echo "<h3>echo文</h3>" ;
    echo <<< _DOC1_
    <pre>
    echo の後ろに文字列や計算式を記述することができます。
    echo 関数ではなく、言語構造として組み込まれています。
    複数の引数を持つことができます。

        echo 引数1、引数2、引数3...
    </pre>
    _DOC1_;

    echo " 文字列 'TEST1' を出力する","<br>";
    echo 'echo  "TEST1"; ',"<br>";
    echo  "TEST1" ,"<br>";
    echo "<br>" ;
    echo " 数値 123 を出力する","<br>" ;
    echo 'echo 123 ;',"<br>";
    echo 123 ,"<br>";

    echo "<h3>print関数</h3>" ;
    echo <<< _DOC2_
    <pre>
    print で文字列や計算式を記述することができます。
    print は関数なので、引数は1つになります
    一般的な関数とは異なり、直後の括弧を省略することができるようになっています。
    
        print (引数)
        print  引数 
 
    </pre>  
    _DOC2_;

    print " 文字列 'TEST' を出力する"."<br>" ;
    print 'print " TEST " ; ' ."<br>"  ;
    print "文字列 " ." TEST " . "<br>" ;

    print " 数値 123 を出力する"."<br>" ;
    print 1234 ."<br>" ;
}

function practice_output() {
    // HTMLタグを出力する事ができる
    echo "<h2>演算結果の出力</h2>" ;

    // echo は、複数の引数を複数出力できる
    // 引数の区切りは、「,」（コンマ）を使う
    echo "(2 + 3)の足し算を出力<br>"  ;
    echo 'echo "足し算:", (2 + 3) ; ' . "<br>"  ;
    echo "足し算:", (2 + 3) ,"<br>"  ;

    echo "(3 - 1)の掛け算を出力<br>"  ;
    echo 'echo "引き算:", (3 - 1) ; '. "<br>"  ;
    echo "引き算:", (3 - 1) ,"<br>"  ;

    // print は、引数が一つなので文字列を連結して出力する
    // 文字列の連結は「.」(ピリオド)を使う
    print "(3 * 2 )の掛け算を出力<br>" ;
    print "掛け算:". (3 * 2 ) . "<br>" ;
    print "(3 / 2 )の掛け算を出力<br>" ;
    print "割り算:". (3 / 2 ) . "<br>" ;
}

function work_output() {
    echo "echo 文を使って文字列「果物」「リンゴ」「スイカ」を表示させる" ;
    echo "echo 文を使って数字 「1234」 「123.45」を表示させる" ;
    echo "print 文を使って文字列「果物」「リンゴ」「スイカ」を表示させる" ;
    echo "print 文を使って数字 「1234」 「123.45」を表示させる" ;
}

if (realpath($_SERVER["SCRIPT_FILENAME"]) == realpath(__FILE__)) {
    know_output() ;
    learn_output();
    practice_output() ;
    work_output() ;
}
?>

<?php
echo "<h2>演算結果の出力</h2>" ;
echo "(2 + 3)の足し算を出力<br>"  ;
echo "足し算:" , ( 2 + 3 ) , "<br>" ;

print "(3 * 2 )の掛け算を出力<br>" ;
print "掛け算;" . ( 3 * 2 ) . "<br>" ;

?>