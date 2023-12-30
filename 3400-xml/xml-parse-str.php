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
// XMLの内容を表示する
echo "件　名 : ".$xml->title."\n";
echo "リンク : ".$xml->link."\n";
echo "説　明 : ".$xml->description."\n";


