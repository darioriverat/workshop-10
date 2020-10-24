@extends('layouts.user')

@section('content')
    <payment-info :order="{{ $order }}" :statuses="{{ json_encode($statuses) }}"></payment-info>
@endsection
