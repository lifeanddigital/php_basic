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
// http://localhost/mysite/php_basic/1180-heredocument/ph1180-heredocument.php
// http://lifeanddigital.net/mysite/php_basic/1180-heredocument/ph1180-heredocument.php

function know_heredocument() {
  echo <<< _HEREDOC_
  <h2>ヒアドキュメントについて</h2>
  <pre>
   「ヒアドキュメント」は長い文章やHTMLコードの出力する構文です。
    これは、「<<<」に続いて任意の終端ワードを指定し
    次に終端ワードが出てきたところまでを文字列と指定することができます。

    これは次のような書式で記述します。

   ［ヒアドキュメントの書式］
    echo <<< 終端ワード
    ...ここに文字列...
    ...ここに文字列...
    終端ワード;
    このソースコードではヒアドキュメントの終端ワードに「_HEREDOC_」という記号を使って
    文章を表示しています。
  </pre>
  _HEREDOC_;
}

function learn_heredocument() {
  # 説明文の表示
  echo <<<_HERDOC_
  <h2>ヒアドキュメントの変数</h2>
  <pre>
  ヒアドキュメントは、二重引用符の文字列のと同じ意味を持ちます。
  そのため、変数の展開なども行われます。
  ヒアドキュメントは、変数に文字列を代入することもできます。
  </pre>
  _HERDOC_;

  echo <<< '_NOWDOC_'
  <h2>ナウドキュメントの変数</h2>
  <pre>
  文字列の変数展開がない。（単一引用符と同じ動作を表す）
  変数を表す「$」やエスケープ文字をなどを含む長文を 表示したいときに便利です。
  Nowdoc構文は、PHP5.3.0以降で利用可能です。
  </pre>
  _NOWDOC_;

  # 変数に文字列と数値を代入
  $name = "lifeplan";
  $age = 18;

  # ヒアドキュメントを、変数に文字列を代入
  $body = <<< END_OF_DATA
  <pre>
    変数に文字列を代入する例
    name:$name
    age = $age
  </pre>
  END_OF_DATA;

  # ヒアドキュメントを格納した変数を出力
  echo $body;
}

function heredocument_form() {
  echo "<h2>FROMの表示</h2>" ;
  echo <<< _FORM_
  <form action="$_SERVER[SCRIPT_NAME]" method="GET">
    <input type="text" name="username" />
    <input type="submit" value="送信" />
  </form>
_FORM_;
}

function heredocument_table() {
echo "<h2>TEABLEの表示</h2>" ;
echo <<< _TABLE_
<table  border="1">
<thead>
<tr><th>項目</th><th>print関数</th><th>echo文</th></tr>
</thead>
<tbody>
<tr><th>種類</th><th>関数</th><th>構文</th></tr>
<tr><th>引数</th><th>1</th><th>複数</th></tr>
<tr><th>文字の結合</th><th> . で連結して１引数にする</th><th> , で引数入力</th></tr>
<tr><th>" "表記</th><th>式を評価する</th><th>式を評価する</th></tr>
<tr><th>' '表記</th><th>式を評価しない</th><th>式を評価しない</th></tr>
</tobdy>
</table>
_TABLE_;
}

if (realpath($_SERVER["SCRIPT_FILENAME"]) == realpath(__FILE__)) {
  header("Cache-Control: no-cache, must-revalidate"); 
  header('Content-Type: text/html; charset=UTF-8');
  header('Content-Language: ja');
  echo '<link rel="stylesheet" type="text/css" href="../../css/style.css" />' ;
  know_heredocument();
  learn_heredocument() ;
  heredocument_table() ;
  heredocument_form() ;
}
?>
