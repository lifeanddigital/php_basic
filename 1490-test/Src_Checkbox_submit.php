<!--  http://localhost/PHP_Examp/PH2030_Form_CheckBoxe/urce/src0430_checkbox_submit.php -->

<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>PHPの教科書</title>
</head>

<body>
<main>
<h2>チェックボックスの値を取得する</h2>
<?php
foreach ($_POST['reserve'] as $reserve) { print(htmlspecialchars($reserve, ENT_QUOTES) . ' ');
}
?>
</main>
</body>
</html>
