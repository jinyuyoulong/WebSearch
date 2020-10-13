import React from "react";

// 样式的第一层封装
// const itemStyle = { border: '1px, dashed #ccc', margin: '10px', padding: '10px', boxShadow: '0 0 10px  #ccc' }
// const userStyle = { fontSize: '14px' }
// const contentStyle = { fontSize: '12px' }

//  样式的第二层封装
// const style = {
//     item: { border: '1px, dashed #ccc', margin: '10px', padding: '10px', boxShadow: '0 0 10px  #ccc' },
//     user: { fontSize: '14px' },
//     content: { fontSize: '12px' }
// }

// 第三层封装 抽离为单独的文件模块
import style from "@/components/style";
export default function CmtItem(props) {
    return <div style={style.item}>
        <h1 style={style.user}>评论人：{props.user}</h1>
        <p style={style.content}>评论内容：{props.content}</p>
    </div>
}