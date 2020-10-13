import React from 'react';

export default class ComentList extends React.Component {
    // render 渲染当前组件的 虚拟DOM元素
    constructor(){
        super()
        this.state = {
            msg: 'hello 我是 class的state 属性 可读可写'
        }// 相当于Vue中的data(){return{ } } 可读可写, props 只读
    }
    render(){
        this.state.msg = "注意了，msg 值被我修改了"
    return <div>class 组件 ---{this.props.name} ---{this.props.age} 
    <h3>{this.state.msg}</h3>
    </div>
    }
}