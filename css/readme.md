 rel 属性用于指定当前文档与被链接文档的关系 relative 相对关系

<span id="setGreen">公开课</span>
#setGreen{
   color:green;
}

CSS 选择器

.类选器名称{css样式代码;}
.classname{color:red;}

id选择器
#green{color:red;}

<span id="green">公开课</span> 

.food>li{border:1px solid red;} 大于符号(>),用于选择指定标签元素的第一代子元素。
solid：表示单线

多类选择器
.first.name{color:red;}

包含选择器，即加入空格,用于选择指定标签元素下的后辈元素。如右侧代码编辑器中的代码：
.first  span{color:red;}

伪类选择符，a:hover{color:red;} 它允许给html不存在的标签（标签的某种状态）
上面一行代码就是为 a 标签鼠标滑过的状态设置字体颜色变红。这样就会使第一段文字内容中的“胆小如鼠”文字加入鼠标滑过字体颜色变为红色特效。
a:link{没有点击过的}
a:visited{点击过的}
input:fouce{焦点}
分组选择符：h1,span{color:red;}
它相当于下面两行代码：
h1{color:red;} span{color:red;}

相邻选择器：
.a + div {
选择下面相邻的元素
}
.a ~ div{所有相邻元素}
-------------------------------------------------------------------------------------
下面是权值的规则：
标签的权值为1，类选择符的权值为10，ID选择符的权值最高为100。例如下面的代码：
内联style 	>ID		>类		>标签
1000		0100	0010	0001

p{color:red;} /*权值为1*/
p span{color:green;} /*权值为1+1=2*/
.warning{color:white;} /*权值为10*/
p span.warning{color:purple;} /*权值为1+1+10=12*/
#footer .note p{color:yellow;} /*权值为100+10+1=111*/


注意：还有一个权值比较特殊--继承也有权值但很低，有的文献提出它只有0.1，所以可以理解为继承的权值最低。
!important 设置权重最高，无视一切。
--------------------------------------------------------
CSS 字体：
font-family:”Microsoft Yahei”;
font-size:12px;
color:#666
font-style:italic; italic [ɪˈtælɪk] ->斜体
text-decoration:underline; decoration->装饰 underline->下划线
text-decoration:line-through 删除线
text-indent:2em; indent 缩进 2em 文字的两倍大小
line-height:1.5em; 行高
letter-spacing:50px; 文字间隔 letter ->信，文字 space->间隔
text-align:center; 块状元素居中 align [əˈlaɪn] -> 对齐

在CSS中，html中的标签元素大体被分为三种不同的类型：块状元素、内联元素(又叫行内元素)和内联块状元素。
常用的块状元素有：
<div>、<p>、<h1>...<h6>、<ol>、<ul>、<dl>、<table>、<address>、<blockquote> 、<form>

常用的内联元素有：
<a>、<span>、<br>、<i>、<em>、<strong>、<label>、<q>、<var>、<cite>、<code>

常用的内联块状元素有：
<img>、<input>

块级元素特点：
1、每个块级元素都从新的一行开始，并且其后的元素也另起一行。（真霸道，一个块级元素独占一行）
2、元素的高度、宽度、行高以及顶和底边距都可设置。
3、元素宽度在不设置的情况下，是它本身父容器的100%（和父元素的宽度一致），除非设定一个宽度。
display:block 将元素显示/转换为块级元素。a{display:block;}

内联元素特点：
1、和其他元素都在一行上；
2、元素的高度、宽度及顶部和底部边距不可设置；
3、元素的宽度就是它包含的文字或图片的宽度，不可改变。
display:inline;

inline-block 元素特点：
1、和其他元素都在一行上；
2、元素的高度、宽度、行高以及顶和底边距都可设置。
display:inline-block 就是将元素设置为内联块状元素。
<img>、<input>标签就是这种内联块状标签。

