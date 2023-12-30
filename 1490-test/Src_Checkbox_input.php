<!-- URL : http://localhost/php/PHP_Document/PH2030_Form_CheckBox/Src_Checkbox_input.php -->

<!doctype html>
<html lang="ja">
<head>

<meta charset="utf-8">
<title>src0430_checkbox_input.php</title>
</head>

<body>

<header>

</header>

<main>
<h2>チェックボックスの値を取得する202101</h2>

<div class="content">
<form action="Src_checkbox_submit.php" method="post">  
  <p>ご予約希望日（複数選択可）</p>
  
  <p>
    <input type="checkbox" name="reserve[]" value="1/1"> 1月 1日<br>
    <input type="checkbox" name="reserve[]" value="1/2"> 1月 2日<br>
    <input type="checkbox" name="reserve[]" value="1/3"> 1月 3日<br>
  </p>
  
  <input type="submit" value="送信する">
</form>
</div>
</main>
</body>
</html>