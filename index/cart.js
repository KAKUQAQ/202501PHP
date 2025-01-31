document.addEventListener("DOMContentLoaded", function () {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    let cartContainer = document.getElementById("cart-items");
    let totalPriceElement = document.getElementById("total-price");
    let selectedPaymentElement = document.getElementById("selected-payment");

    function updateCartUI() {
        cartContainer.innerHTML = "";
        let totalPrice = 0;

        cart.forEach((item, index) => {
            totalPrice += item.price;

            let cartItem = document.createElement("div");
            cartItem.classList.add("cart-item");
            cartItem.innerHTML = `
                <span>${item.title} - ￥${item.price}</span>
                <button class="remove-btn" data-index="${index}">×</button>
            `;

            cartContainer.appendChild(cartItem);
        });

        totalPriceElement.innerText = totalPrice;

        // 绑定删除按钮事件
        document.querySelectorAll(".remove-btn").forEach(button => {
            button.addEventListener("click", function () {
                let index = this.getAttribute("data-index");
                cart.splice(index, 1); // 删除商品
                localStorage.setItem("cart", JSON.stringify(cart)); // 更新 localStorage
                updateCartUI(); // 重新渲染购物车界面
            });
        });
    }

    // 监听支付方式变化
    document.querySelectorAll("input[name='payment']").forEach(input => {
        input.addEventListener("change", function () {
            selectedPaymentElement.innerText = this.value;
        });
    });

    // 结算功能
    window.checkout = function () {
        if (cart.length === 0) {
            alert("购物车为空，无法结算！");
            return;
        }

        let selectedPayment = document.querySelector("input[name='payment']:checked").value;
        alert(`结算成功！支付方式：${selectedPayment}`);

        localStorage.removeItem("cart"); // 清空购物车数据
        cart = [];
        updateCartUI(); // 刷新界面
    };

    updateCartUI(); // 初始化购物车界面
});
