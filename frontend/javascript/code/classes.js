let person = {
    name: '张三',
    age: 25,
    greet: function () {
        // this 指向当前对象
        // this.name 指向当前对象(person 对象)的 name 属性
        console.log('Hello, my name is ' + this.name);
    }
};

console.log(person.name); // 张三
person.greet(); // Hello, my name is 张三

// 构造函数
function Human(name, age) {
    this.name = name;
    this.age = age;
}

console.log(typeof Human); // function

// 创建一个 Human 对象, 并赋值给 student 变量, student 是一个对象
let student = new Human('李四', 20);
console.log(typeof student); // object
console.log(student.name); // 李四

// 类与继承
class Animal {
    constructor(name) {
        this.name = name;
    }
    speak() {
        console.log(this.name + 'make a noise');
    }
    run() {
        console.log(this.name + 'is running');    
    }
}

let dog = new Animal('dog');
dog.speak();
dog.run();
// 继承
class Cat extends Animal {
    constructor(name) {
        super(name);
        this.type = Cat
    }
    speak() {
        console.log(this.name + 'Meow Meow');
    }
}
let cat = new Cat('Cat')
cat.speak
// 异步操作
// 回调函数
function fetchData (callback) {
    setTimeout(() => {
        console.log('加载完成');
        callback();
    }, 2000)
}
fetchData (() => {
    console.log("回调完成");
    
})
// Promise
let promise = new Promise ((resolve, reject) => {
    let success = true;
    if (success) {
        resolve ('成功！')
    } else {
        reject ('失败！')
    }
});
promise.then((message) => {
    console.log('成功:' + message);
})
    .catch((error) => {
    console.log('失败:' + message);
});
// asyne/await
function fetchData() {
    return new Promise((resolve) => {
        setTimeout(() => {
            resolve('加载完成');
        }, 2000);
    });
}
async function getData() {
    console.log('开始加载....');
    let result = await fetchData();
    console.log(result);
}
getData();