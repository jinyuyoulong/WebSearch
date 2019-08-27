<?php
// 我们将curl的步骤分为以下7步：

// 1.初使化curl资源
// 2.参数设置请求的协议地址
// 3.参数设置是否返回请求结果
// 4.设置发送数据（无发送数据可不设置）
// 5.其他的参数信息设置（按实际工作需要决定）
// 6.执行或执行得到返回结果
// 7.关闭curl资源


// 一、初使化curl资源
$ch = curl_init();

// 二、参数设置请求的协议地址
curl_setopt($ch, CURLOPT_URL, "http://www.phpxy.com");

// 三、参数设置是否返回请求结果
//参数设置是否返回请求结果   CURLOPT_RETURNTRANSFER  若需要返回值即为1。不需请求后返回的结果可设置为0。
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// 四、设置发送数据
//声明使用POST方式来进行发送
	curl_setopt($ch, CURLOPT_POST, 1);
//发送什么数据呢
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// 五、其他的参数信息设置
// 如果是https，有的时候我们需要忽略https的安全证书。
// CURLOPT_SSL_VERIFYPEER和CURLOPT_SSL_VERIFYHOST 两个参数改为false即忽略了证书。
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
// CURLOPT_HEADER这个参数又决定是是否处理http的头信息，我们不想接收处理的话可将这个值设置为0。
curl_setopt($ch, CURLOPT_HEADER, 0);
// 设置请求的超时时间
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

// 六、执行或执行得到返回结果
$output = curl_exec($ch);

// 七、关闭curl资源
curl_close($ch);