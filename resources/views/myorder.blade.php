@extends('layouts.master')
@section('title','Hi')

@section('content')
<div class="row mt-5">
    <div class="col-md-12">
        <p align="center" style="color:black; font-size:30px;">รายการสั่งซื้อ</p>
    </div>
</div>
<div class="row mt-5">
<div class="col-md-3">
        <a href="myaccount">
            <p align="left" style="color:blue; font-size:17px;">รายละเอียดบัญชี</p>
        </a>
        <a href="myorder">
            <p align="left" style="color:blue; font-size:17px;">รายการสั่งซื้อ</p>
        </a>
        <a href="myaddress">
            <p align="left" style="color:blue; font-size:17px;">รายละเอียดที่อยู่</p>
        </a>
        
    </div>
    <div class="col-md-7 mb-4 text-center text-md-center">
    <table class="table table-striped">
<thead>
<tr>
<th scope="col">รายการที่</th>
<th scope="col">วันที่</th>
<th scope="col">สถานะ</th>
<th scope="col">รวมทั้งสิ้น</th>
<th scope="col">จัดการ</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td>12/09/55</td>
<td>ส่งแล้ว</td>
<td>450 บาท</td>
<td><a href="slipform"><button type="button" class="btn btn-outline-danger waves-effect btn-sm">แจ้งชำระเงิน</button></a></td>
</tr>

</tbody>
</table>
    </div>
</div>
@endsection
