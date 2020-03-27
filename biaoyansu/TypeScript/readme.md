# 前置工作
npm i typescript -g
## 编译
tsc 8.0/1.ts
## 监视
tsc -w 8.0/1.ts

时刻监控ts文件的变化，编译为js文件

## 原始对象类型
```
let isComplate:boolean = true;
let age: number = 1 0xa(16进制) 0b10(二进制2);
let name: string = `whh`;
let greeting: string = `Yo ${name}`;
let empty: void =  null;
let empty: void =  undefined;
function increment():void{
    age++;
}
```
## 引用类型
### object 对象
```
let user:object = {
    name: "fan",
    age: 28
}
console.log(user)
let a: object = function () {
    console.log("i am a function object");
    
}
a();
let o: object = [1,2]
let arr: Array<any> = [1,'2']
let arr1: Array<number> = [1,2]
console.log(arr);
console.log(arr1);
```
### tuple 元组
```
let tuple: [number, number,number];
tuple = [1,2,3]
```
### enum 枚举
```
enum Size{L = 10,M,S};
console.log(Size.L);
```
## 类
```
class Person {
    name:string;
    greet():string{
        return `${this.name}向你问好`;  
    }
    // 构造函数
    constructor(name:string) {
        this.name = name
    }
}
// 根据构造函数确定传入参数
let xiaoming = new Person('小明');
console.log(xiaoming.greet());
```

/*
类访问权限：
private 类内可见
protected 类和子类 可见
public 外部可见
*/ 