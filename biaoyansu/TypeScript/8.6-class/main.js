var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var Person = /** @class */ (function () {
    // 构造函数
    function Person(name) {
        this.name = name;
    }
    Person.prototype.greet = function () {
        return this.name + "\u5411\u4F60\u95EE\u597D";
    };
    return Person;
}());
// 根据构造函数确定传入参数
var xiaoming = new Person('小明');
console.log(xiaoming.greet());
var Student = /** @class */ (function (_super) {
    __extends(Student, _super);
    function Student(name, major) {
        var _this = _super.call(this, name) || this;
        _this.major = major;
        return _this;
    }
    Student.prototype.studentGreet = function () {
        return this.major + "\u7CFB\u5B66\u751F" + this.name + "\u5411\u4F60\u95EE\u597D";
    };
    return Student;
}(Person));
var xiaohong = new Student('小红', '哲学');
console.log(xiaohong.studentGreet());
console.log(xiaohong.major); // js 不报错，ts报错
/*
 访问权限：
private 类内可见
protected 类和子类 可见
public 外部可见
*/ 
