document.addEventListener("DOMContentLoaded", function () {
    let form = document.querySelector("form");
    form.addEventListener("submit", function (event) {
        let name = document.getElementById("username").value.trim();
        let password = document.getElementById("password").value.trim();

        if (name === "" || password === "") {
            event.preventDefault(); // 阻止提交
            alert("用户名或密码不能为空");
        }
    });
});
