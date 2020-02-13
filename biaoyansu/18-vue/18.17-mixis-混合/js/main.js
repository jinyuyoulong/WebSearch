// mixins 将重复的逻辑提取出来
var base = {
    methods: {
            show: function () {
                this.visible = true
            },
            hide: function () {
                this.visible = false
            },
            toggle: function () {
                this.visible = !this.visible
            },
        },
        data: function () {
            return {
                visible: false,
            }
        }
}

Vue.component('tooltip',{
    template: `
    <div>
    //    <span @mouseenter="visible = true" @mouseleave="visible=false">sys</span>
       <span @mouseenter="show" @mouseleave="hide">sys</span>
       <div v-if="visible">
        Lorem ipsum 
        </div> 
       </div>
    `,
    mixins: [base],
    data: function () {
        return {
            // data 中 明确指定的东西会将 mixins 中的数据覆盖掉
            visible: true
        }
    }
})
Vue.component('popup',{
    template: `
   <div>
       <button @click="toggle" > Popup </button> 
       <div v-if="visible">
       <span @click="hide">X</span>
        <h4> title </h4>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit.At inventore eum alias, 
        quisquam iste temporibus, cumque, velit ab aspernatur laborum voluptatum!Numquam 
        adipisci assumenda, omnis molestias tempore fugiat ullam ipsam. 
        </div> 
       </div>
    `,
    mixins: [base],
    
})

new Vue({
    el: "#app",
})