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
        name: 'user',
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
            component
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
    methods:{
      surf: function () {
        setTimeout(function () {
          // this 指向 window，router在前面声明了变量
          // push 将值推到历史记录里
          this.router.push('/about')
          setTimeout(() => {
            // 传参 首先给name 指定一个名称在上边。
            // 用path的话params应该为 query， /user 不是 /user/:name
            this.router.push({name:'user',params:{name:'王花花'}})
          }, 2000);
        },2000)
      }
    }
});