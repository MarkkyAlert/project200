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
                <p align="center" style="font-size:40px;">Cart</p>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">รายการสินค้าที่สั่งซื้อ</th>
                            <th scope="col">ราคา</th>
                            <th scope="col">จำนวน</th>
                            <th scope="col">รวมทั้งหมด</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Product name</th>
                            <td>120</td>
                            <td>2</td>
                            <td>240 </td>
                        </tr>
                        <tr>
                            <th scope="row">Product name</th>
                            <td>120</td>
                            <td>2</td>
                            <td>240</td>
                        </tr>
                        <tr>
                            <th scope="row">Product name</th>
                            <td>120</td>
                            <td>2</td>
                            <td>240</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <strong>
                                    <p style="color:red;">รวมทั้งหมด</p>
                                </strong>
                            </th>
                            <td></td>
                            <td></td>
                            <td>
                                <p style="color:red;">1000</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="checkout"><p align="center"><button type="button" class="btn btn-pink">Proceed to Checkout</button></p></a>
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
