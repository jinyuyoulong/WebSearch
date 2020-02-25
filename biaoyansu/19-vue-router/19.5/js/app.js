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
        path: '/user',
        components: {
          sidebar: {
            template: `<div class="">
                    <ul>
                        <li>用户列表</li>
                        <li>权限管理</li>
                    </ul>
                </div>`,
          },
          content: {
            template: `<div class="">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae adipisci sit natus totam esse voluptas saepe a accusamus pariatur aspernatur accusantium, optio porro placeat doloribus deserunt ipsam itaque enim nam.
                </div>`,
          }
        },
    },
    {
      path: '/post',
      components: {
        sidebar: {
            template: `<div class="">
                    <ul>
                        <li>帖子列表</li>
                        <li>标签管理</li>
                    </ul>
                </div>`,
          },
          content: {
            template: `<div class="">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae adipisci sit natus totam esse voluptas saepe a accusamus pariatur aspernatur accusantium, optio porro placeat doloribus deserunt ipsam itaque enim nam.
                </div>`,
          }
        
        },
    }
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