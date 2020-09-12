@extends('layouts.master')
@section('title','Hi')

@section('content')
<div class="row mt-5">
    <div class="col-md-6">
        <img class="rounded mx-auto d-block w-75" src="https://rainflower.shop/wp-content/uploads/2018/07/%E0%B8%99%E0%B8%A1%E0%B9%80%E0%B8%A2%E0%B9%87%E0%B8%9902.png" alt="Third slide">
    </div>
    <div class="col-md-6 ">
        <!-- Default input -->
        <label for="exampleForm2">Product Name</label>
    <input type="text" id="exampleForm2" class="form-control">
        <p align="left" style="color:black; font-size:20px;">Product Id</p>
        <div class="md-form">
            <textarea id="textarea-char-counter" class="form-control md-textarea" length="120" rows="3"></textarea>
            <label for="textarea-char-counter">Detail</label>
        </div>
        <!-- Default input -->
        <label for="exampleForm2">Price</label>
        <input type="text" id="exampleForm2" class="form-control">
        <p align="left" style="color:black; font-size:16px;">in stock : 10</p>

        <div class="def-number-input number-input safari_only">

            add product <input class="quantity" min="0" name="quantity" value="1" type="number">

        </div>

        <a href="incart"><button class="btn peach-gradient mt-5 btn-lg btn-block">บันทึก</button></a>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12 mt-5">
        <p align="center" style="color:black; font-size:40px;">รายละเอียด</p><br><br>
        <div class="md-form">
            <textarea id="textarea-char-counter" class="form-control md-textarea" length="120" rows="3"></textarea>
            <label for="textarea-char-counter">Detail</label>
        </div>
    </div>
</div>

@endsection

