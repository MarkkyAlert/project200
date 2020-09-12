@extends('layouts.master')
@section('title','ตะกร้าของฉัน')

@section('content')
<div class="row mt-5">
    <div class="col-md-12">
        <p align="center" style="font-size:40px;">Cart</p>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">รูปภาพ</th>
                    <th scope="col">รายการสินค้าที่สั่งซื้อ</th>
                    <th scope="col">ประเภท</th>
                    <th scope="col">ราคา/ชิ้น</th>
                    <th scope="col">จำนวน</th>
                    <th scope="col">รวมทั้งหมด</th>
                    <th scope="col">Delete</th>


                </tr>
            </thead>
            <tbody>
                @foreach($cartItems->items as $item)
                <tr>

                    <th scope="row">{{$item['data']['id']}}</th>
                    <td><img src="../img/{{$item['data']['picture']}}" width="100" height="100"></td>
                    <td>{{$item['data']['product_name']}}</td>
                    @if($item['data']['category_id'] === 1)
                    <td>ตุ๊กตา</td>
                    @elseif($item['data']['category_id'] === 2)
                    <td>หมอน</td>
                    @else
                    <td>พวงกุญแจ</td>
                    @endif

                    <td>{{$item['data']['price']}} ฿</td>


                    <td class="cart_quantity">
                        <div class="cart_quantity_button">
                            <a class="cart_quantity_up"
                                href="{{route('decreaseSingleProduct',['id'=>$item['data']['id']] )}}"> <i
                                    class="fas fa-minus-circle"></i> </a><input class="cart_quantity_input" type="text"
                                name="quantity" value="{{$item['quantity']}}" autocomplete="off" size="2"><a
                                class="cart_quantity_up"
                                href="{{route('increaseSingleProduct',['id'=>$item['data']['id']] )}}"> <i
                                    class="fas fa-plus-circle"></i> </a></div>
                    </td>
                    <td>{{$item['totalSinglePrice']}}.00 ฿</td>
                    <td>
                                <form method="get" class="delete_form"
                                    action="{{route('product.deleteitemfromcart',['id'=>$item['data']['id']])}}">{{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit"
                                        class="btn btn-outline-danger btn-sm m-0 waves-effect">Delete</button>
                                </form>
                    </td>


                </tr>
                @endforeach
                <tr>
                    <th scope="row">
                        <strong>

                            <p style="color:red;">จำนวนทั้งหมด</p>
                            <p style="color:red;">รวมทั้งหมด (+EMS 60฿) </p>
                        </strong>
                    </th>


                    <td>

                        <p style="color:red;">{{$cartItems->totalQuantity}}</p>
                        @if($cartItems->totalPrice !== 0)
                        <p style="color:red;">{{$cartItems->totalPrice+60}}.00 ฿</p>
                        @else
                        <p style="color:red;">{{$cartItems->totalPrice}}.00 ฿</p>
                        @endif

                    </td>
                </tr>

            </tbody>
        </table>


    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <a href="{{route('product.checkoutproducts')}}">
            <p align="center"><button type="button" class="btn btn-pink">Proceed to Checkout</button></p>
        </a>
    </div>
</div>

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
@endsection
