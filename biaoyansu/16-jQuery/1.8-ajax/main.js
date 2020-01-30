// 开启服务http
// 插入页面数据
// 点击响应

var card  = $('#card')
var trigger = $('#trigger')
var loaded = false

trigger.on('click',
    function () {
        // card.toggle()
        // card.load('result.html')
        // card.toggle()

        if (card.is(':visible')) {
            card.slideUp()
            // card.hide()
        }else{
            if (!loaded) {
                card.load('result.html')
                loaded = true
            }
            
            card.slideDown()
        }
})