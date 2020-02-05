// 组件的第一种写法，全局component配合new Vue使用
// Vue.component('alert',{
//     template: '<button @click="on_click">弹一闪</button>',
//     methods: {
//         on_click: function () {
//             alert('Yo.')
//         }
//     }
// })
// var app = new Vue({
//     el: '#seg1',
// })
// var app = new Vue({
//     el: '#seg2',
// })

// 组件的 第二种写法，这种局部component常用
var alert_component = {
    template: '<button @click="on_click">弹一闪</button>',
        methods: {
            on_click: function () {
                alert('Yo.')
            }
        }
}
var app = new Vue({
    el: '#seg1',
    components: {
        alert: alert_component
    }
})

