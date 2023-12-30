<pre><?php
$info = getInfo("SA32");
print_r($info);
// 商品情報を返す関数
function getInfo($type) {
  $info = array(
    "ST21" => array("price"=>53000, "size"=>300, "maker"=>"NK*"),
    "SA32" => array("price"=>32100, "size"=>250, "maker"=>"NK*"),
    "GT77" => array("price"=>82000, "size"=>280, "maker"=>"soty"),
    "BBK3" => array("price"=>28300, "size"=>200, "maker"=>"CCTKN")
  );
  return $info[$type];
}
