import React from 'react'

// 第一种创建组件方式，首字母大写
export default function Hello(props) {// 在Props 上获取dog对象
    // react 和Vue 中的 props 对象所有属性都是 只读 read only的
    console.log(props.name);

    // 返回一个 虚拟DOM
    return <div>这是Hello组件 -- {props.name}-- {props.age} -- {props.gander}</div>
}

// export default Hello 把组件暴露出去