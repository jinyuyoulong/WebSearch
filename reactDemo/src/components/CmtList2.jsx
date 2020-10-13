import React from 'react';

// 使用@ 优化路径，绝对路径可以随便拷贝移动
import  CmtItem from "@/Components/CmtItem2";

// 导入css样式表 style-loader css-loader
import cssObj from "@/css/cssList.scss";
import "bootstrap/dist/css/bootstrap.css";

console.log(bootcss);

//  css 模块化只针对 class和id 不作用于标签
export default class CmtList extends React.Component{
    constructor(){
        super()
        this.state = {
            ComjmentList: [
                {id: 1, user: '张三',content: '我是三'},
                {id: 2, user: '张四',content: '我是四'},
                {id: 3, user: '张五',content: '我是五'}
            ]
        }
    }
    render(){
        return <div>
            
            <h1 className={cssObj.title}>这是评论列表组件</h1>
            <button className="btn btn-primary">按钮</button>
            <div className="panel panel-primary"></div>
            {this.state.ComjmentList.map(item => <CmtItem {...item} key={item.id}></CmtItem>)}
        </div>
    }
}