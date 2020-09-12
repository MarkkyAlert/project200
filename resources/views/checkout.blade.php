<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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

                        <!-- Form -->
                        <form name="register">
                            <!-- Heading -->
                            <h3 class="dark-grey-text text-center">
                                <strong>รายละเอียดที่อยู่ในการจัดส่ง</strong>
                            </h3>
                            <hr>
                            <div class="row">
                                <div class="sm-form col-md-6">

                                    <p align="left">บ้านเลขที่</p>
                                    <input type="text" id="form3" class="form-control" placeholder="">
                                </div>
                                <div class="sm-form col-md-6">

                                    <p align="left">ห้อง</p>
                                    <input type="text" id="form2" class="form-control" placeholder="">
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
                                    <input type="text" id="form2" class="form-control" placeholder="">
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
                                    <input type="text" id="form2" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="sm-form col-md-12">

                                    <p align="left">จังหวัด</p>
                                    <input type="text" id="form3" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="sm-form col-md-12">

                                    <p align="left">รหัสไปรษณีย์</p>
                                    <input type="text" id="form3" class="form-control" placeholder="">
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn aqua-gradient btn-lg btn-block">สั่งซื้อ</button>
                        </form>
                        <!-- Form -->
                    </div>
                </div>
                <!--/.Card-->
            </div>
            <!--Grid column-->
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <p align="left" style="font-size: 25px;">รายการสั่งซื้อของคุณ</p>
            </div>
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">รายการสินค้าที่สั่งซื้อ</th>

                            <th scope="col">รวมทั้งหมด</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Product name</th>
                            <td>120</td>

                        </tr>
                        <tr>
                            <th scope="row">มูลค่าสินค้า</th>
                            <td>120</td>

                        </tr>
                        <tr>
                            <th scope="row">วิธีการจัดส่ง</th>
                            <td>
                                <!-- Group of default radios - option 1 -->
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios">
                                    <label class="custom-control-label" for="defaultGroupExample1">จัดส่งแบบธรรมดา 20 Baht</label>
                                </div>

                                <!-- Group of default radios - option 2 -->
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadios" checked>
                                    <label class="custom-control-label" for="defaultGroupExample2">ลงทะเบียน 35 ฺBaht</label>
                                </div>

                                <!-- Group of default radios - option 3 -->
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="defaultGroupExample3" name="groupOfDefaultRadios">
                                    <label class="custom-control-label" for="defaultGroupExample3">EMS 60 Baht</label>
                                </div>
                            </td>


                        </tr>
                        <tr>
                            <th scope="row">
                                <strong>
                                    <p style="color:red;">รวมทั้งหมด</p>
                                </strong>
                            </th>

                            <td>
                                <strong>
                                    <p style="color:red;">1000 Baht</p>
                                </strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="orderrecieved"><button type="submit" class="btn aqua-gradient btn-lg btn-block">สั่งซื้อ</button></a>
            </div>
        </div>
    </div>
    @include('partials.footer')

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
