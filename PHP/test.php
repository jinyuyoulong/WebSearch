<!-- //遍历当前目录 -->
<?php
$directory = dirname(__FILE__);
function scan_rescursive($directory) {
    $res = array();
    foreach(glob("$directory/*") as $item) {
        if(is_dir($item)) {
            $folder = end(explode('/', $item));
            $res[$folder] = scan_rescursive($item);
            continue;
        }
        $res[] = basename($item);
    }
    return $res;
}
$arr = scan_rescursive($directory);
echo '<pre>';
print_r($arr);
echo '</pre>';
?>