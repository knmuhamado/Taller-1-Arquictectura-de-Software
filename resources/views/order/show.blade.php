@extends('layouts.app')
@section('title', "Order information")
@section('subtitle', "Order details")
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
           {{ $viewData["order"]["name"] }}
        </h5>
        <p class="card-text">{{ $viewData["order"]["total"]["methodOfPayment"}}</p>
      </div>
    </div>
  </div>
</div>
@endsection
