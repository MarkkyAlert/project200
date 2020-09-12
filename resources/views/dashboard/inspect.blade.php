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
                            <th scope="col">ลำดับที่</th>
                            <th scope="col">รูปภาพ</th>
                            <th scope="col">ชื่อ</th>
                            <th scope="col">เบอร์ติดต่อ</th>

                            <th scope="col">ยอดโอน</th>
                            <th scope="col">ธนาคาร</th>
                            <th scope="col">วันที่</th>
                            <th scope="col">เวลา</th>

                        </tr>
                    </thead>

                    <tbody>

                        <tr>

                            <td>{{$inspect->id}}</th>
                            <td><img src="../storage/img/{{$inspect->picture}}" width="100" height="100"> </th>
                            <td>{{$inspect->name}}</td>
                            <td>{{$inspect->cellphone}}</td>

                            <td>{{$inspect->money}} </td>
                            <td>{{$inspect->bank}}</td>
                            <td>{{$inspect->date}}</td>
                            <td>{{$inspect->time}}</td>



                        </tr>


                    </tbody>

                </table>


    </div>
</div>

@endsection

