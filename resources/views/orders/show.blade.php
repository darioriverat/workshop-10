@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-10 offset-1 border rounded-lg p-5">
            <div class="row text-black-50 mb-5">
                <div class="col-6">
                    <h1 class="h4 mr-2 d-inline-block">
                        Order #{{ $order->id }}
                    </h1>
                    <span class="badge badge-pill badge-primary">{{ $order->status() }}</span>
                </div>
                <div class="col-6 text-right">
                    {{ $order->created_at->toFormattedDateString() }}
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-12">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order->details as $detail)
                            <tr>
                                <td>{{ $detail->product->name }}</td>
                                <td>{{ $detail->quantity }}</td>
                                <td>${{ $detail->unit_price }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="text-right text-info">
                        <strong>Total: </strong>
                        <span>${{ $order->total_price }}</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection