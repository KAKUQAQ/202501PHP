// 获取ID元素
let heading = document.getElementById("tittle");
console.log(heading.textContent);
// 类名获取元素
let items = document.getElementsByClassName("item");
console.log(items[0].textContent);
// 标签名获取元素
let paragraphs = document.getElementsByTagName("p");
console.log(paragraphs.length);
// 选择器获取元素(第一个)
let button = document.querySelector(".btn");
console.log(button.textContent);
// 选择器获取元素(第一个)
let allButton = document.querySelectorAll(".btn");
console.log(allButton.length);
for (i = 0; i < allButton.length; i++) {
    console.log(allButton[i].innerHTML);
}
// 修改文本元素
heading.innerHTML = "I'm tittle";
// 修改属性
let link = document.querySelector("a");
link.setAttribute("href", "https://www.bilibili.com");
link.innerHTML = "BILIBILI";
// 修改样式
let box = document.querySelector(".box");
box.style.backgroundColor = "skyblue";
box.style. border = "1px dashed gray";
// 添加元素
let list = document.getElementById("list");
let newItem = document.createElement("li");
newItem.textContent = "2";
list.appendChild(newItem);
list.insertBefore(newItem, list.children[1]);
// 删除元素
let item = document.querySelector("li");
list.removeChild(item);
// 数组的方法
const array1 = [
    {id: 1, name: "mac", price: 10, quantity: 1},
    {id: 2, name: "iphone", price: 20, quantity: 1},
    {id: 3, name: "ipad", price: 30, quantity: 1}
];

let array = [10, 20, 30, 40, 50];

const found = array1.find((element) => element.id === 1);
array1.push({id: 4, name: "新的", price: 10, quantity: 1});

array1.forEach((element) => {
    console.log(element.name);
    alert(1);
});

newArray = array1.filter((element) => element.id !== 1);
console.log(newArray);

console.log(found);
console.log(array1);
