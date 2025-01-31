document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // 阻止表单提交

    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    // 模拟验证逻辑
    if (username && password) { 
        localStorage.setItem('username', username); // 存储用户名

        // 获取 URL 参数，确定跳转来源
        const urlParams = new URLSearchParams(window.location.search);
        const redirectPage = urlParams.get('redirect') || 'test1.html'; 

        // 跳转回原页面
        window.location.href = redirectPage;
    } else {
        alert('用户名或密码不能为空');
    }
});