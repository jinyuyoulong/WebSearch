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
      component: {
        template: `
      <div>
        <h1>帖子管理</h1>
      </div>
      `,
      },
    },
];

var router = new VueRouter({
    routes: routes,
});

// 在这里指定访问规则
router.beforeEach(function (to,from,next) {
  // next function指定 view如何工作
  var logged_in = false;
  if (!logged_in && to.path == '/post') {
    next('/login')
  }else
    next()
})

router.afterEach(function (to, from) {
  console.log(to)
  console.log(from)
})
new Vue({
    el: '#app',
    router: router,
});