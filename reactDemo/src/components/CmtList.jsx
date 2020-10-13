import React from 'react';

// 使用@ 优化路径，绝对路径可以随便拷贝移动
import  CmtItem from "@/Components/CmtItem";

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
            {/* jsx中的样式写法{{color: 'red'}} */}
            <h1 style={{ color: 'red', fontSize: '35px', zIndex: 3, fontWeight: 200, textAlign: 'center'}}>这是评论列表组件</h1>
            {this.state.ComjmentList.map(item => <CmtItem key={item.id}></CmtItem>)}
        </div>
    }
}