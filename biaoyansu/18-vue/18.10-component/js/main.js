Vue.component('like',{
    // template: '<button :class="{liked: liked}" @click="toggle_like()">👍赞 {{like_count}}</button>'
    template: '#like-component-tpl',// 传选择器也行，组件引用模板
    data: function (){
        return {
            like_count: 10,
            liked: false,
        }
    },
    methods: {
        toggle_like: function () {
            if (this.liked) {
                this.like_count --
            }else{
                this.like_count ++
            }
            this.liked = !this.liked
        }
    }
})

new Vue({
    el: '#app',
})