var app = new Vue({
    el: "#app",
    methods: {
        onEnter: function () {
            console.log('Entered')
        },
        onLeave: function () {
            console.log('leave')
        },
        onClick: function () {
            console.log('clicked')
        },
        onSubmit: function (e) {
            e.preventDefault();
            
            console.log('submitted')
        },
        onKeyup: function () {
            console.log('keyup')
        },
        onEnter: function () {
            console.log('entered')
        },
    },
})