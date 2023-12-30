<?php
// 言語と文字エンコーディングを正しくセット
mb_language("Japanese");
mb_internal_encoding("UTF-8");
// 情報を変数にセット
$to = " <taro@example.org>";
$subject = "メールのテスト";
$body = " こんにちは。元気ですか？";
// 日本語メールの送信
mb_send_mail($to, $subject, $body);

