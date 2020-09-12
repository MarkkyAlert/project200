@extends('layouts.master')
@section('title','Hi')

@section('content')
<div class="row mt-5">
    <div class="col-md-12">
        <p align="center" style="color:black; font-size:30px;">รายละเอียดบัญชี</p>
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
    <a href="{{route('address')}}">
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
                        <strong>Account</strong>
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
                        <div class="sm-form col-md-12">

                            <p align="left">E-mail</p>
                            <input type="email" id="form3" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="sm-form col-md-12">
                            <p align="left"><b>เปลี่ยนรหัสผ่าน</b></p>
                            <p align="left">รหัสผ่านเก่า</p>
                            <input type="password" id="form3" class="form-control" placeholder="">
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="sm-form col-md-12">

                            <p align="left">รหัสผ่านใหม่</p>
                            <input type="password" id="form3" class="form-control" placeholder="">
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="sm-form col-md-12">

                            <p align="left">ยืนยันรหัสผ่านใหม่</p>
                            <input type="password" id="form3" class="form-control" placeholder="">
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

