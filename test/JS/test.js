<script type="text/javascript">   
function ToUrl(x)   
{   
  location.href=x;   
}   
</script>   
<a href="javascript:;" onclick="javascript:ToUrl('http://www.g.cn');">
location.href不跳转测试1</a>   
<a href="javascript:void(0);"
 onclick="javascript:ToUrl('http://www.g.cn');">
location.href不跳转测试2</a>   
<a href="javascript:void(0);"
 onclick="javascript:ToUrl('http://www.g.cn');return false;">
location.href不跳转测试3</a>   
<a href="#" onclick="javascript:ToUrl('http://www.g.cn');">
location.href不跳转测试4</a>   
<a href="###" onclick="javascript:ToUrl('http://www.g.cn');">
location.href不跳转测试5</a>  