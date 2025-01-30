let cart = [];

function showDetail(image, title, price) {
    document.getElementById('detail-image').src = image;
    document.getElementById('detail-title').innerText = title;
    document.getElementById('detail-price').innerText = '￥' + price;
    document.getElementById('product-detail').style.display = 'flex';
}

function addToCart() {
    let title = document.getElementById('detail-title').innerText;
    let price = parseFloat(document.getElementById('detail-price').innerText.replace('￥', ''));
    cart.push({ title, price });
    updateCart();
}

function updateCart() {
    let cartContainer = document.getElementById('cart-items');
    cartContainer.innerHTML = '';
    let totalPrice = 0;
    cart.forEach((item, index) => {
        totalPrice += item.price;
        cartContainer.innerHTML += `<div class='cart-item'>${item.title} - ￥${item.price}</div>`;
    });
    document.getElementById('cart-count').innerText = cart.length;
    document.getElementById('total-price').innerText = totalPrice;
}

function showCart() {
    document.getElementById('cart').style.display = 'block';
}

document.addEventListener("DOMContentLoaded", function () {
    let urlParams = new URLSearchParams(window.location.search);
    let username = urlParams.get("username") || localStorage.getItem("username");

    if (username) {
        document.getElementById("auth-container").innerHTML = `<span style="color: white;">欢迎回来 ${username}</span>`;
    }
});

