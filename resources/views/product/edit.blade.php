@extends('layouts.master')
@section('title','แก้ไขสินค้า')

@section('content')
<div class="row mt-5">
    <div class="col-md-12">
        <p align="center" style="font-size:30px;">แก้ไขข้อมูลสินค้า</p>
    </div>
</div>

<form method="post" action="{{action('ProductController@update', $id)}}">{{csrf_field()}}
    <div class="row mt-5">

        <div class="col-md-12 ">

            <label for="exampleForm2">Product Name</label>
            <input type="text" id="exampleForm2" class="form-control" name="product_name"
                value="{{$product->product_name}}"><br>
            <p align="left" style="color:black; font-size:16px;">Product ID</p>
            <input type="text" id="exampleForm2" class="form-control" value="{{$product->id}}" readonly>
            <div class="md-form">

                <textarea id="textarea-char-counter" name="detail_1" class="form-control md-textarea" length="120"
                    rows="3">{{$product->detail_1}}</textarea>
                <label for="textarea-char-counter">Detail</label>
            </div>
            <!-- Default input -->
            <label for="exampleForm2">Category</label>
            {{Form::select('category_id', App\Category::all()->pluck('name','id'), null, ['placeholder'=> 'ประเภทสินค้า', 'class'=>'browser-default custom-select'])}}<br><br>
            <label for="exampleForm2">Price</label>
            <input type="text" id="exampleForm2" name="price" class="form-control" value="{{$product->price}}"><br>


            <label for="exampleForm2">In stock</label>
            <input type="text" id="exampleForm2" name="instock" readonly class="form-control"
                value="{{$product->instock}}"><br>
            <div class="def-number-input number-input safari_only">

                add product <input class="quantity" min="0" name="add_product" value="1" type="number">

            </div>

            <button type="submit" class="btn peach-gradient mt-5 btn-lg btn-block">บันทึก</button>
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

                        <td><input type="text" id="exampleForm2" name="weight" class="form-control"
                                value="{{$product->weight}}"> </td>
                        <td><input type="text" id="exampleForm2" name="size" class="form-control"
                                value="{{$product->size}}"> </td>

                    </tr>

                </tbody>
            </table>

        </div>
    </div>
    <input type="hidden" name="_method" value="PATCH" />
</form>

@endsection
