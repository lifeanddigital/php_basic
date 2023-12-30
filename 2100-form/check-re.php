<?php
$zip = trim($_GET["zip"]);
if (!preg_match("/^\d{3}\-\d{4}$/", $zip)) {
  echo "郵便番号は ###-#### の形式で入力してください。";
} else {
  echo "郵便番号の形式です。";
}
