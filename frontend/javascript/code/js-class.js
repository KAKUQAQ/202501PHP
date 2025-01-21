let person = {
    name: '张三',
    age: 25,
    greet: function () {
        // this指当前对象
        console.log("你好，我叫" + this.name);
    }
};
person.greet();
// 构造函数
function Person(name,age) {
    this.name = name;
    this.age = age;
}
let student = new Person("李四",22)
console.log(student.name);
