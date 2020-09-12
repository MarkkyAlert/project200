@extends('layouts.master')
@section('title','tracking')

@section('content')
<div class="row mt-5">
    <div class="col-md-12">
    <p align="center" style="font-size:30px;">ติดตามรายการสั่งซื้อ</p>
    <p align="center" style="font-size:17px;">รหัสการสั่งซื้อ </p>
    <form method="post" action="{{action('PaymentsController@orderStatus')}}">
        @csrf
    <input class="form-control" name="order_no" type="text" placeholder=""><br>
    <button type="button" type="submit" class="btn purple-gradient btn-lg btn-block">ติดตาม</button>
    </form>
    </div>
</div>
@endsection



