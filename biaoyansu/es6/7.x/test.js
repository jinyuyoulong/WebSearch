
let obj = {a:1,b:2}

// 对象解构
function test({b="10",a}) {
    console.log(a)
    console.log(b)
}

test(obj)

// 字符串新api
console.log("Yo.".includes("Y"))
// -1 代表完全找不到
console.log("Yo.".indexOf("a") !== -1)
console.log("Yo.".startsWith("Y"))
console.log("Yo".endsWith("o"))
console.log("Yo".repeat("10"))

// tpl
let title = '妈妈咪啊'
let tpl = `
<div>
<span> ${title+`
<span>${123}haha</span>
`} </span>
</div>
`
console.log('tpl',tpl)

// 数据类型
/*
七种
Symbol 新加,用处：作为对象的属性名称，防止被重写
undefined
null
Boolean
String
number
object
*/ 

let a = Symbol('this is a Symbol')
let b = Symbol('this is a Symbol')
console.log(a === b)
// Symbol 的用途，可以防止属性被复写，局部可被重写
let name = Symbol()
// file1
{
    var persion = {}
    persion[name]='file1'
    console.log(persion[name])
}
// file2
{
    let name = Symbol()
    persion[name] = 'file2'
    console.log(persion[name])
}
console.log(persion[name])