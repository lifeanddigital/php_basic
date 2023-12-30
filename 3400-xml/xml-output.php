<meta charset="utf-8"><pre><?php
// XMLの文字列
$xml_str = <<< END_OF_XML
<channel>
  <title>天気予報</title>
  <link>http://weather.example.com/</link>
  <description>最新の天気予報を紹介しています。</description>
</channel>
END_OF_XML;
// パースする
$xml = simplexml_load_string($xml_str);
// 内容を変更する
$xml->title = "お天気情報";
$xml->link = "http://example.com/tenki";
// XMLとして出力する
echo $xml->asXML();
