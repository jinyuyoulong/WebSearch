## var
es5 加入的变量提升，将var定义的变量提升为全局声明，迁就了开发者，但是使开发更不好用了
## let
使用let 过去更严格的变量作用域

## 变量声明
var [a,b,c] = [1,2,3]
var [a,,c] = [1,2,3]// 不给b声明 
var [a,[b,c]] = [1,[2,3]]
var [a,...c] = [1,2,3]// 数组展开
var [a,b,c='default',d='default'] = [1,2,3]
##### 数组解构赋值
var arr = [1,2,3]
var [a,b,c] = arr
##### 对象结构赋值
```javascript
let response = {
    status: 200,
    data: [{name:'Bob'},{name:'shuan dan'}]
}
let {status, data} = response;
if (status == 200)
    console.log(data)
// 直接解析返回的数据

let {floor,paw} = Math;
let a = 1.1
console.log('floor(a)',floor(a));
console.log('paw(2,3)',paw(2,3));
// 将对象方法提取出来使用
``` 