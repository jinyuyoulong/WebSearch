var card = $('#card')
var cardTrigger = $('#card-trigger')

cardTrigger.on('click',
    function () {
        if (card.is(':visible')) {
            card.slideUp()    
        }else{
            card.slideDown()
        }
})
// 双击
cardTrigger.on('dblclick',
    function () {
        console.log("双击你大爷")
})

// 鼠标感知
card.on('mouseenter',function () {
    card.addClass('active')
})
card.on('mouseleave',function () {
    card.removeClass('active')
})