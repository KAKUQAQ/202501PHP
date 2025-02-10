@extends('layouts.app')

@section('content')
    <h2>订单列表</h2>

    <table class="table">
        <thead>
        <tr>
            <th>订单编号</th>
            <th>商品名称</th>
            <th>数量</th>
            <th>总价格</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->product->name }}</td>
                <td>{{ $order->quantity }}</td>
                <td>¥{{ number_format($order->total_price, 2) }}</td>
                <td>
                    <a href="{{ route('orders.show', ['order' => $order->id]) }}" class="btn btn-sm btn-primary">
                        确认订单
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{ route('products.index') }}" class="btn btn-secondary">返回商品列表</a>
@endsection
