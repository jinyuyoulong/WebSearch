// 开启服务http
// 插入页面数据
// 点击响应

var card  = $('.card')
$('#trigger').on('click',
    function () {
        card.load('result.html')
})