@extends('layouts.app')
@section('title', "Order information")
@section('subtitle', "Order details")
@section('content')
<div class="card">
    <div class="card-body">
        <h4>Order #{{ $viewData["order"]->getId() }}</h4>
        <p><strong>Total:</strong> {{ $viewData["order"]->getTotal() }}</p>
        <p><strong>Date:</strong> {{ $viewData["order"]->getDate() }}</p>
        <p><strong>Paid:</strong> {{ $viewData["order"]->getPaid() ? 'Yes' : 'No' }}</p>
        <p><strong>Shipped:</strong> {{ $viewData["order"]->getShipped() }}</p>
        <p><strong>Method of Payment:</strong> {{ $viewData["order"]->getMethodOfPayment() }}</p>
        <a href="{{ route('order.delete', $viewData['order']->getId()) }}"
           class="btn btn-lila btn-danger">
           Delete Order
        </a>
    </div>
</div>
@endsection
