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
    <title>หน้าแรก</title>
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
        {{--{{auth()->user()->username}}--}}
        @if(\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{\Session::get('success')}}</p>
                            </div>
                            @endif

        <div class="row">
            <!--Carousel Wrapper-->
            <div id="carousel-example-1z" class="carousel slide carousel-fade mt-5" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner animated bounceInDown" role="listbox">
                    <!--First slide-->
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://rainflower.shop/wp-content/uploads/2019/05/AdsBack-to-school1200-01-1.jpg" alt="First slide">
                    </div>
                    <!--/First slide-->
                    <!--Second slide-->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://image.makewebeasy.net/makeweb/0/6SxrA0IuI/Default%20Data/155.jpg" alt="Second slide">
                    </div>
                    <!--/Second slide-->
                    <!--Third slide-->
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://rainflower.shop/wp-content/uploads/2019/03/adsweb30.png" alt="Third slide">
                    </div>
                    <!--/Third slide-->
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->

        </div>


    </div>
    <!-- Footer -->
    <footer class="page-footer font-small mdb-color #fdd835 yellow darken-1 pt-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-1 mt-3">
                    <p align="center" style="color:black; font-size:60px;">Our Characters</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-1 mt-3">
                    <img class="d-block w-100" src="https://rainflower.shop/wp-content/uploads/2018/07/bobby.png" alt="Third slide">
                    <br><p align="center" style="color:black; font-size:20px;">Bobby</p>
                </div>
                <div class="col-md-3 mb-1 mt-3">
                    <img class="d-block w-100" src="https://rainflower.shop/wp-content/uploads/2018/06/cc.png" alt="Third slide">
                    <br><p align="center" style="color:black; font-size:20px;">Chic Chic</p>
                </div>
                <div class="col-md-3 mb-1 mt-3">
                    <img class="d-block w-100" src="https://rainflower.shop/wp-content/uploads/2018/07/chocchip.png" alt="Third slide">
                    <br><p align="center" style="color:black; font-size:20px;">Chocchip</p>
                </div>
                <div class="col-md-3 mb-1 mt-3">
                    <img class="d-block w-100" src="https://rainflower.shop/wp-content/uploads/2018/07/lilly.png" alt="Third slide">
                    <br><p align="center" style="color:black; font-size:20px;">Lilly</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 mb-1 mt-3">
                    <img class="d-block w-100" src="https://rainflower.shop/wp-content/uploads/2018/07/milkchake.png" alt="Third slide">
                    <br><p align="center" style="color:black; font-size:20px;">Milkshake</p>
                </div>
                <div class="col-md-3 mb-1 mt-3">
                    <img class="d-block w-100" src="https://rainflower.shop/wp-content/uploads/2018/07/mocca.png" alt="Third slide">
                    <br><p align="center" style="color:black; font-size:20px;">Mocca</p>
                </div>
                <div class="col-md-3 mb-1 mt-3">
                    <img class="d-block w-100" src="https://rainflower.shop/wp-content/uploads/2018/07/neko.png" alt="Third slide">
                    <br><p align="center" style="color:black; font-size:20px;">Moji</p>
                </div>
                <div class="col-md-3 mb-1 mt-3">
                    <img class="d-block w-100" src="https://rainflower.shop/wp-content/uploads/2018/06/c7%E0%B8%99%E0%B8%A1.png" alt="Third slide">
                    <br><p align="center" style="color:black; font-size:20px;">Nom yen</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 mb-4">
                <a href="{{route('categories.index')}}"><p align="center"><button type="button" class="btn btn-pink">More</button></p></a>
                </div>
            </div>
        </div>

    </footer>
    <!-- Footer -->
    @include('partials.footer')

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
