@extends('layouts.master')
@section('title','Hi')

@section('content')
<div class="row mt-5">
        <div class="col-md-12">
            <p align="center" style="font-size:30px;">สินค้าที่ต้องจัดส่ง</p>
        </div>
    </div>
<div class="row mt-5">
    <div class="col-md-12">
            <table class="table table-striped table-responsive-md btn-table">

                    <thead>
                        <tr>

                            <th scope="col">รูปภาพ</th>
                            <th scope="col">ชื่อสินค้า</th>
                            <th scope="col">จำนวน</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach($show1 as $s)
                        <tr>
                            <td><img src="../img/{{$s->picture}}" width="100" height="100"></th>
                            <td>{{$s->item_name}} </th>
                            <td>{{$s->item_quantity}}</td>

                        </tr>
                        @endforeach

                    </tbody>

                </table>

    </div>
</div>

@endsection
