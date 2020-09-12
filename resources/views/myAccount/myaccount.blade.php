@extends('layouts.master')
@section('title','รายละเอียดบัญชี')

@section('content')
<div class="row mt-5">
    <div class="col-md-12">
        <p align="center" style="color:black; font-size:30px;">เปลี่ยนรหัสผ่าน</p>
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
        <!--Card-->
        <div class="card animated bounceInDown">
            <!--Card content-->
            <div class="card-body">

                <!-- Form -->
                <form method="POST" action="{{ route('password.updated') }}">
                        @csrf
                        @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                    </ul>
                    </div>
                    @endif
                    <!-- Heading -->
                    <h3 class="dark-grey-text text-center">
                        <strong>Account</strong>
                    </h3>
                    <hr>
                    <div class="row">

                    </div>
                    <br>

                    <div class="row">
                        <div class="sm-form col-md-12">
                            <p align="left"><b>เปลี่ยนรหัสผ่าน</b></p>
                            <p align="left">รหัสผ่านเก่า</p>
                            <input id="oldpassword" type="password" class="form-control @error('oldpassword') is-invalid @enderror" name="oldpassword"  required autocomplete="oldpassword" autofocus>
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="sm-form col-md-12">

                            <p align="left">รหัสผ่านใหม่</p>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="sm-form col-md-12">

                            <p align="left">ยืนยันรหัสผ่านใหม่</p>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                    </div>

                    <div class="row mt-5">
                        <div class="col-md-12">
                            <button type="submit"
                                    class="btn peach-gradient btn-lg btn-block">บันทึก</button>
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
