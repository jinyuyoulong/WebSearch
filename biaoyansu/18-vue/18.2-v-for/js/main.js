var app  = new Vue({
    el: '#app',
    data: {
        // foodList:['葱','姜','蒜'],
        foodList:[
            {
                name: '葱',
                price: 5,
                discount: .8,
            },
            {
                name: '姜',
                price: 6,
                discount: .5,
            },
            {
                name: '蒜',
                price: 2,
            },
        ]
    }
})