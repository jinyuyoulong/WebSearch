Vue.component('user',{
    // user 标签中的 username属性内容作为 值 传递给模板，组件传参，父组件给子组件传值，从外部给内部传参
    template: '<a :href="\'/user/\'+username">@{{username}}</a>',
    props: ['username'],
    methods: {
        on_click: function () {
            // alert(this.msg)
        }
    }
})

new Vue({
    el: '#app',
})