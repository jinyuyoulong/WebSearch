import React from 'react'
import ReactDOM from 'react-dom'

// 第一种创建组件方式，首字母大写
function Hello(props) {// 在Props 上获取dog对象
    // react 和Vue 中的 props 对象所有属性都是 只读 read only的
    console.log(props.name);
    
    // 返回一个 虚拟DOM
    return <div>这是Hello组件 -- {props.name}-- {props.age} -- {props.gander}</div>
}

const dog = {
    name: '大黄',
    age: 3,
    gander: '雄'
}

ReactDOM.render(<div>
123
{/* 直接将组件名称以标签的形式，丢到页面上 */}
<Hello {...dog}></Hello>
</div>, document.getElementById('app')
)

var o1 = {
    age: 20,
    gander: 'famals'
}
var o2 = {
    name: '姓名',
    ...o1// ES6 中的展开运算符，相当于集合数据的并集
}
console.log(o2);
