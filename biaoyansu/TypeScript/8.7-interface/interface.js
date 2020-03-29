var interface;
(function (interface) {
    createUser({
        name: "王虎华",
        age: 18,
        balance: 100
    });
    createUser({ name: "王虎华", age: 18, gender: "male", balance: 100 });
    function createUser(data) {
        console.log(data);
    }
    var makeUser = function (name, age) {
        console.log(name, age);
    };
    makeUser('王虎虎', 23);
    /* 学生 */
    var Student = /** @class */ (function () {
        function Student(name, score) {
            this.name = name;
            this.score = score;
        }
        Student.prototype.greeting = function () {
            return "Yo,\u6211\u53EB" + this.name;
        };
        return Student;
    }());
    /* 老师 */
    var Teacher = /** @class */ (function () {
        function Teacher(name, selera) {
            this.name = name;
            this.selera = selera;
        }
        Teacher.prototype.greeting = function () {
            return "\u5927\u5BB6\u597D,\u6211\u662F" + this.name + "\u8001\u5E08";
        };
        return Teacher;
    }());
    var whh = new Student("王花花", 60);
    var lsd = new Teacher("李栓但", 60);
    console.log(whh, whh.greeting());
    console.log(lsd, lsd.greeting());
})(interface || (interface = {}));
