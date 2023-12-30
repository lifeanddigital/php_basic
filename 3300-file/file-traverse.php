<?php
// ディレクトリトラバースを考慮しない誤ったプログラム
$data_dir  = "/home/data";
$fname     = $_GET["filename"];
$data_file = $data_dir . '/' . $fname;
// echo htmlentities(file_get_contents($data_file)); // ※危険なのでコメントアウトしています

