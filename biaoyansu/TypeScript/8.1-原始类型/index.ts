/*
let empty: void =  null;
let empty: void =  undefined;
一般不这么用，一般用于函数返回
*/ 
let count: number = 1;
function increment(): void {
    count++;
}
increment();
console.log(count);