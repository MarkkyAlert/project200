<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                <p align="center" style="font-size:30px;">มีสินค้าทั้งหมด {{$product->total()}} รายการ</p>
                <a href="{{route('product.create')}}"><button class="btn aqua-gradient">เพิ่มสินค้า</button></a>
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
                            <th scope="col">รายละเอียด</th>
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
                            <td>{{$p->detail_1}}</td>
                            <td>{{$p->weight}} kg</td>
                            <td>{{$p->size}} cm</td>
                            <td>{{$p->price}}</td>
                            <td>{{$p->instock}}</td>
                            @if($p->category_id === 1)
                            <td>ตุ๊กตา</td>
                            @elseif($p->category_id === 2)
                            <td>หมอน</td>
                            @else
                            <td>พวงกุญแจ</td>
                            @endif
                            <td>
                                <a href="{{action('ProductController@editImage', $p['id'])}}"><button type="button"
                                        class="btn btn-outline-info btn-sm m-0 waves-effect">Edit Image</button></a>
                            </td>
                            <td>
                                <a href="{{action('ProductController@edit', $p['id'])}}"><button type="button"
                                        class="btn btn-outline-primary btn-sm m-0 waves-effect">Edit</button></a>
                            </td>
                            <td>
                                <a href="{{action('ProductController@show', $p['id'])}}"><button type="button"
                                        class="btn btn-outline-purple btn-sm m-0 waves-effect">Show</button></a>
                            </td>

                            <td>
                                <form method="post" class="delete_form"
                                    action="{{action('ProductController@destroy', $p['id'])}}">{{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit"
                                        class="btn btn-outline-danger btn-sm m-0 waves-effect">Delete</button>
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
    @include('partials.footer')

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
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
