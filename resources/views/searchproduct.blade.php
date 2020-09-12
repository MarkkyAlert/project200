@extends('layouts.master')
@section('title','Hi')

@section('content')
<div class="row mt-5">
    <div class="col-md-12">
    <p align="center" style="font-size:30px;">ค้นหาสินค้า</p>
    <p align="center" style="font-size:17px;">Product ID</p>
    <input class="form-control" type="text" placeholder="">
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12">
    <a href="manageproduct"><button type="button" class="btn purple-gradient btn-lg btn-block">ค้นหา</button></a>
    </div>
</div>
@endsection
