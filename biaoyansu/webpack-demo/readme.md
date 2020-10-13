# webpack
npm 命令

初始化项目 创建package.json
`npm init -y`

局部安装 webpack 包

`npm i webpack -D` = `npm install webpack --save-dev`

webpack 可以做到将后端的代码变成浏览器能够读懂的代码,把后端代码前端化

### 打包命令
#### 打包方式0
全局
`webpack a.js bundle.js`

#### 打包方式1
当前目录环境
`node_modules/.bin/webpack a.js bundle.js`

```
打包方式2
package.json
"scripts": {
    "pack": "node_modules/.bin/webpack js/a.js"
  },
```
#### 打包方式3
创建webpack配置文件：webpack.config.js

```
module.exports = {
    entry: './a',//指定入口文件
    output: {
        filename: 'bundle.js',
        path: __dirname,
    }
}
```

#### 打包方式4
多入口多出口

```javascript
module.exports = {
    entry: {
        home: './js/home.js',
        signup: './js/signup.js'
    },
    output: {
        filename: '[name].bundle.js',// name 对应entry中的key
        path: __dirname + '/dist',// distributable 可分发的，指定输出目录
    }
}
```
### 使用打包后的文件
```html
<script src="bundle.js"></script>
```

webpack.config.js文件中的配置

```javascript
// 向外暴露一个打包的对象
module.exports = {
    mode: 'development',// production develoment 设置压缩文件的方式
    // webpack 4.0 中约定大于配置，默认 src/index.js 是入口文件

}
```

