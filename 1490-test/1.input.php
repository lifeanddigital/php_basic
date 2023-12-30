<!-- http://localhost/php/phpex/1-1-basic/test/1.input.php-->

<!DOCTYPE html>
<html lang ="ja">
<head>
<meta charset="utf-8">
<title>1.input.php</title>
</head>

<body>

<header>

</header>

<main>
<h2>チェックボックスの値を取得する</h2>

<div class="content">
<form action="1.output.php"method="post">
<p>ご予約希望日（複数選択可）</p>

<p>
<input type="checkbox" name="reserve[]" value="1/1">1/1<br>
<input type="checkbox" name="reserve[]" value="1/2">1/2<br>
<input type="checkbox" name="reserve[]" value="1/3">1/2<br>
</p>

<input type="submit" value="送信する">
</form>
</div>
</main>
</body>
</html>
