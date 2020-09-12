@extends('layouts.master')
@section('title','Hi')

@section('content')
<div class="row mt-5">
    <div class="col-md-12">
        <p align="center" style="font-size:30px;">Order Recieved</p><br>
        <p align="center" style="font-size:18px;">ได้รับรายการสั่งซื้อของคุณเรียบร้อยแล้ว</p>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12" style="border:3px solid orange;padding-top:10px;">

    <p align="center" style="font-size:18px;">Order Number :  {{$payment_info['order_no']}}</p>
    <p align="center" style="font-size:18px;">date : {{$payment_info['date']}}</p>

        <p align="center" style="font-size:18px;">รวมทั้งสิ้น : {{$payment_info['price']}} บาท</p>
        <p align="center" style="font-size:18px;">วิธีการชำระเงิน : ชำระผ่านธนาคาร</p>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12">

        <a href="{{route('transactions.index')}}"><button type="button" class="btn purple-gradient btn-lg btn-block">แจ้งชำระเงิน</button></a>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12">
        <p align="left" style="font-size:25px;">ข้อมูลบัญชีธนาคาร</p>
        <p align="center" style="font-size:20px;">ชื่อบัญชี นายพฤฒิพงศ์ อ่อนสุด</p>
        <p align="center" style="font-size:20px;">ประเภทบัญชี กระแสรายวัน</p>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-4">
        <img class="d-block w-100" src="https://kasikornbank.com/SiteCollectionDocuments/about/img/logo/logo.png" alt="Third slide">
        <br><p align="center" style="font-size:20px;">111-111-111-1</p>
    </div>
    <div class="col-md-4">
        <img class="d-block w-100" src="http://www.shimono.in.th/wp-content/uploads/2018/10/SCB.png" alt="Third slide">
        <br><p align="center" style="font-size:20px;">222-222-222-2</p>
    </div>
    <div class="col-md-4">
        <img class="d-block w-100" src="http://www.pswtrading.com/UploadImage/97e1cb90-69fa-4b60-ab53-c466e0acf692.png" alt="Third slide">
        <br><p align="center" style="font-size:20px;">333-333-333-3</p>
    </div>
</div>
@endsection
