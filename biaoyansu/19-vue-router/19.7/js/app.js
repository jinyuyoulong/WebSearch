var routes = [
  {
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
        path: '/a',
        meta: {
          login_required: true,
        },
        component: {
            template: `
      <div>
        <h1>A</h1>
      </div>
      `,
        },
    },
    {
      path: '/login',
      component: {
        template: `
      <div>
        <h1>登录</h1>
      </div>
      `,
      },
    },
    {
      path: '/post',
      meta: {
        login_required: true,
      },// 元数据，对当前路由的自定义数据
      component: {
        template: `
      <div>
        <h1>帖子管理</h1>
        <router-link to="info" append>详情</router-link>
        <router-view></router-view>
      </div>
      `,
      },
      children: [{
        path: 'info',
        component: {
          template: `<div class=""><h2>雨天的太阳</h2></div>`,
        },
      },
    ],
  }
];

var router = new VueRouter({
    routes: routes,
});

// 在这里指定访问规则
router.beforeEach(function (to,from,next) {
  // next function指定 view如何工作

  var logged_in = false;

  // matched 匹配 父级路由和本身路由
  console.log(to.matched)
  var isCurrentPath = to.matched.some(function (item) {
    // return item.path == '/post'
    return item.meta.login_required
  })
  
  if (!logged_in && isCurrentPath) {
    next('/login')
  }else
    next()
})
new Vue({
    el: '#app',
    router: router,
});