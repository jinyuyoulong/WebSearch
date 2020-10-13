// 1. 导入
// 2. 创建虚拟DOM元素
// 3. 使用ReactDOM把虚拟DOM渲染到屏幕上

// 导入react的别名必须这么写
import React from 'react';
import ReactDOM from "react-dom";

// 参数1 创建的元素的类型，字符串，表示元素名称
// 参数2 一个对象或者null，表示这个DOM的属性
// 参数3 子节点 包括其他虚拟DOM获取文本子节点
// 参数n 其他子节点
// <h1 id="myh" title="这是一个h1">这是一个没有感情的h1</h1>
const myh1 = React.createElement('h1', {
    id: 'myh1',
    title: '这是一个h1'
}, "这是一个没有感情的h1")
const mdiv = React.createElement('div', null, '这是一个div', myh1)
// 参数1 目标虚拟DOM
// 参数2 指定页面的容器,一个DOM元素
ReactDOM.render(mdiv, document.getElementById('app'))