let input = document.getElementById("todo-input");
let addButton = document.getElementById("add-btn");
let todolist = document.getElementById("todo-list");

addButton.addEventListener("click", () => {
    // 去除两段空格
    let text = input.value.trim();
    if (text) {
        let listItem = document.createElement("li");
        listItem.textContent = text;
        // 创建删除按钮
        let deleteButton = document.createElement("button");
        deleteButton.textContent = "删除";
        deleteButton.addEventListener ("click", () => {
            todolist.removeChild(listItem);
        });
        listItem.appendChild(deleteButton);
        todolist.appendChild(listItem);
        // 清空输入框
        input.value = "";
    } else {
        alert("请输入内容");
    }
})