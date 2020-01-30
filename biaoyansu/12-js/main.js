// this 的三个方法，call apply bind
function yo(name,a,b){
    console.log("hello "+name+" 我是"+this.name)
}

var whh = {
    name : "王花花"
}

yo.call(whh,'赵麒麟',1,2)
yo.apply(whh,['赵麒麟',1,2]) // call apply 都是直接执行,apply 仅是传参方式的区别
yo2 = yo.bind(whh) // bind 返回一个绑定了新环境的function
yo2('赵麒麟')