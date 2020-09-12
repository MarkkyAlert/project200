@extends('layouts.master')
@section('title','รายละเอียดที่อยู่')

@section('content')
<div class="row mt-5">
    <div class="col-md-12">
        <p align="center" style="color:black; font-size:30px;">รายละเอียดที่อยู่</p>
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
                @if($address)
                @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{\Session::get('success')}}</p>
                </div>
                @endif
                <form method="get" action="{{action('AddressesController@updateAddress')}}">{{csrf_field()}}
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    <!-- Heading -->
                    <h3 class="dark-grey-text text-center">
                        <strong>ที่อยู่ในการจัดส่งสินค้า</strong>
                    </h3>

                    <hr>
                    <div class="row">
                        <div class="sm-form col-md-6">

                            <p align="left">ชื่อ</p>
                            <input type="text" id="form3" name="firstname" value="{{$address->firstname}}"
                                class="form-control" placeholder="">
                        </div>
                        <div class="sm-form col-md-6">

                            <p align="left">นามสกุล</p>
                            <input type="text" id="form2" name="lastname" value="{{$address->lastname}}"
                                class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="sm-form col-md-6">

                            <p align="left">บ้านเลขที่</p>
                            <input type="text" id="form3" name="house_no" value="{{$address->house_no}}"
                                class="form-control" placeholder="">
                        </div>
                        <div class="sm-form col-md-6">

                            <p align="left">ห้อง</p>
                            <input type="text" id="form3" name="room" value="{{$address->room}}" class="form-control"
                                placeholder="">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="sm-form col-md-12">

                            <p align="left">ชื่ออาคาร</p>
                            <input type="text" id="form3" name="building_name" value="{{$address->building_name}}"
                                class="form-control" placeholder="">
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="sm-form col-md-6">

                            <p align="left">ซอย</p>
                            <input type="text" id="form3" name="alley" value="{{$address->alley}}" class="form-control"
                                placeholder="">
                        </div>
                        <div class="sm-form col-md-6">

                            <p align="left">ถนน</p>
                            <input type="text" id="form3" name="road" value="{{$address->road}}" class="form-control"
                                placeholder="">
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="sm-form col-md-6">

                            <p align="left">อำเภอ/เขต</p>
                            <input type="text" id="form3" name="district" value="{{$address->district}}" class="form-control" placeholder="">
                        </div>
                        <div class="sm-form col-md-6">

                            <p align="left">ตำบล/แขวง</p>
                            <input type="text" id="form3" name="subdistrict"  value="{{$address->subdistrict}}"
                                class="form-control" placeholder="">
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="sm-form col-md-6">

                            <p align="left">จังหวัด</p>
                            <input type="text" id="form3" name="province"  value="{{$address->province}}"

                                class="form-control" placeholder="">
                        </div>
                        <div class="sm-form col-md-6">

                            <p align="left">รหัสไปรษณีย์</p>
                            <input type="text" id="form3" name="zip_code" value="{{$address->zip_code}}"
                                class="form-control" placeholder="">
                        </div>

                    </div>
                    <br>
                    <div class="row ">
                        <div class="col-md-12">
                            <p align="left">เบอร์ติดต่อ</p>
                            <input type="text" id="form3" name="cellphone" value="{{$address->cellphone}}"
                                class="form-control" placeholder=""><br>
                                <p align="left" style="color:red;">*กรุณาระบุ "-" เมื่อไม่มีข้อมูล</p>
                        </div>
                    </div>
                    <div class="row mt-5">


                        <div class="col-md-12">
                            <button type="submit" class="btn peach-gradient btn-lg btn-block">บันทึก</button>
                        </div>
                    </div>

                </form>
                @endif
                @if(!$address)
                @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{\Session::get('success')}}</p>
                </div>
                @endif
                <form method="get" novalidate action="{{action('AddressesController@insertAddress')}}">{{csrf_field()}}
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    <!-- Heading -->
                    <h3 class="dark-grey-text text-center">
                        <strong>ที่อยู่ในการจัดส่งสินค้า</strong>
                    </h3>
                    <hr>
                    <div class="row">
                        <div class="sm-form col-md-6">

                            <p align="left">ชื่อ</p>
                            <input type="text" id="form3" name="firstname"
                                class="form-control" placeholder=""value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                        </div>
                        <div class="sm-form col-md-6">

                            <p align="left">นามสกุล</p>
                            <input type="text" id="form2" name="lastname"
                                class="form-control" placeholder=""value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="sm-form col-md-6">

                            <p align="left">บ้านเลขที่</p>
                            <input type="text" id="form3" name="house_no"
                                class="form-control" placeholder=""value="{{ old('house_no') }}" required autocomplete="house_no" autofocus>
                        </div>
                        <div class="sm-form col-md-6">

                            <p align="left">ห้อง</p>
                            <input type="text" id="form3" name="room"  class="form-control"
                                placeholder=""value="{{ old('room') }}" required autocomplete="room" autofocus>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="sm-form col-md-12">

                            <p align="left">ชื่ออาคาร</p>
                            <input type="text" id="form3" name="building_name"
                                class="form-control" placeholder=""value="{{ old('building_name') }}" required autocomplete="building_name" autofocus>
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="sm-form col-md-6">

                            <p align="left">ซอย</p>
                            <input type="text" id="form3" name="alley"  class="form-control"
                                placeholder=""value="{{ old('alley') }}" required autocomplete="alley" autofocus>
                        </div>
                        <div class="sm-form col-md-6">

                            <p align="left">ถนน</p>
                            <input type="text" id="form3" name="road"  class="form-control"
                                placeholder=""value="{{ old('road') }}" required autocomplete="road" autofocus>
                        </div>

                    </div>
                    <br>
                    <div class="row">
                            <div class="sm-form col-md-6">

                                    <p align="left">อำเภอ/เขต</p>
                            <input type="text" id="form3" name="district" class="form-control" placeholder="" value="{{ old('district') }}" required autocomplete="district" autofocus>

                                </div>
                        <div class="sm-form col-md-6">

                            <p align="left">ตำบล/แขวง</p>
                            <input type="text" id="form3" name="subdistrict"
                                class="form-control" placeholder=""value="{{ old('subdistrict') }}" required autocomplete="subdistrict" autofocus>
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="sm-form col-md-6">

                                <p align="left">จังหวัด</p>
                                <input type="text" id="form3" name="province" class="form-control" placeholder=""  value="{{ old('province') }}" required autocomplete="province" autofocus>


                        </div>


                        <div class="sm-form col-md-6">

                            <p align="left">รหัสไปรษณีย์</p>
                            <input type="text" id="form3" name="zip_code"
                                class="form-control" placeholder=""value="{{ old('zip_code') }}" required autocomplete="zip_code" autofocus>
                        </div>

                    </div>
                    <br>
                    <div class="row ">
                        <div class="col-md-12">
                            <p align="left">เบอร์ติดต่อ</p>
                            <input type="text" id="form3" name="cellphone"
                                class="form-control" placeholder=""value="{{ old('house_no') }}" required autocomplete="house_no" autofocus><br>
                                <p align="left" style="color:red;">*กรุณาระบุ "-" เมื่อไม่มีข้อมูล</p>
                        </div>
                    </div>
                    <div class="row mt-5">


                        <div class="col-md-12">
                            <button type="submit" class="btn peach-gradient btn-lg btn-block">บันทึก</button>
                        </div>
                    </div>

                </form>
                @endif
                <!-- Form -->
            </div>
        </div>
        <!--/.Card-->
    </div>

</div>

@endsection
