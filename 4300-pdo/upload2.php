<meta charset=utf-8 /><?php

if (isset($_FILES['upfile'])) {
  process_form();
} else {
  show_form();
}

function show_form() {
  echo <<< EOS
<h1>JPEGファイルを指定してください</h1>
<form action="{$_SERVER['SCRIPT_NAME']}"
      method="post"
      enctype="multipart/form-data">
  <input type="file" name="upfile" /><br />
  <input type="submit" value="送信" />
</form>
EOS;
}

function process_form() {
  // 保存ディレクトリのチェック
  $save_dir  = dirname(__FILE__);
  $save_file = $save_dir.'/test.jpeg';
  if (!is_writable($save_dir)) {
    die("保存ディレクトリに保存できません<br/>→{$save_dir}");
  }
  // ファイル名のチェック
  $tmp_name  = $_FILES["upfile"]["tmp_name"];
  $org_name  = $_FILES["upfile"]["name"];
  // 拡張子のチェック
  if (!preg_match('#\.(jpeg|jpg)$#i', $org_name)) {
    die("JPEGファイルを指定してください。");
  }
  // ファイルの検証
  $finfo = finfo_open(FILEINFO_MIME_TYPE);
  $mime_type = finfo_file($finfo, $tmp_name);
  finfo_close($finfo);
  if ($mime_type != "image/jpeg") {
    die("ファイルがJPEGではありません。{$mime_type}でした。");
  }
  if (!is_uploaded_file($tmp_name)) {
    die("ファイルをアップロードできませんでした。");
  }
  // ファイルを任意のディレクトリに移動
  if (!move_uploaded_file($tmp_name, $save_file)) {
    die("ファイルをアップロードできませんでした。");
  }
  echo "<h1>アップロードしました</h1>";
  echo "<img src='test.jpeg' />";
}



