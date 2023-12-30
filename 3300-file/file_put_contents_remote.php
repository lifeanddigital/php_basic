<?php
// FTPの設定
$host = "ftp.example.com";
$user = "username";
$pass = "password";
$path = "/ftp-up-test.txt";
$data = "FTP UPLOAD TEST!!";
// アップロードを実行
file_put_contents("ftp://$user:$pass@$host$path", $data);
echo "ok.";
