<?php
// http://localhost/mysite/PHP_Basic/main.php 

function ex_print(){
  print ("Hello php") ;
  echo "<br>" ;
  echo "hello php" ;
}

function Comment() {
  echo <<< _SYNTAX_
  <pre>
  コメントの記述方法
  // 以降の行はコメントになる
  #  以降の行はコメントになる
  /* */ で囲まれた範囲はコメントになる 
  </pre>
  _SYNTAX_;
  }
  
  function Syntax(){
    header('Content-Type: text/html; charset=UTF-8');
    header('Content-Language: ja');
    echo <<< _SYNTAX_
    <pre>
        PHPスクリプトの記述方法
        PHPスクリプトはHTMLに埋め込む事ができる。
        PHPスクリプトの文字コードは「UTF-8」を使用する。
        PHPスクリプトは、半角英数で記述する
        PHPスクリプトのファイルの拡張子「.php」にする
        PHPスクリプトは開始タグ「<?php 」 と終了タグ「 ?>」の間に記述する。
        PHPスクリプトのコードの最後にはセミコロン「;」を記述する。
        PHPスクリプトのコードの間は「半角スペース」「タブ」「改行」で区切る。
        PHPスクリプトの文法を満たせば、自由に記述できる。   
    </pre>
    _SYNTAX_;
    }
      
function heredocument() {
echo <<< _BODY_
<html>
<head><meta charset="UTF-8"></head>
  <body>
    <h2>ヒアドキュメント</h2>
      <p>
        ヒアドキュメントは任意の区切り文字列を使って
         複数行に渡る文字列を表示させるのに便利な仕組みです。
      </p>
  </body>
</html>
_BODY_;
}

// フォームの表示
function show_form() {
  header('Content-Type: text/html; charset=UTF-8');
  header('Content-Language: ja');
  $self = $_SERVER['SCRIPT_NAME'];
  echo <<< END_OF_FORM
  <form method="POST" action="$self">
  Name:<input type="text" name="name" /><br/>
  Price:<input type="text" name="price" /><br/>
  <input type="submit" />
  </form>
END_OF_FORM;
}

function process_form() {
  // 入力データの検証
  if (!isset($_POST['name'])) {
    $name = 'no name';
  }else{
    $name  = $_POST['name'];
  }
  
  if (!isset($_POST['price'])){
    $price = 'no price' ;
  }else{
    $price = intval($_POST['price']);
  } 
  echo $name ;
  echo "<br>" ;
  echo $price ;
}

function sub_main(){
  ex_print() ;
  Syntax() ;
  Comment() ;
  heredocument() ;
  show_form() ;
  process_form() ;
}

if (realpath($_SERVER["SCRIPT_FILENAME"]) == realpath(__FILE__)){
  sub_main() ;  
}
?>
