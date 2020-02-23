var routes = [{
        path: '/',
        component: {
            template: `
      <div>
        <h1>首页</h1>
      </div>
      `,
        },
    },
    {
        path: '/about',
        component: {
            template: `
      <div>
        <h1>关于我们</h1>
      </div>
      `,
        },
    },
    {
        path: '/user/:name',
        component: {
            template: `
      <div>
        <h1>我叫：{{$route.params.name}}</h1>
        <h1>我今年：{{$route.query.age}}岁了</h1>
      </div>
      `,
        },
    },
];

var router = new VueRouter({
    routes: routes,
});

new Vue({
    el: '#app',
    router: router,
});