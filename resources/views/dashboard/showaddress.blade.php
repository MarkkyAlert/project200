@extends('layouts.master')
@section('title','Hi')

@section('content')
<div class="row mt-5">
        <div class="col-md-12">
            <p align="center" style="font-size:30px;">รายละเอียดที่อยู่</p>
        </div>
    </div>
<div class="row mt-5">
    <div class="col-md-12">
            <table class="table table-striped table-responsive-md btn-table">

                    <thead>
                        <tr>

                            <th scope="col">ชื่อ</th>
                            <th scope="col">นามสกุล</th>
                            <th scope="col">ที่อยู่</th>

                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                        <td>{{$show2->firstname}}</th>
                            <td>{{$show2->lastname}} </th>
                            <td><mark style="background-color: yellow;">บ้านเลขที่</mark> {{$show2->house_no}} <mark style="background-color: yellow;">ห้อง</mark> {{$show2->room}} <mark style="background-color: yellow;">อาคาร</mark> {{$show2->building_name}} <mark style="background-color: yellow;">ถนน</mark>{{$show2->road}} <mark style="background-color: yellow;">ซอย</mark>{{$show2->alley}} <mark style="background-color: yellow;">แขวง/ตำบล</mark> {{$show2->subdistrict}} <mark style="background-color: yellow;">เขต/อำเภอ</mark> {{$show2->district}} <mark style="background-color: yellow;">จังหวัด</mark> {{$show2->province}} <mark style="background-color: yellow;">รหัสไปรษณีย์</mark>{{$show2->zip_code}}</td>

                        </tr>


                    </tbody>

                </table>

    </div>
</div>

@endsection
