@extends('layouts.master')
@section('title','Hi')

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
                <form name="register">
                    <!-- Heading -->
                    <h3 class="dark-grey-text text-center">
                        <strong>แจ้งยืนยันการชำระเงิน</strong>
                    </h3>
                    <hr>
                    <div class="row">
                        <div class="sm-form col-md-6">

                            <p align="left">ชื่อ</p>
                            <input type="text" id="form3" class="form-control" placeholder="">
                        </div>
                        <div class="sm-form col-md-6">

                            <p align="left">เบอร์ติดต่อ</p>
                            <input type="text" id="form2" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="sm-form col-md-12">

                            <p align="left">เลขที่รายการสั่งซื้อ</p>
                            <input type="text" id="form3" class="form-control" placeholder="">
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="sm-form col-md-6">

                            <p align="left">ยอดโอน</p>
                            <input type="text" id="form3" class="form-control" placeholder="">
                        </div>
                        <div class="sm-form col-md-6">

                            <p align="left">ธนาคารที่โอน</p>
                            <select class="browser-default custom-select">
                                <option selected>Open this select menu</option>
                                <option value="1">KBANK</option>
                                <option value="2">SCB</option>
                                <option value="3">BUALUANG</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="sm-form col-md-6">

                            <p align="left">วันที่</p>
                            <div class="sm-form">
                                <input type="date" id="inputMDEx" class="form-control">

                            </div>
                        </div>
                        <div class="sm-form col-md-6">
                                <p align="left">เวลา</p>
                            <input type="time" id="inputMDEx1" class="form-control">

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
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                        aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <a href="home"><button type="button"
                                    class="btn peach-gradient btn-lg btn-block">แจ้งชำระเงิน</button></a>
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
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js">
</script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>

@endsection
