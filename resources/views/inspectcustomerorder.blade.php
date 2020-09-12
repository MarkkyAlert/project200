@extends('layouts.master')
@section('title','Hi')

@section('content')
<div class="row mt-5">
    <div class="col-md-12">
        <p align="center" style="font-size:30px;">ข้อมูลคนที่สั่งซื้อ</p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ลำดับที่</th>
                    <th scope="col">รายการสินค้า</th>
                    <th scope="col">จำนวน</th>
                    <th scope="col">สถานะการโอนเงิน</th>
                    <th scope="col">วันที่</th>
                    <th scope="col">ที่อยู่</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Bear doll</td>
                    <td>2</td>
                    <td><p align="left" style="color:green;">โอนแล้ว</p></td>
                    <td>20/09/63</td>
                    <td>พฤฒิพงศ์ อ่อนสุด 1544/220 ยูทรีคอนโดแอดแยกเกษตร ซอยพหลโยธิน34 แขวงเสนานิคม เขตจตุจักร 10900 0970233386</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Dog doll</td>
                    <td>2</td>
                    <td><p align="left" style="color:red;">ยังไม่โอน</p></td>
                    <td>20/09/63</td>
                    <td>พฤฒิพงศ์ อ่อนสุด 1544/220 ยูทรีคอนโดแอดแยกเกษตร ซอยพหลโยธิน34 แขวงเสนานิคม เขตจตุจักร 10900 0970233386</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
@endsection

