<meta charset="utf-8"><pre><?php
// XMLの文字列
$xml_str = <<< END_OF_XML
<?xml version="1.0" encoding="utf-8" ?>
<rss version="2.0">
<channel>
  <title>天気予報</title>
  <link>http://weather.example.com/</link>
  <description>最新の天気予報を紹介しています。</description>
  <item>
    <title>3月14日の天気</title>
    <link>http://weather.example.com/0314</link>
    <description>3月14日 晴れ</description>s
  </item>
  <item>
    <title>3月15日の天気</title>
    <link>http://weather.example.com/0315</link>
    <description>3月15日 雨</description>s
  </item>
</channel>
</rss>
END_OF_XML;
// パースする
$xml = simplexml_load_string($xml_str);
// XMLの内容を表示する
echo $xml["version"]."\n";
echo $xml->channel->item[0]->title . "\n";//表示結果→3月14日の天気
echo $xml->channel->item[1]->title . "\n";//表示結果→3月15日の天気
