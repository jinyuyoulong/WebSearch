import React from "react";
import cssobj from "@/css/CmtItem.scss";
//  导入CSS 样式表
export default function CmtItem(props) {
    return <div className={cssobj.cmtbox}>
        <h1 className={[cssobj.title, "test"].join(' ')}>评论人：{props.user}</h1>
        <p className={cssobj.content}>评论内容：{props.content}</p>
    </div>
}