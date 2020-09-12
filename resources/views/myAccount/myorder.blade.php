@extends('layouts.master')
@section('title','รายการสั่งซื้อ')

@section('content')
@if($orders !== 0)
<div class="row mt-5">
    <div class="col-md-12">
        <p align="center" style="color:black; font-size:30px;">รายการสั่งซื้อ</p>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-3">
        <a href="{{route('myAccount.myaccount')}}">
            <p align="left" style="color:blue; font-size:17px;">เปลี่ยนรหัสผ่าน</p>
        </a>
        <a href="{{route('myAccount.myorder')}}">
            <p align="left" style="color:blue; font-size:17px;">รายการสั่งซื้อ</p>
        </a>
        <a href="{{route('address')}}">
            <p align="left" style="color:blue; font-size:17px;">รายละเอียดที่อยู่</p>
        </a>

    </div>
    <div class="col-md-7 mb-4 text-center text-md-center">
        <table class="table table-striped">
            <thead>
                <tr>

                    <th scope="col">วันที่</th>
                    <th scope="col">หมายเลขคำสั่งซื้อ</th>
                    <th scope="col">รวมทั้งสิ้น</th>
                    <th scope="col">จัดการ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                @foreach($order as $o)
                <td>{{$o->date}}</td>
                    <td>{{$o->order_no}}</td>
                    <td>{{$o->price}} บาท</td>
                    <td><a href="{{route('payment.orderstatus')}}"><button type="button"
                                class="btn btn-outline-danger waves-effect btn-sm">ติดตามสถานะการสั่งซื้อ</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@if($orders === 0)
<div class="row mt-5">
    <div class="col-md-12">
        <p align="center" style="color:black; font-size:30px;">ไม่มีรายการสั่งซื้อ</p>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-3">
        <a href="{{route('myAccount.myaccount')}}">
            <p align="left" style="color:blue; font-size:17px;">เปลี่ยนรหัสผ่าน</p>
        </a>
        <a href="{{route('myAccount.myorder')}}">
            <p align="left" style="color:blue; font-size:17px;">รายการสั่งซื้อ</p>
        </a>
        <a href="{{route('address')}}">
            <p align="left" style="color:blue; font-size:17px;">รายละเอียดที่อยู่</p>
        </a>

    </div>
</div>
@endif
@endsection
