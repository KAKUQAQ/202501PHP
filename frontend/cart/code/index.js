let productList = document.getElementById("product-list");
let cartItem = document.getElementById("cart-items");
let totalPriceElement = document.getElementById("total-price");
// 用于储存商品数组
let cart = [];
// 添加商品到购物车
productList.addEventListener("click", (event) => {
    if (event.target.classList.contains("add-to-cart")) {
        // 获取最近的祖先元素
        let product = event.target.closest(".product");
        let productId = product.dataset.id;
        let productName = product.dataset.name;
        let productPrice = parseFloat(product.dataset.price);
        // 检测购物车中是否已有该商品
        let existingProduct = cart.find((item) => item.id === productId);
        if (existingProduct) {
            existingProduct.quantity++;
        } else {
            cart.push ({id: productId, name: productName, price: productPrice, quantity: 1});
        }
        renderCart();
    }
});
// 渲染购物车内容
function renderCart() {
    cartItem.innerHTML = "";
    let total = 0;
    cart.forEach((item) => {
        // 动态创建购物车项目
        let li = document.createElement("li");
        li.innerHTML = `
        ${item.name} x ${item.quantity} - ￥${item.price * item.quantity}
        <button class = "remove" data-id = "${item.id}">移除</button>
        `;
        cartItem.appendChild(li);
        total += item.price * item.quantity;
    });
    totalPriceElement.textContent = `总价：￥${total.toFixed(2)}`;
};
// 从购物车移除商品
cartItem.addEventListener("click", (event) => {
    if (event.target.classList.contains("remove")) {
        let productId = event.target.dataset.id;
        cart = cart.filter((item) => item.id !== productId);
        renderCart();
    }
});