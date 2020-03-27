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

class Student extends Person{
    private major:string;
    studentGreet(){
        return `${this.major}系学生${this.name}向你问好`;
    }
    constructor(name:string,major:string) {
        super(name);// 必须调一下super函数
        this.major = major;
    }
}
let xiaohong = new Student('小红','哲学');
console.log(xiaohong.studentGreet());
console.log(xiaohong.major);// js 不报错，ts报错

/*
 访问权限：
private 类内可见
protected 类和子类 可见
public 外部可见
*/ 