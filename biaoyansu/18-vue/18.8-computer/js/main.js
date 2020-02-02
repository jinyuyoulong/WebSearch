var app = new Vue({
    el: '#app',
    data: {
        math: 80,
        physics: 50,
        english: 40,
    },
    computed:{
        // computed 计算属性 会缓存数据，节省重复计算
        sum: function () {
            return parseFloat(this.math)+ parseFloat(this.physics) + parseFloat(this.english)
        },
        average: function () {
            return Math.round(this.sum / 3)
        }
    }
})