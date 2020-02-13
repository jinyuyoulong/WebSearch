// 第一个传参，是元素，将整个指定的元素传进来，也可以和jQuery无缝衔接
// 第二个传参，是指令，值的一些基本信息
Vue.directive('pin',function (el,binding) {
    // var $el = $(el)// 接受 jQuery对象
    var pinned = binding.value
    if (pinned) {
        // 用js的方式添加样式
        el.style.position = 'fixed'
        el.style.top = '10px'
        el.style.left = '10px'
    }else{
        // 取消钉住 修改 position为 static，此时 top left 就没有意义了
         el.style.position = 'static'
    }
})
new Vue({
    el: "#app",
    data: {
        card1: {
            pinned : false,
        },
        card2: {
            pinned : false,
        },

    },
})