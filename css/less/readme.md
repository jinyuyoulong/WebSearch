less
sass
stylus

样式编辑
## 安装
`npm i less -g`
## 编译
`lessc 01.less 01.css`
## 注释
```
/*会暴露出去的注释*/
// 私有注释
```
## 变量
```
// 定义变量 使用 @开头
@color: pink;// 使用 @color
// 以下两种方式很少使用
@m:margin;      // 使用 @{m}
@selector:.big;  // 使用 @{selector}
```
*变量会延迟加载*
## 嵌套规则
```
1. 基本规则
2. & 将 选择子解析为同级追加（没有空格 .big:hover 格式）
    &:hover{
        background-color: lavenderblush;
    }
```
## 混合 mix in 抽象共有方法
```
1. 普通混合
2. 不带参混合 .juzhong{}                    使用 .juzhong;
3. 带参混合 .juzhong(@w,@h){}               使用 .juzhong(100px,100px);
4. 带参数默认值混合 .juzhong(@w:20px,@h:20px){}  使用.juzhong();
5. 命名参数 使用.juzhong(@h:20px);
.juzhong(@w,@h){
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    border: 1px solid;
    margin: auto; //margin: 0 auto; 水平居中
    //  以上所有联合实现垂直居中
    background-color: @color;
    width: @w;
    height: @h;
}
.small {
    .juzhong(100px,100px);
}
.small2 {
    .juzhong(200px,200px);
}
```