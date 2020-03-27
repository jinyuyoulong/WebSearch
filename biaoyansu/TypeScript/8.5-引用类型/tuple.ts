// 假设一个彩票中奖号码，只有3位，如果用array 就会出问题，此时就可以使用元组
let arr = [1,2,3]
arr.push(4)
console.log(arr);

// 元组
let tuple: [number, number,number];
tuple = [1,2,3]
/*
tuple = [1,2,3,4] 编译器报数量不合法
tuple = [1,2,‘1’] 编译器类型不合法
*/ 
console.log(tuple);
