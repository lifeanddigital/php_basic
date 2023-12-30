<meta charset="UTF-8"><?php
// フォームの結果を集計
$a = isset($_GET["a"]) ? intval($_GET["a"]) : 0;
$b = isset($_GET["b"]) ? intval($_GET["b"]) : 0;
$answer = $a + $b;
// フォームを表示
echo <<<END_OF_FORM
<form action="$_SERVER[SCRIPT_NAME]" method="GET">
  <input type="text" name="a" value="$a" />＋<br/>
  <input type="text" name="b" value="$b" />
  <input type="submit" value="計算" />
  <div style="font-size:2em">$answer</div>
</form>
END_OF_FORM;

