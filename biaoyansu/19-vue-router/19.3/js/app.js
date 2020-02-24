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
              // <router-link :to="'/user/'+$route.params.name+'/more'">更多信息</router-link>
              <router-link  to="more" append>更多信息</router-link>
              <router-view></router-view>
            </div>
          `,
        },
        children: [
          {
            path: 'more',
              component: {
                template: `
            <div>
            用户：{{$route.params.name}}的详细信息
            lorame
            </div>
            
            `,
              }
          }
        ]
          
        
    },
];

var router = new VueRouter({
    routes: routes,
});

new Vue({
    el: '#app',
    router: router,
});