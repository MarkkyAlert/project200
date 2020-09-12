<!--
=========================================================
 Material Dashboard - v2.1.1
=========================================================

 Product Page: https://www.creative-tim.com/product/material-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/material-dashboard/blob/master/LICENSE.md)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8" />
     <link rel="apple-touch-i
     .con" sizes="76x76" href="../assets/img/apple-icon.png">
     <link rel="icon" type="image/png" href="../assets/img/favicon.png">
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     <title>
         Dashboard
     </title>
     <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
         name='viewport' />
     <!--     Fonts and icons     -->
     <link rel="stylesheet" type="text/css"
         href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
     <!-- CSS Files -->
     <link href="css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
     <!-- CSS Just for demo purpose, don't include it in your project -->
     <link href="demo/demo.css" rel="stylesheet" />
     <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
     <link rel="stylesheet" href="css/style.css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
     <style>
         body {
             font-family: 'Kanit', sans-serif;
         }
     </style>
 </head>
<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
            <!--
         Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

         Tip 2: you can also add an image using data-image tag
     -->
            <div class="logo">
                <a href="#" class="simple-text logo-normal">
                    Dashboard
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active  ">
                        <a class="nav-link" href="{{route('dashboard.dashboard')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('dashboard.manageproduct')}}">
                            <i class="material-icons">person</i>
                            <p>จัดการข้อมูลสินค้า</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('dashboard.order')}}">
                            <i class="material-icons">content_paste</i>
                            <p>ตรวจสอบการสั่งซื้อ</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('home')}}">
                            <i class="material-icons">content_paste</i>
                            <p>HOME</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#pablo">Dashboard</a>
                    </div>

                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-warning card-header-icon">
                                    <div class="card-icon">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <p class="card-category">จำนวนสมาชิกทั้งหมด</p>
                                    <h3 class="card-title">{{$userCount}}
                                        <small>คน</small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons">store</i>
                                    </div>
                                    <p class="card-category">สินค้าทั้งหมด</p>
                                    <h3 class="card-title">{{$product->total()}} <small>ชิ้น</small></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-danger card-header-icon">
                                    <div class="card-icon">
                                        <i class="fas fa-dog"></i>
                                    </div>
                                    <p class="card-category">ตุ๊กตา</p>
                                    <h3 class="card-title">{{$doll}} <small>ชิ้น</small></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-primary card-header-icon">
                                    <div class="card-icon">
                                        <i class="fas fa-dog"></i>
                                    </div>
                                    <p class="card-category">หมอน</p>
                                    <h3 class="card-title">{{$pillow}} <small>ชิ้น</small></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <i class="fas fa-dog"></i>
                                    </div>
                                    <p class="card-category">พวงกุญแจ</p>
                                    <h3 class="card-title">{{$keychain}} <small>ชิ้น</small></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-dark  card-header-icon">
                                    <div class="card-icon">
                                        <i class="fas fa-user-circle"></i>
                                    </div>
                                    <p class="card-category">จำนวนคนที่สั่งซื้อ</p>
                                    <h3 class="card-title">{{$userOrder}} <small>คน</small></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-dark  card-header-icon">
                                    <div class="card-icon">
                                        <i class="fas fa-user-circle"></i>
                                    </div>
                                    <p class="card-category">โอนเงินแล้ว</p>
                                    <h3 class="card-title"> {{$userPaid}}<small>คน</small></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-dark  card-header-icon">
                                    <div class="card-icon">
                                        <i class="fas fa-user-circle"></i>
                                    </div>
                                    <p class="card-category">จัดส่งแล้ว</p>
                                    <h3 class="card-title">{{$userDelivered}} <small>คน</small></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

   <!-- JQuery -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <!-- Bootstrap tooltips -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
   </script>
   <!-- Bootstrap core JavaScript -->
   <script type="text/javascript"
       src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <!-- MDB core JavaScript -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js">
   </script>
</body>

</html>
