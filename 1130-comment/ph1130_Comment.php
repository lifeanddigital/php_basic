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
// http://localhost/mysite/php_Basic/1130-comment/ph1130_Comment.php 
// https://lifeanddigital.net/mysite/php_basic/1130-comment/ph1130_Comment.php  

function know_comment() {
    echo <<< _COMMENTS_
    <pre>
    <h2> コメントの書き方 </h2>
  
    PHPのプログラムの中には、コメントを記述できます。
    コメントにはプログラムの動作には、影響を与えない文です。

    コメントには、次の種類があります。

    #   1行コメント。「#」から文末までをコメントとして扱う</th><tr>
    //  1行コメント。「//」から文末までをコメントとして扱う</th><tr>
    /*...*/  範囲コメント。「/*」から「*/」までをコメントとして扱う</th><tr>
    
    コメントには、プログラムの解説や説明を記しておくことができます。
    デバック時に、エラーの文等をコメントアウトしてテストします。

    _COMMENTS_;
}

function learn_comment() {
    //コメントテスト
    echo "<h2> コメントアウトした文は実行されない</h2>";
    echo "<h2>test</h2>";
    #echo "<p>test2</p>";
    //echo "<p>test</p>";
    /*echo "<p>test4</p>";*/  

}

if (realpath($_SERVER["SCRIPT_FILENAME"]) == realpath(__FILE__)){
  know_comment() ;
  learn_comment();
}
?>
