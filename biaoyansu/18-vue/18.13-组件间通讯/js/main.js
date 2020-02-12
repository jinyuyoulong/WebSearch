var Event = new Vue()

Vue.component('wanghuahua',{
    template: `
    <div>王花花说<input type="text" v-model="i_said" @keyup="on_change" /></div>
    `,
    methods: {
        on_change: function () {
            // 传事件
            Event.$emit('huahua-said-something',this.i_said)
        }
    },
    data: function() {
        return {
            i_said: "",
        }
    },

})

Vue.component('erdan',{
    template: `<div>二蛋说：{{huahua_said}}</div>`,
    data: function () {
        return {
            huahua_said: ""
        }
    },
    mounted: function() {// 组件初始化完成的一瞬间，调用
        var me = this
        // console.log(this)
        // this 变了,不再是 当前的 component 了，变成了 Event
        Event.$on('huahua-said-something', function (data) {
            // console.log(data)
            console.log(this)
            me.huahua_said = data
        })
    }
})
new Vue({
    el: "#app",
})