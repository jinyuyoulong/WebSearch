<?php
$json = "{"errNo": "0","html" : "
完成<\/div><\/div>
<\/em> <\/div> 我的股票 <\/span> (7<\/span>) <\/span> <\/span><\/div>
添加 <\/div>
编辑 <\/div>
刷新 <\/div>
置顶 <\/div><\/div> <\/div> <\/div><\/div>
代码<\/div>
名称<\/div>
当前价<\/span><\/div>
涨跌额<\/div>
涨跌幅<\/div>
最高<\/div>
最低<\/div>
更新时间<\/div><\/div>
<\/div> <\/div>
<\/div>
002709 <\/a> <\/div>
天赐材料 <\/a> <\/div>
37.99<\/span> <\/div>
+0.17 <\/div>
+0.45% <\/div>
38.19 <\/div>
37.82 <\/div>
09:40 <\/div><\/div>
<\/div> <\/div>
<\/div>
000786 <\/a> <\/div>
北新建材 <\/a> <\/div>
18.03<\/span> <\/div>
-0.08 <\/div>
-0.44% <\/div>
18.27 <\/div>
17.91 <\/div>
09:40 <\/div><\/div>
<\/div> <\/div>
<\/div>
601633 <\/a> <\/div>
长城汽车 <\/a> <\/div>
9.12<\/span> <\/div>
-0.19 <\/div>
-2.04% <\/div>
9.26 <\/div>
9.03 <\/div>
09:40 <\/div><\/div>
<\/div> <\/div>
<\/div>
000002 <\/a> <\/div>
万科A <\/a> <\/div>
24.01<\/span> <\/div>
0.00 <\/div>
+0.00% <\/div>
24.26 <\/div>
23.98 <\/div>
09:39 <\/div><\/div>
<\/div> <\/div>
<\/div>
600016 <\/a> <\/div>
民生银行 <\/a> <\/div>
5.79<\/span> <\/div>
-0.06 <\/div>
-1.03% <\/div>
5.85 <\/div>
5.78 <\/div>
09:40 <\/div><\/div>
<\/div> <\/div>
<\/div>
600036 <\/a> <\/div>
招商银行 <\/a> <\/div>
26.93<\/span> <\/div>
-0.02 <\/div>
-0.07% <\/div>
27.10 <\/div>
26.87 <\/div>
09:40 <\/div><\/div>
<\/div> <\/div>
<\/div>
600489 <\/a> <\/div>
中金黄金 <\/a> <\/div>
6.91<\/span> <\/div>
-0.01 <\/div>
-0.14% <\/div>
6.92 <\/div>
6.86 <\/div>
09:40 <\/div><\/div> 
{\x22stocks\x22: [{\x22title\x22: \x22天赐材料\x22,\x22stockcode\x22: \x22002709\x22,\x22id\x22: \x22\x22,\x22curprice\x22: \x2237.99\x22,\x22increase\x22: \x22+0.17\x22,\x22incrpercentage\x22: \x22+0.45%\x22,\x22resourcename\x22: \x22stockabgu\x22},{\x22title\x22: \x22北新建材\x22,\x22stockcode\x22: \x22000786\x22,\x22id\x22: \x22\x22,\x22curprice\x22: \x2218.03\x22,\x22increase\x22: \x22-0.08\x22,\x22incrpercentage\x22: \x22-0.44%\x22,\x22resourcename\x22: \x22stockabgu\x22},{\x22title\x22: \x22长城汽车\x22,\x22stockcode\x22: \x22601633\x22,\x22id\x22: \x22\x22,\x22curprice\x22: \x229.12\x22,\x22increase\x22: \x22-0.19\x22,\x22incrpercentage\x22: \x22-2.04%\x22,\x22resourcename\x22: \x22stockabgu\x22},{\x22title\x22: \x22万科A\x22,\x22stockcode\x22: \x22000002\x22,\x22id\x22: \x22\x22,\x22curprice\x22: \x2224.01\x22,\x22increase\x22: \x220.00\x22,\x22incrpercentage\x22: \x22+0.00%\x22,\x22resourcename\x22: \x22stockabgu\x22},{\x22title\x22: \x22民生银行\x22,\x22stockcode\x22: \x22600016\x22,\x22id\x22: \x22\x22,\x22curprice\x22: \x225.79\x22,\x22increase\x22: \x22-0.06\x22,\x22incrpercentage\x22: \x22-1.03%\x22,\x22resourcename\x22: \x22stockabgu\x22},{\x22title\x22: \x22招商银行\x22,\x22stockcode\x22: \x22600036\x22,\x22id\x22: \x22\x22,\x22curprice\x22: \x2226.93\x22,\x22increase\x22: \x22-0.02\x22,\x22incrpercentage\x22: \x22-0.07%\x22,\x22resourcename\x22: \x22stockabgu\x22},{\x22title\x22: \x22中金黄金\x22,\x22stockcode\x22: \x22600489\x22,\x22id\x22: \x22\x22,\x22curprice\x22: \x226.91\x22,\x22increase\x22: \x22-0.01\x22,\x22incrpercentage\x22: \x22-0.14%\x22,\x22resourcename\x22: \x22stockabgu\x22}],\x22isSimp\x22: \x220\x22,\x22hasSimp\x22: \x22\x22}<\/textarea><textarea class=\x22tpl-area\x22 style=\x22display:none;\x22><div class="stock-item s-opacity-blank3<&if $oneStock.increase > 0&> stock-up<&elseif $oneStock.increase < 0&> stock-down<&\/if&>" data-code="<&$oneStock.stockcode|sp_escape_html&>" data-market="<&$oneStock.resourcename|sp_escape_html&>" title="<&$oneStock.title|sp_escape_html&>"> <div class=stock-del> <div class=del-icon><\/div> <\/div> <div class="stock-tag<&if $oneStock.resourcename=="stockhk"&> stock-hk<&elseif $oneStock.resourcename=="stockus"&> stock-us<&\/if&>"> <\/div> <div class="stock-nape stock-code"> <a href="#" onclick="return false;" target=_blank class=stock-link> <&$oneStock.stockcode|sp_escape_html&> <\/a> <\/div> <div class="stock-nape stock-title"> <a href="#" onclick="return false;" target=_blank class=stock-link> <&$oneStock.title|sp_escape_html&> <\/a> <\/div> <div class="stock-nape stock-price"> <&$oneStock.curprice|sp_escape_html&><span class=stock-arrow><\/span><&* 使用stock-arrow类添加箭头标识 *&> <\/div> <div class="stock-nape stock-increase"> <&$oneStock.increase|sp_escape_html&> <\/div> <div class="stock-nape stock-incrpercentage"> <&$oneStock.incrpercentage|sp_escape_html&> <\/div> <div class="stock-nape stock-highprice"> <&$oneStock.highprice|sp_escape_html&> <\/div> <div class="stock-nape stock-lowprice"> <&$oneStock.lowprice|sp_escape_html&> <\/div> <div class="stock-nape stock-updatetime"> <&$oneStock.updatetime|sp_escape_html&> <\/div><\/div><\/textarea><\/div>"}";
$response = json_decode($json);
var_dump($response);

?>



