// 1. 导入
// 2. 创建虚拟DOM元素
// 3. 使用ReactDOM把虚拟DOM渲染到屏幕上

// 导入react的别名必须这么写
import  React  from 'react';
import  ReactDOM  from "react-dom";

let a = 2
let str = '我是字符串'
let boo = false
let title = '标题'
let h1 = <h1>这是一个没有感情的h1</h1>
let arr = [
    <h2>这是一个没有感情的h2</h2>,
    <h3>这是一个没有感情的h3</h3>
]
const names = ['fan','jin','long']
const nameArr  = []
names.forEach( item => {
    const temp = <h5 key={item}>{item}</h5>
    nameArr.push(temp)
})
const arrMap = names.map( item =>{
    return item+'~~'
    }
)
console.log(arrMap);

const mdiv = <div id="mydiv" title="is title">这是一个div
{ a+2 }
<br/>
{str}
<br/>
{boo? '条件为真':'条件为假'}
<p title={title}>这是一个标题</p>
{h1}
{/* {arr} */}
<hr/>
{nameArr}
<hr/>
{names.map(item =>{
    return <h4 key={item}>{item}</h4>
})}
<hr/>

{
// 推荐这种写法
}

{names.map(item => <div key={item}><h4 >{item}</h4></div>)}
<p className="haha">className</p>
<label htmlFor="000">htmlFor</label>
</div>

ReactDOM.render(mdiv, document.getElementById('app'))