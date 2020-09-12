@extends('layouts.master')
@section('title','Hi')

@section('content')
<div class="row mt-5">
    <div class="col-md-6">
        <img class="rounded mx-auto d-block w-75" src="https://rainflower.shop/wp-content/uploads/2018/07/%E0%B8%99%E0%B8%A1%E0%B9%80%E0%B8%A2%E0%B9%87%E0%B8%9902.png" alt="Third slide">
    </div>
    <div class="col-md-6 ">
        <p align="center" style="color:black; font-size:40px;">Product Name</p>
        <p align="left" style="color:black; font-size:20px;">Product Id</p>
        <p align="left" style="color:black; font-size:17px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nulla reiciendis inventore minus consectetur veniam possimus laudantium hic aperiam quaerat dicta fugit atque debitis, eaque placeat porro harum id exercitationem?</p>
        <p align="center" style="color:green; font-size:20px;">20 BAHT</p>
        <p align="left" style="color:black; font-size:16px;">in stock : 10</p>

        <div class="def-number-input number-input safari_only">

            <input class="quantity" min="1" name="quantity" value="1" type="number">

        </div>

        <a href="incart"><button class="btn peach-gradient mt-5 btn-lg btn-block">Add to cart</button></a>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12 mt-5">
        <p align="center" style="color:black; font-size:40px;">รายละเอียด</p><br><br>
        <p align="left" style="color:black; font-size:18px;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo in, at corrupti minus veritatis ea omnis! Iusto eos nesciunt temporibus ea, doloribus inventore quidem autem necessitatibus quas velit nihil eum.Lorem Lorem Lorem Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis facere nesciunt eius dolore voluptatum dolorum vel magni debitis sequi, beatae quasi nisi, expedita ab atque modi, laborum odit neque et. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, iste earum iusto ipsa ipsam unde, necessitatibus repellat culpa saepe dignissimos illum temporibus atque vero nihil impedit deleniti dolorum similique porro?</p>
    </div>
</div>
@endsection

