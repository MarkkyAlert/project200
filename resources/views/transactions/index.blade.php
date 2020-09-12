@extends('layouts.master')
@section('title','แจ้งชำระเงิน')

@section('content')
<div class="row wow fadeIn mt-5">

    <!--Grid column-->
    <div class="col-md-3 mb-4 white-text text-center text-md-left">

    </div>

    <!--Grid column-->
    <div class="col-md-6 mb-4 text-center text-md-center ">
        <!--Card-->
        <div class="card animated bounceInDown">
            <!--Card content-->
            <div class="card-body">

                <!-- Form -->
                <form method="post" action="{{action('TransactionsController@insertTransaction')}}" enctype="multipart/form-data">{{csrf_field()}}
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
                        <strong>แจ้งยืนยันการชำระเงิน</strong>
                    </h3>
                    <hr>
                    <div class="row">
                        <div class="sm-form col-md-6">

                            <p align="left">ชื่อ</p>
                            <input type="text" id="form3" class="form-control" name="name" placeholder="">
                        </div>
                        <div class="sm-form col-md-6">

                            <p align="left">เบอร์ติดต่อ</p>
                            <input type="text" id="form2" class="form-control" name="cellphone" placeholder="">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="sm-form col-md-12">

                            <p align="left">เลขที่รายการสั่งซื้อ</p>
                            <input type="text" id="form3" class="form-control " name="order_no" placeholder="">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="sm-form col-md-6">

                            <p align="left">ยอดโอน</p>
                            <input type="text" id="form3" class="form-control" name="money" placeholder="">
                        </div>
                        <div class="sm-form col-md-6">

                            <p align="left">ธนาคารที่โอน</p>
                            <select name="bank" class="browser-default custom-select">
                                <option selected>Open this select menu</option>
                                <option value="KBANK">KBANK</option>
                                <option value="SCB">SCB</option>
                                <option value="BUALUANG">BUALUANG</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="sm-form col-md-6">

                            <p align="left">วันที่</p>
                            <div class="sm-form">
                                <input type="date" id="inputMDEx" name="date" class="form-control">

                            </div>
                        </div>
                        <div class="sm-form col-md-6">
                            <p align="left">เวลา</p>
                            <input type="time" id="inputMDEx1" name="time" class="form-control">

                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="sm-form col-md-12">

                            <p align="left">หลักฐานการโอนเงิน</p>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="picture" id="inputGroupFile01"
                                        aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <button type="submit" class="btn peach-gradient btn-lg btn-block">แจ้งชำระเงิน</button>
                        </div>
                    </div>


                </form>
                <!-- Form -->
            </div>
        </div>
        <!--/.Card-->
    </div>
    <!--Grid column-->
</div>


@endsection
