<?php
showHeader("TEST");
echo "<h1>TEST</h1><p>This is test.</p>";
showFooter();

// ヘッダを表示する関数
function showHeader($title) {
  echo "<html><head><title>$title</title></head><body>\n";
}
// フッタを表示する関数
function showFooter() {
  echo "</body></html>\n";
}
