@extends('layouts/app')

@section('content')
    <h2>订单详情</h2>
    <p>订单编号: {{ $order->id }}</p>
    <p>商品名称: {{ $order->product->name }}</p>
    <p>购买数量: {{ $order->quantity }}</p>
    <p>总价格: ${{ number_format($order->total_price, 2) }}</p>
    <a href="{{ route('home') }}">返回首页</a>
@endsection
