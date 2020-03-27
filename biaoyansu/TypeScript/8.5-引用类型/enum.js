/*
应用场景：
商城，商品型号 X XL L
*/
// 错误示例：
var size = ['L', 'M', 'S'];
size.unshift('Yo');
console.log(size[0]); // print Yo
// 正确示例
var Size;
(function (Size) {
    Size[Size["L"] = 10] = "L";
    Size[Size["M"] = 11] = "M";
    Size[Size["S"] = 12] = "S";
})(Size || (Size = {}));
;
console.log(Size.L);
