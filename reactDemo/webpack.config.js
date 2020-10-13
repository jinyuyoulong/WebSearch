const path = require('path')
const htmlWebPackPlugin = require('html-webpack-plugin') // 导入 在内存中自动生成 index 页面的插件
const htmlPlugin = new htmlWebPackPlugin({
    template: path.join(__dirname, './src/index.html'),
    filename: 'index.html'
})


// 向外暴露一个打包的对象
module.exports = {
    mode: 'development',// production develoment 设置压缩文件的方式
    // webpack 4.0 中约定大于配置，默认 src/index.js 是入口文件
    plugins: [
        // 首页默认变成了 index.html
        htmlPlugin
    ],
    module: {// 所有第三方 模块的配置规则
        // webpack默认只处理js文件，.png .vue 无法主动处理，所以要配置第三方的loader
        rules: [
            {
                test: /\.js|jsx$/,
                use: 'babel-loader',
                exclude: /node_modules/
            }, // 排除 node_modules
            {
                test: /\.css$/,
                use: ['style-loader','css-loader']
            }, // 打包处理css样式表，从右向左 处理，css处理完交给style处理 
            // style-loader loader不嫩省略，webpack 1.0 用的是 style，后边都加-loader了，搜blog不要被误导
            // modules为 css启动模块化
            // 自定义 样式对象的名称
            // css - loader ? modules & localIdentName = [path][name] - [local] - [hash: 3]
            // path src - css
            // name 文件name
            // local css中的样式名称
            // hash 默认全length
            {
                test: /\.ttf|woff|woff2|eot|svg$/, use: 'url-loader'
            },
            {
                test: /\.scss$/,
                use: ['style-loader' , {
                    loader: 'css-loader',
                    options: {
                        modules: {
                            localIdentName: '[path][name]-[local]-[hash:3]'
                        }
                    }
                }]
            }
        ]
    },
    resolve: {
        extensions: ['.js','.jsx','.json'],// 帮助补全文件后缀，以达到引入是不用写后缀，顺序尝试
        alias: {
            '@': path.join(__dirname, './src')
        }
    },
    
}
// ES6中的导出 
// import ** from ’标识符‘
// export default{}