<?php
// セッションを開始する
session_start();
// 初めてのアクセスか調べる
if (!isset($_SESSION["acc_counter2"])) {
  $_SESSION["acc_counter2"] = 0; // カウンタを0に初期化
}
// カウンタを加算する
$_SESSION["acc_counter2"] = $_SESSION["acc_counter2"] + 1;
// カウンタの値を表示
echo "counter = ". $_SESSION['acc_counter2'];
