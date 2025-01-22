document.getElementById("show-Button").addEventListener("click", () => {
const image = document.getElementById("cat");
// 显示提示信息
image.style.display = "block";
image.style.opacity = "1";
// 3秒后淡出提示信息
setTimeout(() => {
    image.style.opacity = "0";

// 1秒后完全隐藏（与 CSS 过渡时间一致）
    setTimeout(() => {
        image.style.display = "none";
        }, 1000);
    }, 3000);
});
