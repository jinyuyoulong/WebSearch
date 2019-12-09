
// 初步 Ajax 使用
// Ajax 通用接口
// Ajax 简便方法

var form = $('#search')
var input = $('input#username')
var result = $('#result')
var username;

$.ajax({
    url:'http://api.github.com/users/biaoyansu',
    method: 'get',
    // datatype: jsonp,// 设置这个可以用来跨域
    data:{
        username: 'whh',
        password: '232',
    },
    success:function () {
        console.log('成功')
    },
    error: function () {
        console.log('失败')
    }
})

// $.get('url')
// $.post('url',{
//     username: 'whh',
//     password: '232',
// })
// $.getJson('url')
// $.getScript('url')

// form.on('submit',function (event) {
//     // 默认不执行，使用event 打断浏览器默认的行为
//     event.preventDefault()
//     console.log('1:',1)
//     username = input.val()
//     $.ajax('http://api.github.com/users/'+username)
//     .done(function (data) {
//         console.log(data)
//         var html = '<div>姓名：'+data.login+'</div>'+
//         '<div>经历：'+(data.bio || '无')+'</div>'
//         // 当data.bio 没有值的时候 使用默认值

//         result.html(html)
//     })
   
// })
