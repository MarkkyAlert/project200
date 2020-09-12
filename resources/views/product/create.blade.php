@extends('layouts.master')
@section('title','เพิ่มสินค้า')

@section('content')

<body>
    <div class="row mt-5">
        <div class="col-md-12">
            <p align="center" style="font-size:30px;">เพิ่มสินค้า</p>
        </div>
    </div>

    <form method="post" action="{{action('ProductController@store')}}"  >{{csrf_field()}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row mt-5">
            <div class="col-md-6">





                <div class="form-group files">
                    <label>Upload Your File </label>
                    <input type="file" name="picture" class="form-control" multiple="">
                    <br>
                </div>



            </div>
            <div class="col-md-6 ">

                <label for="exampleForm2">Product Name</label>
                <input type="text" id="exampleForm2" class="form-control" name="product_name"><br>


                <div class="md-form">

                    <textarea id="textarea-char-counter" name="detail_1" class="form-control md-textarea" length="120"
                        rows="3"></textarea>
                    <label for="textarea-char-counter">Detail</label>
                </div>
                <label for="exampleForm2">Category</label>
                {{Form::select('category_id', App\Category::all()->pluck('name','id'), null, ['placeholder'=> 'ประเภทสินค้า', 'class'=>'browser-default custom-select'])}}<br>
                <!-- Default input -->
                <label for="exampleForm2">Price</label>
                <input type="text" id="exampleForm2" name="price" class="form-control"><br>

                <label for="exampleForm2">In stock</label>
                <input type="text" id="exampleForm2" name="instock" readonly value="0" class="form-control"><br>
                <div class="def-number-input number-input safari_only">

                    add product <input class="quantity" min="0" name="add_product" value="1" type="number">

                </div>

                <button class="btn peach-gradient mt-5 btn-lg btn-block">บันทึก</button>
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

                            <td><input type="text" id="exampleForm2" name="weight" class="form-control"> </td>
                            <td><input type="text" id="exampleForm2" name="size" class="form-control"> </td>

                        </tr>

                    </tbody>
                </table>

            </div>
        </div>

    </form>
    <script>
        $('.file-upload').file_upload();
    </script>
</body>


@endsection
