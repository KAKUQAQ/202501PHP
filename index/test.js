document.addEventListener("DOMContentLoaded", function () {
    let username = localStorage.getItem("username"); // 获取用户名

    if (username) {
        document.getElementById("auth-container").innerHTML = `<span style="color: white;">欢迎回来 ${username}</span>`;
    }
});
