// jquery 添加多个 css 样式的方法
$('.board')
    // .css('background','red')
    // .css('border','2px solid gray')
    // .css({
    //     color: 'blue',
    //     // backgroundColor: 'pink' // 带 横线属性的处理
    //     'background-color': 'pink' // 带 横线属性的处理
    // })
    .addClass('black')

// 判断是否有某个class
var board = $('.board')
console.log(board.hasClass('black'))
console.log(board.hasClass('haha'))

function toggle() {
    if (board.hasClass('active')) {
        board.removeClass('active')
    }else{
        board.addClass('active')
    }
}
setInterval(toggle,300)