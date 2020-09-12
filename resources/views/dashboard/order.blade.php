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
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        ตรวจสอบการสั่งซื้อ
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard.dashboard')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard.manageproduct')}}">
                            <i class="material-icons">person</i>
                            <p>จัดการข้อมูลสินค้า</p>
                        </a>
                    </li>
                    <li class="nav-item  active">
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
            @if($orderss !== 0)
            <div class="content">
                <div class="container-fluid">
                    <div class="row mt-5">

                        <div class="col-md-12">
                            <p align="center" style="font-size:30px;">รายการผู้ที่สั่งซื้อ</p>
                        </div>


                        <table class="table table-striped table-responsive-md btn-table mt-5">

                            <thead>
                                <tr>
                                    <th scope="col">ลำดับที่</th>
                                    <th scope="col">หมายเลขคำสั่งซื้อ</th>
                                    <th scope="col">วันที่</th>
                                    <th scope="col">ราคา</th>
                                    <th scope="col">payment_status</th>
                                    <th scope="col">delivery_status</th>
                                    <th scope="col">ดูข้อมูลการโอนเงิน</th>
                                    <th scope="col">ดูสินค้า</th>
                                    <th scope="col">ดูที่อยู่</th>
                                    <th scope="col">จัดส่งแล้ว</th>



                                </tr>
                            </thead>

                            <tbody>
                                @foreach($orders as $order)
                                <tr>
                                    <td>
                                        <p align="center">{{$order->order_id}}</p>
                                        </th>
                                    <td>{{$order->order_no}}</th>

                                    <td>{{$order->date}}</td>
                                    <td>{{$order->price}} </td>
                                    @if($order->payment_status === 'paid')
                                    <td>
                                        <p align="center"><mark
                                                style="background-color: #ff8080;">{{$order->payment_status}} </mark>
                                        </p>
                                    </td>
                                    @else
                                    <td>
                                        <p align="center">{{$order->payment_status}}</p>
                                    </td>
                                    @endif
                                    @if($order->delivery_status === 'delivered')
                                    <td>
                                        <p align="center"><mark
                                                style="background-color: #80ff00;">{{$order->delivery_status}} </mark>
                                        </p>
                                    </td>
                                    @else
                                    <td>
                                        <p align="center">{{$order->delivery_status}} </p>
                                    </td>
                                    @endif
                                    @if($order->payment_status === 'on_hold')
                                    <td>

                                       <button
                                                type="button" disabled
                                                class="btn btn-outline-purple btn-sm m-0 waves-effect">ข้อมูลการโอนเงิน</button></a>
                                    </td>
                                    @else
                                    <td>

                                            <a href="{{action('TransactionsController@inspectOrder', $order->order_no)}}"><button
                                                    type="button"
                                                    class="btn btn-outline-purple btn-sm m-0 waves-effect">ข้อมูลการโอนเงิน</button></a>
                                        </td>
                                    @endif
                                    <td>
                                        <a href="{{action('TransactionsController@showOrder', $order->order_no)}}"><button
                                                type="button"
                                                class="btn btn-outline-primary btn-sm m-0 waves-effect">ดูสินค้า</button></a>
                                    </td>
                                    <td>
                                        <a href="{{action('TransactionsController@showAddress', $order->order_no)}}"><button
                                                id="your_submit_id" type="button"
                                                class="btn btn-outline-brown btn-sm m-0 waves-effect">ดูที่อยู่</button></a>
                                    </td>
                                    <td>
                                        <a href="{{action('ProductController@delivered', $order->order_no)}}"><button
                                                id="your_submit_id" type="button"
                                                class="btn btn-outline-green btn-sm m-0 waves-effect">จัดส่งแล้ว</button></a>
                                    </td>



                                </tr>
                                @endforeach

                            </tbody>

                        </table>


                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="flex-center">
                            {{$orders->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if($orderss === 0)
        <div class="content">
            <div class="container-fluid">
                <div class="row mt-5">

                    <div class="col-md-12">
                        <p align="center" style="font-size:30px;">ไม่มีรายการผู้ที่สั่งซื้อ</p>
                    </div>




                </div>
            </div>

        </div>
    </div>
    @endif
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
