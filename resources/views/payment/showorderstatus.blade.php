@extends('layouts.master')
@section('title','Hi')

@section('content')
@if($query)
<div class="row mt-5">
    <div class="col-md-12">
        <p align="center" style="font-size:30px;">ติดตามรายการสั่งซื้อ</p>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12" style="border:3px solid orange;padding-top:10px;">

        <p align="center" style="font-size:18px;">รายการสั่งซื้อเลขที่ <mark
                style="background-color: yellow;">{{$query->order_no}}</mark> ขณะนี้อยู่ในสถานะ <mark
                style="background-color: yellow;">{{$query->delivery_status}}</mark></p>


    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12">
        @if($query->delivery_status === 'delivered')

        <p style="font-size:18px;color:red;">ขณะนี้สินค้าของท่านถูกจัดส่งแล้ว สามารถตรวจสอบ EMS Tracking
            ได้ที่อีเมล์ของท่าน
        </p>


        @endif


    </div>
</div>
@endif
@if(!$query)
<div class="row mt-5">
        <div class="col-md-12">
            <br><br><br>
            <p align="center" style="font-size:30px;">ไม่มีหมายเลขคำสั่งซื้อนี้</p>
            <br><br><br>
        </div>
    </div>
@endif
@endsection
