// 子组件和父级组件通信
// 子组件通信，说该显示余额了，父级组件显示
// 父组件 
Vue.component('balance',{
    template: `
    <div>
        <show @show-balance="show_balance"></show>
        <div v-if="show">您的余额：98￥</div>
    </div>
    `,
    methods:{
        show_balance: function (data){// 接受传递的参数{a:1,b:2}
            this.show = true
            console.log('data: ',data)
        }
    },
    data: function () {
        return {
            show: false,
        }
    }
})

// 子组件
Vue.component('show',{
    template: `
    <button @click="on_click()"> 显示余额 </button>
    `,
    methods:{
        on_click(){
            this.$emit('show-balance',{a:1,b:2})
            // this.$emit('show-balance')// emit 快捷方式用于触发事件，在上边的show标签监听
        }
    }
})

new Vue({
    el: "#app",
})