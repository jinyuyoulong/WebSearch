// 存取localStorage 中的数据
var store = {
    save(key,value){
        window.localStorage.setItem(key,JSON.stringify(value))
    },
    fetch(key, value){
        return JSON.parse(window.localStorage.getItem(key)) || []
    }
}

// list 取出所有的值
var list = store.fetch("storeData")

var vm = new Vue({
    el: ".main",
    data: {
        list,
        todo: "1",
        editorTodos: "",// 记录正在编辑的数据
        beforeTitle: "",// 记录正在编辑的数据title
        visibility: "all",//通过这个属性值的变化对数据进行筛选

    },
    watch:{
        // 保存 task
        // vue watch对象可以监听数据，数据发生变化，处理函数
        // watch虽可以监听， 但只是浅监听， 只监听数据第一层或者第二层。 比如对于整个对象的监听， 需要用到深度监听
        // 何为第二层？

        // let obj = {
        //     name: 'xx',
        //     child: {
        //         age: 11
        //     }
        // };

        // child之后的值就为第二层或者深层
        // 实现目标: 如果 要监听一个对象中的属性， 属性最高也是第二层了， watch可能监听不到，
        // 所有要使用深度监听

        //浅监控 监控 list 这个属性 当属性对应的值发生变化是就会执行这个函数
        // list: function () {
        //     store.save('storeData',this.list)
        // }

        // 深监控
        //下面的是深度监控
        // handler 方法就相当于普通侦听器触发的事件
        // 因为vue无法检测到对象内部属性值的变化 比如person.name的变化
        // 所以此时 需要用到vue的深度监听（ deep）
        // 此时加上代码 deep: true
        // 可以发现 每次输入框数据变化 name 随之改变
        list: {
            handler: function () {
                store.save('storeData',this.list)
            },
            deep: true,
        }
    },
    methods:{
        enterFn: function (ev) {//添加任务
            // 向list 中添加任务
            // 事件处理函数中的this指向的是当前这个根实例
            if (this.todo == "") {
                return 
            }
            this.list.push({
                title: this.todo,
                isComplete: false
            })
            this.todo = ""
        },
        // 删除
        delFn: function (item) {
            var index = this.list.indexOf(item)
            this.list.splice(index,1)
        },
        // 改
        editorEnd: function (item) {
            // 编辑完成
            this.editorTodos = ""
        },
        // 查
        editorTodo: function (item) {// 编辑任务
            // 编辑任务的时候记录之前的值
            this.beforeTitle = item.title
            this.editorTodos = item
        }
    },
    // 很多时候我们想要实现一个按钮去控制input框的显示隐藏， eq： 点击文本切换成编辑模式。
    // 这个时候很容易想到用v - show或者v - if去控制input和文本的显示隐藏， 那么问题来了， 切换成编辑模式的时候输入框没有自动选中。。。
    // directives 自定义指令
    directives: {
        "focus":{
            update(el,binding){
                if (binding.value) {
                    el.focus()
                }
            }
        }
    },
    computed:{
        unComplete () {
            return this.list.filter(item=>{
                return !item.isComplete
            }).length
        },
        filterData () {
            // 过滤的时候用三种情况，all unCompleted completed
            var filter = {
                all:function (list) {
                    return list
                },
                completed: function (list) {
                    return list.filter(item=>{
                        return item.isComplete
                    })
                },
                unCompleted: function (list){
                    return list.filter(item=>{
                        console.log(item)
                        return !item.isComplete
                    })
                }
            }
            // 如果找到了过滤函数，就返回过滤后的数据，如果没有找到就返回所有数据
            return filter[this.visibility] ? filter[this.visibility](list) : list
        }
    },
})

function hashFn() {
    var hash = window.location.hash.slice(1)
    vm.visibility = hash
}
hashFn()
window.addEventListener('hashchange',hashFn)