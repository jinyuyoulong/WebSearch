// var r = $('input').val()
// var r = $('input').val('Yo.')
// console.log('r:',   r)

// 即使监听者，也是触发者
// $('#nickname').select() // 全选  
// $('#nickname').focus(function () {
//     console.log('Yo')
// }) // 聚焦
// $('#nickname').blur() // 失去焦点

$('#submit').on('click',
    function () {
        $('#login').submit()
    })