padding: 衬垫，内填充 margin: 边缘，边距
dotted: 点，点线 dashed：虚线；solid：实线
botted-bottom:solid 2px red; 可以设置部分边框
div{padding:20px 10px 15px 30px;}  内填充设置顺序：上右下左
div{margin:20px 10px 15px 30px;}
div{   margin-top:20px;   margin-right:10px;   margin-bottom:15px;   margin-left:30px; }
div{ margin:10px;} 上下左右都为10px
div{ margin:10px 20px;} 上下为10px 左右为20px

布局模型与盒模型一样都是 CSS 最基本、 最核心的概念。 但布局模型是建立在盒模型基础之上，如果说布局模型是本，那么 CSS 布局模板就是末了，是外在的表现形式。 
CSS包含3种基本的布局模型，用英文概括为：Flow、Layer 和 Float。
在网页中，元素有三种布局模型：
1、流动模型（Flow）
2、浮动模型 (Float)
3、层模型（Layer）

float:left 设置块元素浮动，靠左或靠右

层模型有三种形式：position 位置，方位
1、绝对定位(position: absolute)
2、相对定位(position: relative)
3、固定定位(position: fixed)

position:absolute(表示绝对定位)，这条语句的作用将元素从文档流中拖出来，然后使用left、right、top、bottom属性相对于其最接近的一个具有定位属性的父包含块进行绝对定位。如果不存在这样的包含块，则相对于body元素，即相对于浏览器窗口。

position:relative（表示相对定位），它通过left、right、top、bottom属性确定元素在正常文档流中的偏移位置。相对定位完成的过程是首先按static(float)方式生成一个元素(并且元素像层一样浮动了起来)，然后相对于以前的位置移动，移动的方向和幅度由left、right、top、bottom属性确定，偏移前的位置保留不动。

fixed：表示固定定位，与absolute定位类型类似，但它的相对移动的坐标是视图（屏幕内的网页窗口）本身。由于视图本身是固定的，它不会随浏览器窗口的滚动条滚动而变化，除非你在屏幕中移动浏览器窗口的屏幕位置，或改变浏览器窗口的显示大小，因此固定定位的元素会始终位于浏览器窗口内视图的某个位置，不会受文档流动影响，这与background-attachment:fixed;属性功能相同。（浮动的小广告）

Relative与Absolute组合使用:
父标签设置position:relative 子标签设置position:absolute

当被设置元素为块状元素时用 text-align：center 就不起作用了，这时也分两种情况：定宽块状元素和不定宽块状元素

不定宽度的块状元素有三种方法居中（这三种方法目前使用的都比多）：
加入 table 标签
设置 display;inline 方法
设置 position:relative 和 left:50%;

父元素高度确定的单行文本的竖直居中的方法是通过设置父元素的 height 和 line-height 高度一致来实现的。
<style>
.container{
    height:100px;
    line-height:100px;
    background:#999;
}
</style>
父元素高度确定的多行文本、图片、块状元素的竖直居中的方法有两种：
方法一：使用插入 table (包括tbody、tr、td)标签，同时设置 vertical-align：middle。
说到竖直居中，css 中有一个用于竖直居中的属性 vertical-align，但这个样式只有在父元素为 td 或 th 时，才会生效。所以又要插入 table 标签了。
<body>
<table><tbody><tr><td class="wrap">
<div>
    <p>看我是否可以居中。</p>
    <p>看我是否可以居中。</p>
    <p>看我是否可以居中。</p>
    <p>看我是否可以居中。</p>
    <p>看我是否可以居中。</p>
</div>
</td></tr></tbody></table>
</body>

垂直居中 
方法二：
 display:table-cell;/*IE8以上及Chrome、Firefox*/
    vertical-align:middle;/*IE8以上及Chrome、Firefox*/

隐性改变display类型
有一个有趣的现象就是当为元素（不论之前是什么类型元素，display:none 除外）设置以下 2 个句之一：
position : absolute
float : left 或 float:right
元素会自动变为以 display:inline-block 的方式显示，当然就可以设置元素的 width 和 height 了且默认宽度不占满父元素。
