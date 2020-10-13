function Person(name,age) {
    this.name = name
    this.age = age
}
const p1 = new Person('王花花',23)
Person.info = '静态属性'
Person.prototype.say = function () {
    console.log('实例方法');
}
Person.show = function () {
    console.log('静态方法');
    
}

p1.say()
console.log(p1)
console.log(Person.info);
Person.show()

// --------------------分割线--------------------
class Animal{
    // 构造器
    constructor(name,age){
        this.name = name
        this.age = age
    }
    static info = '静态属性'

    say() {
        console.log('实例方法');
        
    }
    static show(){
        console.log('静态方法');
        
    }
}
const a1 = new Animal('小白',3);
console.log(a1);
console.log(Animal.info);
a1.say()
Animal.show()
