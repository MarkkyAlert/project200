@extends('layouts.master')
@section('title','Hi')

@section('content')
<div class="row mt-5">
    <div class="col-md-12">
        <p align="center" style="color:black; font-size:30px;">รายละเอียดที่อยู่</p>
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
        <a href="#">
            <p align="left" style="color:blue; font-size:17px;">ออกจากระบบ</p>
        </a>
    </div>
    <div class="col-md-7 mb-4 text-center text-md-center">
        <!--Card-->
        <div class="card animated bounceInDown">
            <!--Card content-->
            <div class="card-body">

                <!-- Form -->
                <form name="register">
                    <!-- Heading -->
                    <h3 class="dark-grey-text text-center">
                        <strong>ที่อยู่ในการจัดส่งสินค้า</strong>
                    </h3>
                    <hr>
                    <div class="row">
                        <div class="sm-form col-md-6">

                            <p align="left">ชื่อ</p>
                            <input type="text" id="form3" class="form-control" placeholder="">
                        </div>
                        <div class="sm-form col-md-6">

                            <p align="left">นามสกุล</p>
                            <input type="text" id="form2" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="sm-form col-md-6">

                            <p align="left">บ้านเลขที่</p>
                            <input type="text" id="form3" class="form-control" placeholder="">
                        </div>
                        <div class="sm-form col-md-6">

                            <p align="left">ห้อง</p>
                            <input type="text" id="form3" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="sm-form col-md-12">

                            <p align="left">ชื่ออาคาร</p>
                            <input type="text" id="form3" class="form-control" placeholder="">
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="sm-form col-md-6">

                            <p align="left">ซอย</p>
                            <input type="text" id="form3" class="form-control" placeholder="">
                        </div>
                        <div class="sm-form col-md-6">

                            <p align="left">ถนน</p>
                            <input type="text" id="form3" class="form-control" placeholder="">
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="sm-form col-md-6">

                            <p align="left">อำเภอ/เขต</p>
                            <input type="text" id="form3" class="form-control" placeholder="">
                        </div>
                        <div class="sm-form col-md-6">

                            <p align="left">ตำบล/แขวง</p>
                            <input type="text" id="form3" class="form-control" placeholder="">
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="sm-form col-md-6">

                            <p align="left">จังหวัด</p>
                            <input type="text" id="form3" class="form-control" placeholder="">
                        </div>
                        <div class="sm-form col-md-6">

                            <p align="left">รหัสไปรษณีย์</p>
                            <input type="text" id="form3" class="form-control" placeholder="">
                        </div>

                    </div>
                    <br>
                    <div class="row ">
                        <div class="col-md-12">
                            <p align="left">เบอร์ติดต่อ</p>
                            <input type="text" id="form3" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="row mt-5">


                        <div class="col-md-12">
                            <a href="#"><button type="button" class="btn peach-gradient btn-lg btn-block">บันทึก</button></a>
                        </div>
                    </div>

                </form>
                <!-- Form -->
            </div>
        </div>
        <!--/.Card-->
    </div>
</div>
@endsection
