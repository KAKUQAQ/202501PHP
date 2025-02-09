<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class OrderController extends Controller
{
    public function purchase(Request $request): RedirectResponse
    {
        // 验证表单输入
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $product = Product::findOrFail($request->product_id);
        $quantity = $request->quantity;

        // 计算总价
        $totalPrice = $product->price * $quantity;

        // 创建订单
        $order = Order::create([
            'product_id' => $product->id,
            'quantity' => $quantity,
            'total_price' => $totalPrice
        ]);

        return redirect()->route('orders.show', $order->id)
            ->with('success', '订单创建成功！');
    }

    public function show(Order $order)
    {
        return view('orders.show', ['order' => $order]);
    }

    public function index()
    {
        $orders = Order::latest()->get();
        return view('orders.index', compact('orders'));
    }
}
