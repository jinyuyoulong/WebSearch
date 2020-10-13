import React from "react";
export default class BindEvent extends React.Component {
    constructor (){
        super()
        this.state = {
            msg: '😁'
        }
    }
    render(){
        return (
            <div>
            BindEvent 组件
            <hr/>
            <button onClick={()=>{this.show('^(*￣(oo)￣)^')}}>
            按钮</button>
            <h3>{this.state.msg}</h3>
            </div>
        )
    }

    show = (arg1)=>{
        console.log('show被调用了'+arg1);
        this.setState({
            msg:'cry'
        }, function () {
                console.log(this.state.msg);
            
        })
    }
}
