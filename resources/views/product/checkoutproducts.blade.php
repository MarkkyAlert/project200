<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <title>Document</title>
    <style>
        body {
            font-family: 'Kanit', sans-serif;
        }

        .dropdown:hover>.dropdown-menu {
            display: block;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        @include('partials.navbar')
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <p align="center" style="font-size: 40px;">Checkout</p>
            </div>
        </div>


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
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                        <!-- Form -->
                        @if(!$address)
                        <form action="{{action('ProductController@createNewOrder')}}" method="post" novalidate>
                            {{csrf_field()}}
                            <!-- Heading -->
                            <h3 class="dark-grey-text text-center">
                                <strong>รายละเอียดที่อยู่ในการจัดส่ง</strong>
                            </h3>
                            <hr>
                            <div class="row">
                                <div class="sm-form col-md-6">

                                    <p align="left">ชื่อ</p>
                                    <input type="text" id="form3" name="firstname" class="form-control" placeholder=""value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                                </div>
                                <div class="sm-form col-md-6">

                                    <p align="left">นามสกุล</p>
                                    <input type="text" id="form2" name="lastname" class="form-control" placeholder=""value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="sm-form col-md-12">

                                    <p align="left">เบอร์ติดต่อ</p>
                                    <input type="text" id="form3" name="cellphone" class="form-control" placeholder=""value="{{ old('cellphone') }}" required autocomplete="cellphone" autofocus>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="sm-form col-md-6">

                                    <p align="left">บ้านเลขที่</p>
                                    <input type="text" id="form3" name="house_no" class="form-control" placeholder=""value="{{ old('house_no') }}" required autocomplete="house_no" autofocus>
                                </div>
                                <div class="sm-form col-md-6">

                                    <p align="left">ห้อง</p>
                                    <input type="text" id="form2" name="room" class="form-control" placeholder=""value="{{ old('room') }}" required autocomplete="room" autofocus>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="sm-form col-md-12">

                                    <p align="left">ชื่ออาคาร</p>
                                    <input type="text" id="form3" name="building_name" class="form-control"
                                        placeholder=""value="{{ old('building_name') }}" required autocomplete="building_name" autofocus>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="sm-form col-md-6">

                                    <p align="left">ซอย</p>
                                    <input type="text" id="form3" name="alley" class="form-control" placeholder=""value="{{ old('alley') }}" required autocomplete="alley" autofocus>
                                </div>
                                <div class="sm-form col-md-6">

                                    <p align="left">ถนน</p>
                                    <input type="text" id="form2" name="road" class="form-control" placeholder=""value="{{ old('road') }}" required autocomplete="road" autofocus>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="sm-form col-md-6">

                                    <p align="left">อำเภอ/เขต</p>
                                    <input type="text" id="form3" name="district" class="form-control" placeholder=""value="{{ old('district') }}" required autocomplete="district" autofocus>
                                </div>
                                <div class="sm-form col-md-6">

                                    <p align="left">ตำบล/แขวง</p>
                                    <input type="text" id="form2" name="subdistrict" class="form-control"
                                        placeholder=""value="{{ old('subdistrict') }}" required autocomplete="subdistrict" autofocus>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="sm-form col-md-12">

                                    <p align="left">จังหวัด</p>
                                    <input type="text" id="province_name" name="province" class="form-control"
                                        placeholder=""value="{{ old('province') }}" required autocomplete="province" autofocus>
                                    <div id="provinceList">
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="sm-form col-md-12">

                                    <p align="left">รหัสไปรษณีย์</p>
                                    <input type="text" id="form3" name="zip_code" class="form-control" placeholder=""value="{{ old('zip_code') }}" required autocomplete="zip_code" autofocus><br>
                                    <p align="left" style="color:red;">*กรุณาระบุ "-" เมื่อไม่มีข้อมูล</p>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn aqua-gradient btn-lg btn-block">สั่งซื้อ</button>
                        </form>
                        @endif
                        <!-- Form -->
                        @if($address)
                        <form action="{{action('AddressesController@updateAddressAtCheckout')}}" method="get">
                            {{csrf_field()}}
                            <!-- Heading -->
                            <h3 class="dark-grey-text text-center">
                                <strong>รายละเอียดที่อยู่ในการจัดส่ง</strong>
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
                                <div class="sm-form col-md-12">

                                    <p align="left">เบอร์ติดต่อ</p>
                                    <input type="text" id="form3" name="cellphone" value="{{$address->cellphone}}"
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
                                    <input type="text" id="form2" name="room" value="{{$address->room}}"
                                        class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="sm-form col-md-12">

                                    <p align="left">ชื่ออาคาร</p>
                                    <input type="text" id="form3" name="building_name"
                                        value="{{$address->building_name}}" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="sm-form col-md-6">

                                    <p align="left">ซอย</p>
                                    <input type="text" id="form3" name="alley" value="{{$address->alley}}"
                                        class="form-control" placeholder="">
                                </div>
                                <div class="sm-form col-md-6">

                                    <p align="left">ถนน</p>
                                    <input type="text" id="form2" name="road" value="{{$address->road}}"
                                        class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="sm-form col-md-6">

                                    <p align="left">อำเภอ/เขต</p>
                                    <input type="text" id="district_name" name="district" value="{{$address->district}}"
                                        class="form-control" placeholder="">
                                    <div id="districtList">
                                    </div>
                                </div>
                                <div class="sm-form col-md-6">

                                    <p align="left">ตำบล/แขวง</p>
                                    <input type="text" id="form2" name="subdistrict" value="{{$address->subdistrict}}"
                                        class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="sm-form col-md-12">

                                    <p align="left">จังหวัด</p>
                                    <input type="text" id="province_name" name="province" value="{{$address->province}}"
                                        class="form-control" placeholder="">
                                    <div id="provinceList">
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="sm-form col-md-12">

                                    <p align="left">รหัสไปรษณีย์</p>
                                    <input type="text" id="form3" name="zip_code" value="{{$address->zip_code}}"
                                        class="form-control" placeholder=""><br>
                                        <p align="left" style="color:red;">*กรุณาระบุ "-" เมื่อไม่มีข้อมูล</p>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn aqua-gradient btn-lg btn-block">สั่งซื้อ</button>
                        </form>
                        @endif
                    </div>
                </div>
                <!--/.Card-->
            </div>
            <!--Grid column-->
        </div>

    </div>
    @include('partials.footer')
    <script type="text/javascript">
        $(document).ready(function(){
             $('#province_name').keyup(function(){
                 var query = $(this).val();
                 if(query != '') {
                     var _token = $('input[name="_token"]').val();
                     $.ajax({
                     url:"{{ route('autocomplete.show') }}",
                     method:"POST",
                     data:{query:query, _token:_token},
                     success:function(data){
                         $('#provinceList').fadeIn();
                         $('#provinceList').html(data);
                     }
                      });
                 }

             });
         });
         $(document).on('click', 'li', function(){
             $('#provinceList').fadeOut();
             $('#province_name').val($(this).text());
         });

         $(document).ready(function(){
         $('#district_name').keyup(function(){
             var query2 = $(this).val();
             if(query2 != '') {
                 var _token = $('input[name="_token1"]').val();
                 $.ajax({
                 url:"{{ route('autocomplete.showdistrict') }}",
                 method:"POST",
                 data:{query2:query2, _token:_token},
                 success:function(data){
                     $('#districtList').fadeIn();
                     $('#districtList').html(data);
                 }
                  });
             }

         });
     });
     $(document).on('click', 'li', function(){
         $('#districtList').fadeOut();
         $('#district_name').val($(this).text());
     });
    </script>





    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
