namespace interface{

    createUser({
        name: "王虎华",
        age: 18,
        balance: 100
    });
    createUser({ name: "王虎华", age: 18, gender: "male", balance: 100 });

    interface User {
        name: string,// 必填
        age: number,// 必填
        gender?: string,// ？ 可选传参
        [key: string]: any// []代表键名不确定 value 可以是任意类型
    }
    function createUser(data: User) {
        console.log(data);

    }
    // 用接口限制函数
    /* 
    函数接口
    */
    interface UserFuction {
        (
            name: string,
            age: number
        ): void;
    }

    let makeUser: UserFuction = (name, age) => {
        console.log(name, age);
    }
    makeUser('王虎虎', 23)

    /* 用接口限制类 */
    interface PersonInterface {
        name: string,// 必须实现
        age?: number,// 可选

        greeting(): string;
        /* 接口只定义结构，不关心实现 */
    }
    
    /* 学生 */
    class Student implements PersonInterface {
        name: string;
        score: number;

        greeting(): string {
            return `Yo,我叫${this.name}`;
        }
        constructor(name:string,score:number) {
            this.name = name;
            this.score = score;
        }
    }
    /* 老师 */
    class Teacher implements PersonInterface {
        name:string;
        selera: number;
        greeting(): string{
            return `大家好,我是${this.name}老师`;
        }
        constructor(name:string,selera:number) {   
            this.name = name;
            this.selera = selera;
        }
    }
    const whh = new Student("王花花",60);
    const lsd = new Teacher("李栓但",60);
    console.log(whh,whh.greeting());
    console.log(lsd,lsd.greeting());
    
}