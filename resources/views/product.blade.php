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
        .dropdown:hover>.dropdown-menu{
            display:block;
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
                @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{\Session::get('success')}}</p>
                </div>
                @endif

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ลำดับที่</th>
                            <th scope="col">ชื่อสินค้า</th>
                            <th scope="col">รายละเอียด</th>
                            <th scope="col">ราคา</th>
                            <th scope="col">สต็อก</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product as $p)
                        <tr>
                        <th scope="row">{{$p->id}}</th>
                            <td>{{$p->product_name}}</td>
                            <td>{{$p->detail}}</td>
                            <td>{{$p->price}}</td>
                            <td>{{$p->instock}}</td>
                        <td><a href="{{action('ProductController@edit', $p['id'])}}" class="btn btn-primary">Edit</a></td>
                            <td>
                            <form method="post" class="delete_form" action="{{action('ProductController@destroy', $p['id'])}}">{{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger ">Delete</button>
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
