import React from "react";
export default class BindInputValue extends React.Component {
    constructor() {
        super()
        this.state = {
            msg: '😁'
        }
    }
    render() {
        return <div>
            BindEvent 组件
            <hr />
            <button onClick={() => { this.show('^(*￣(oo)￣)^') }}>按钮</button>
            <h3>{this.state.msg}</h3>

            {/* <input type="text" style={{width:'100%'}} value={this.state.msg} readOnly/> */}
            <input type="text" style={{ width: '100%' }} value={this.state.msg} onChange= {(e)=>this.txtChanged(e)} />
        </div>
    }

    show = (arg1) => { 
        console.log('show被调用了' + arg1);
        this.setState({
            msg: 'cry'
        }, function () {
            console.log(this.state.msg);

        })
    }
    txtChanged = (e)=>{
        // console.log(this.refs.txt.value);
        // console.log(e.target.value);

        //  实现双向数据绑定
        const newValue = e.target.value
        this.setState({
            msg: newValue
        })
    }
}
