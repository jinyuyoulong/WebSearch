import React from 'react'
import ReactDOM from 'react-dom'

// 默认不做单独的配置的话，不能省略后缀名 
// 可以配置webpack.config.js 省略后缀名
import Hello from './components/Hello'

const dog = {
    name: '大黄',
    age: 3,
    gander: '雄'
}

ReactDOM.render(<div>
123
{/* 直接将组件名称以标签的形式，丢到页面上 */}
<Hello {...dog}></Hello>
</div>, document.getElementById('app'))
