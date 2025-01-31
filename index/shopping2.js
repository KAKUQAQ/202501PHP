function showDetail(image, title, price) {
    document.getElementById('detail-image').src = image;
    document.getElementById('detail-title').innerText = title;
    document.getElementById('detail-price').innerText = '￥' + price;
    document.getElementById('product-detail').style.display = 'flex';
}

function addToCart() {
    let title = document.getElementById('detail-title').innerText;
    let price = parseFloat(document.getElementById('detail-price').innerText.replace('￥', ''));
    
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    cart.push({ title, price });
    localStorage.setItem("cart", JSON.stringify(cart));

    alert("商品已加入购物车！");
}

function buyNow() {
    addToCart();
    window.location.href = "cart.html";
}

document.addEventListener("DOMContentLoaded", function () {
    let username = localStorage.getItem("username"); // 获取用户名

    if (username) {
        document.getElementById("auth-container").innerHTML = `<span style="color: white;">欢迎回来 ${username}</span>`;
    }
});
