@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-6 offset-3">
            <h1 class="text-center">
                @svg('pay-mate', 'w-75')
            </h1>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <label class="card-title d-block border-bottom mb-5 font-weight-bold">Order # 246</label>
                            <label class="card-subtitle d-block mb-2 text-black-50">
                                <span class="font-weight-bold">Subtotal:</span> $190,000
                            </label>
                            <label class="card-subtitle d-block mb-2 text-black-50">
                                <span class="font-weight-bold">Tax:</span> $0
                            </label>
                            <label class="card-subtitle d-block mb-2 text-black-50">
                                <span class="font-weight-bold">Total:</span> $190,000
                            </label>

                            <div class="text-right mt-4">
                                <button class="btn btn-secondary px-4 mr-2">Cancel</button>
                                <button class="btn btn-primary px-4">Pay</button>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <label class="card-title d-block border-bottom mb-3 ml-2 font-weight-bold">
                                Order Detail
                            </label>
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Acme Product</td>
                                    <td>2</td>
                                    <td>$40,000</td>
                                </tr>
                                <tr>
                                    <td>Dummy Shoes</td>
                                    <td>1</td>
                                    <td>$70,000</td>
                                </tr>
                                <tr>
                                    <td>Latte Shirt</td>
                                    <td>3</td>
                                    <td>$80,000</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection