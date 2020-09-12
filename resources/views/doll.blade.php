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
            <div class="col-md-6">
                <select class="browser-default custom-select">
                    <option selected>ประเภทสินค้า</option>
                    <option value="<a href=route{{'doll'}}>">ตุ๊กตา</option>
                    <a href="route{{'keychain'}}"><option value="2">พวงกุญแจ</option></a>
                    <a href="url{{'/doll'}}"><option value="3">หมอน</option></a>
                </select>
            </div>
            <div class="col-md-6">
                <select class="browser-default custom-select">
                    <option selected>Character</option>
                    <option value="1">KBANK</option>
                    <option value="2">SCB</option>
                    <option value="3">BUALUANG</option>
                </select>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-3 mb-1 mt-3">
                <a href="productdetail">
                    <img class="d-block w-100" src="https://rainflower.shop/wp-content/uploads/2018/07/%E0%B8%99%E0%B8%A1%E0%B9%80%E0%B8%A2%E0%B9%87%E0%B8%9902.png" alt="Third slide"><br>
                    <p align="center" style="color:black; font-size:20px;">Character name</p>
                    <p align="center" style="color:black; font-size:20px;">Price</p>
                </a>

            </div>
            <div class="col-md-3 mb-1 mt-3">
                <a href="#">
                    <img class="d-block w-100" src="https://rainflower.shop/wp-content/uploads/2018/07/%E0%B8%99%E0%B8%A1%E0%B9%80%E0%B8%A2%E0%B9%87%E0%B8%9902.png" alt="Third slide"><br>
                    <p align="center" style="color:black; font-size:20px;">Character name</p>
                    <p align="center" style="color:black; font-size:20px;">Price</p>
                </a>
            </div>
            <div class="col-md-3 mb-1 mt-3">
                <a href="#">
                    <img class="d-block w-100" src="https://rainflower.shop/wp-content/uploads/2018/07/%E0%B8%99%E0%B8%A1%E0%B9%80%E0%B8%A2%E0%B9%87%E0%B8%9902.png" alt="Third slide"><br>
                    <p align="center" style="color:black; font-size:20px;">Character name</p>
                    <p align="center" style="color:black; font-size:20px;">Price</p>
                </a>
            </div>
            <div class="col-md-3 mb-1 mt-3">
                <a href="#">
                    <img class="d-block w-100" src="https://rainflower.shop/wp-content/uploads/2018/07/%E0%B8%99%E0%B8%A1%E0%B9%80%E0%B8%A2%E0%B9%87%E0%B8%9902.png" alt="Third slide"><br>
                    <p align="center" style="color:black; font-size:20px;">Character name</p>
                    <p align="center" style="color:black; font-size:20px;">Price</p>
                </a>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3 mb-1 mt-3">
                <a href="#">
                    <img class="d-block w-100" src="https://rainflower.shop/wp-content/uploads/2018/07/%E0%B8%99%E0%B8%A1%E0%B9%80%E0%B8%A2%E0%B9%87%E0%B8%9902.png" alt="Third slide"><br>
                    <p align="center" style="color:black; font-size:20px;">Character name</p>
                    <p align="center" style="color:black; font-size:20px;">Price</p>
                </a>
            </div>
            <div class="col-md-3 mb-1 mt-3">
                <a href="#">
                    <img class="d-block w-100" src="https://rainflower.shop/wp-content/uploads/2018/07/%E0%B8%99%E0%B8%A1%E0%B9%80%E0%B8%A2%E0%B9%87%E0%B8%9902.png" alt="Third slide"><br>
                    <p align="center" style="color:black; font-size:20px;">Character name</p>
                    <p align="center" style="color:black; font-size:20px;">Price</p>
                </a>
            </div>
            <div class="col-md-3 mb-1 mt-3">
                <a href="#">
                    <img class="d-block w-100" src="https://rainflower.shop/wp-content/uploads/2018/07/%E0%B8%99%E0%B8%A1%E0%B9%80%E0%B8%A2%E0%B9%87%E0%B8%9902.png" alt="Third slide"><br>
                    <p align="center" style="color:black; font-size:20px;">Character name</p>
                    <p align="center" style="color:black; font-size:20px;">Price</p>
                </a>
            </div>
            <div class="col-md-3 mb-1 mt-3">
                <a href="#">
                    <img class="d-block w-100" src="https://rainflower.shop/wp-content/uploads/2018/07/%E0%B8%99%E0%B8%A1%E0%B9%80%E0%B8%A2%E0%B9%87%E0%B8%9902.png" alt="Third slide"><br>
                    <p align="center" style="color:black; font-size:20px;">Character name</p>
                    <p align="center" style="color:black; font-size:20px;">Price</p>
                </a>
            </div>
        </div>



        <div class="row mt-2">
            <div class="col-md-3 mb-1 mt-3">
                <a href="#">
                    <img class="d-block w-100" src="https://rainflower.shop/wp-content/uploads/2018/07/%E0%B8%99%E0%B8%A1%E0%B9%80%E0%B8%A2%E0%B9%87%E0%B8%9902.png" alt="Third slide"><br>
                    <p align="center" style="color:black; font-size:20px;">Character name</p>
                    <p align="center" style="color:black; font-size:20px;">Price</p>
                </a>
            </div>
            <div class="col-md-3 mb-1 mt-3">
                <a href="#">
                    <img class="d-block w-100" src="https://rainflower.shop/wp-content/uploads/2018/07/%E0%B8%99%E0%B8%A1%E0%B9%80%E0%B8%A2%E0%B9%87%E0%B8%9902.png" alt="Third slide"><br>
                    <p align="center" style="color:black; font-size:20px;">Character name</p>
                    <p align="center" style="color:black; font-size:20px;">Price</p>
                </a>
            </div>
            <div class="col-md-3 mb-1 mt-3">
                <a href="#">
                    <img class="d-block w-100" src="https://rainflower.shop/wp-content/uploads/2018/07/%E0%B8%99%E0%B8%A1%E0%B9%80%E0%B8%A2%E0%B9%87%E0%B8%9902.png" alt="Third slide"><br>
                    <p align="center" style="color:black; font-size:20px;">Character name</p>
                    <p align="center" style="color:black; font-size:20px;">Price</p>
                </a>
            </div>
            <div class="col-md-3 mb-1 mt-3">
                <a href="#">
                    <img class="d-block w-100" src="https://rainflower.shop/wp-content/uploads/2018/07/%E0%B8%99%E0%B8%A1%E0%B9%80%E0%B8%A2%E0%B9%87%E0%B8%9902.png" alt="Third slide"><br>
                    <p align="center" style="color:black; font-size:20px;">Character name</p>
                    <p align="center" style="color:black; font-size:20px;">Price</p>
                </a>
            </div>
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
