@extends('layouts.app')

@section('content')
    <h2>订单详情</h2>

    <p>订单编号: {{ $order->id }}</p>
    <p>商品名称: {{ $order->product->name }}</p>
    <p>购买数量: {{ $order->quantity }}</p>
    <p>总价格: ¥{{ number_format($order->total_price, 2) }}</p>

    <form id="confirmPurchaseForm" action="{{ route('orders.confirmPurchase', ['order' => $order->id]) }}" method="POST">
        @csrf
        <button type="button" class="btn btn-success" onclick="confirmPurchase()">确认购买</button>
    </form>

    <a href="{{ route('orders.index') }}" class="btn btn-secondary">返回订单列表</a>

    <script>
        function confirmPurchase() {
            if (confirm("购买成功！点击确定返回商品列表。")) {
                document.getElementById('confirmPurchaseForm').submit();
            }
        }
    </script>
@endsection
