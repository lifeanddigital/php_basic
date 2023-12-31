<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>

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
// http://localhost/mysite/php_basic/1170-value/ph1170_value.php
// https://lifeanddigital.net/mysite/php_basic/1170-value/ph1170_value.php  

function know_value () { 
    echo <<< '_VALUE1_'
    <h2>変数について</h2>
    <pre>
    変数は、プログラムが動作する間、一時的にコンピューターのメモリ上に値を保持する事ができます。
    変数は、演算が可能です。
    変数に値を入れる時は = （代入演算子）を使用します。
    変数の値は、 echo文 やprint関数を使用して出力する事ができます。

    <h2>変数名のルールについて</h2>
    変数名の先頭には、$（ドルマーク）を付ける
    変数名は、英文字、日本語文字、アンダースコアを使用できる
    先頭に数字は使えない
    大文字・小文字は区別する
    例
        $name
        $_pref_name
        $year200

    <h2>変数の評価について</h2>
     出力文の " " 内に記述すると値が表示されます（内容が評価される）
     出力文の ' ' 内に記述すると変数名が表示されます

    構文：  $変数名 = 値;
    </pre>
    _VALUE1_ ;
}

function learn_value () { 
    echo "<h2>実行例</h2>" ;
    echo '<p> 変数 $name に文字列 "lifeplan" を格納する </p>' ;
    $name = "lifeplan";

    echo '<p> 変数 $age に数値 18 を格納する </p>' ;
    $age = 18;

    echo '<p> 変数 の内容を表示する </p>' ;
    echo '$nameの値 : ' , $name , "<br>" ; 
    echo '$ageの値 : ' , $age , "<br>";

    echo '評価しながら出力する' , "<br>";
    echo "名前は $name です。年齢は $age 歳です", "<br>";

    echo '評価しながら出力する' , "<br>";
    echo '名前は $name です。年齢は $age 歳です', "<br>";
}
function practice_value(){
    echo '<h3> <p> 変数 の内容を表示する </p>' ;
    // 変数　&name に　山田を格納する
    // 変数　&age  に　18を格納する
    $name = "山田";
    $age = 18 ;
    echo "名前は $name です。年齢は $age 歳です", "<br>";
    echo '名前は $name です。年齢は $age 歳です', "<br>";
}
if (realpath($_SERVER["SCRIPT_FILENAME"]) == realpath(__FILE__)) {
    know_value () ;
    learn_value () ;
    practice_value() ;
}
?>
