@extends('layouts.master')
@section('title','Hi')

@section('content')
<html>

<body>
    <div class="row mt-5">
        <div class="col-md-6">
            <img class="rounded mx-auto d-block w-75" src="../img/{{$product->picture}}" width="100" height="auto">

        </div>
        <div class="col-md-6 ">
            <p align="center" style="color:black; font-size:40px;">{{$product->product_name}}</p>
            <p align="left" style="color:black; font-size:20px;">Product ID: {{$product->id}}</p>
            <p align="left" style="color:black; font-size:17px;">{{$product->detail_1}}</p>
            <p align="center" style="color:green; font-size:20px;">{{$product->price}} BAHT</p>
            <p align="left" style="color:black; font-size:16px;">in stock : {{$product->instock}}</p><br>
            <form action="{{action('ProductController@addToCart', ['id'=>$product->id])}}">


                <button
                        class="btn peach-gradient mt-5 btn-lg btn-block">Add to cart</button>
                </form>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12 mt-5">
            <p align="center" style="color:black; font-size:30px;">Product info</p><br><br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">น้ำหนัก</th>
                        <th scope="col">ขนาด</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <td>{{$product->weight}} kg</td>
                        <td>{{$product->size}} cm</td>

                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
@endsection
