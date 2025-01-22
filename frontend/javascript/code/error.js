// 错误处理
try {
    let result = 10/ 0;
    console.log(("结果" + result));
} catch (error) {
    console.error("发生错误" + error.message);
    // alert("诶啦！")
    
}
// 抛出异常
function divide(a, b) {
    if (b === 0) {
        throw new Error("除数不能为0");
    }
    return a/ b;
}
try {
    console.log(devide(10, 0));
} catch (error) {
    console.log(error.message);
}
// finally块
try {
    console.log("开始计算....");
    let result = 10/ 2;
    console.log("结果：" + result);
} catch (error) {
    console.error("发生错误：" + error.message);
} finally {
    console.log("计算结束");
    
}