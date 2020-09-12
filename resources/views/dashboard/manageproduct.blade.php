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
       จัดการข้อมูลสินค้า
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
                    <li class="nav-item active">
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
            @if($productt !== 0)
            <div class="content">
                <div class="container-fluid">
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <p align="center" style="font-size:30px;">มีสินค้าทั้งหมด {{$product->total()}} รายการ</p>
                            <a href="{{route('product.create')}}"><button
                                    class="btn aqua-gradient">เพิ่มสินค้า</button></a>
                            @if(\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{\Session::get('success')}}</p>
                            </div>
                            @endif

                            <table class="table table-striped table-responsive-md btn-table">

                                <thead>
                                    <tr>
                                        <th scope="col">ลำดับที่</th>
                                        <th scope="col">รูปภาพ</th>
                                        <th scope="col">ชื่อสินค้า</th>

                                        <th scope="col">น้ำหนัก</th>
                                        <th scope="col">ขนาด</th>
                                        <th scope="col">ราคา</th>
                                        <th scope="col">สต็อก</th>
                                        <th scope="col">ประเภท</th>
                                        <th scope="col">Edit Image</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Show</th>
                                        <th scope="col">Delete</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($product as $p)
                                    <tr>
                                        <td>{{$p->id}}</th>
                                        <td><img src="../img/{{$p->picture}}" width="100" height="100"> </th>
                                        <td>{{$p->product_name}}</td>

                                        <td>{{$p->weight}} kg</td>
                                        <td>{{$p->size}} cm</td>
                                        <td>{{$p->price}}</td>
                                        @if($p->instock < 11) <td><mark
                                                style="background-color: yellow;">{{$p->instock}}</mark></td>
                                            @else
                                            <td>{{$p->instock}}</td>
                                            @endif
                                            @if($p->category_id === 1)
                                            <td>ตุ๊กตา</td>
                                            @elseif($p->category_id === 2)
                                            <td>หมอน</td>
                                            @else
                                            <td>พวงกุญแจ</td>
                                            @endif
                                            <td>
                                                <a href="{{action('ProductController@editImage', $p['id'])}}"><button
                                                        type="button"
                                                        class="btn btn-outline-info btn-sm m-0 waves-effect">Edit
                                                        Image</button></a>
                                            </td>
                                            <td>
                                                <a href="{{action('ProductController@edit', $p['id'])}}"><button
                                                        type="button"
                                                        class="btn btn-outline-primary btn-sm m-0 waves-effect">Edit</button></a>
                                            </td>
                                            <td>
                                                <a href="{{action('ProductController@show', $p['id'])}}"><button
                                                        type="button"
                                                        class="btn btn-outline-purple btn-sm m-0 waves-effect">Show</button></a>
                                            </td>

                                            <td>
                                                <form method="post" class="delete_form"
                                                    action="{{action('ProductController@destroy', $p['id'])}}">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit"
                                                        class="btn btn-outline-danger btn-sm m-0 waves-effect mt-3">Delete</button>
                                                </form>
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
                                {{$product->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if($productt === 0)
            <div class="content">
                <div class="container-fluid">
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <p align="center" style="font-size:30px;">ไม่พบสินค้า</p>
                            <a href="{{route('product.create')}}"><button
                                    class="btn aqua-gradient">เพิ่มสินค้า</button></a>


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
    <script type="text/javascript">
        $(document).ready(function(){
            $('.delete_form').on('submit', function(){
                if(confirm("Do you want to delete your product ?")){
                    return true;
                }
                else{
                    return false;
                }
            });
        });
    </script>
</body>

</html>
