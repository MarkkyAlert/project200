@extends('layouts.master')
@section('title','แก้ไขรูปภาพ')

@section('content')
<div class="row mt-5">
        <div class="col-md-12">
            <p align="center" style="font-size:30px;">แก้ไขรูปภาพ</p>
        </div>
    </div>
<form method="post" action="{{action('UpdatesController@update', $id)}}">{{csrf_field()}}
    <div class="row mt-5">
        <div class="col-md-12">





            <div class="form-group files">
                <label>Upload Your File </label>
                <input type="file" name="picture" class="form-control"  multiple="">
                <br>
            </div>
            <button class="btn peach-gradient mt-5 btn-lg btn-block">บันทึก</button>



        </div>
    </div>
    <input type="hidden" name="_method" value="PATCH" />
</form>
        @endsection
