/*
应用场景：
商城，商品型号 X XL L
*/ 
// 错误示例：
let size = ['L','M','S'];
size.unshift('Yo')
console.log(size[0]);// print Yo

// 正确示例
enum Size{L = 10,M,S};
console.log(Size.L);
