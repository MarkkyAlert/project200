@extends('layouts.master')
@section('title','สินค้า')

@section('content')
<div class="row mt-5">
        <div class="col-md-6">
                {{--{{Form::select('category_id', App\Category::all()->pluck('name','id'), null, ['placeholder'=> 'ประเภทสินค้า', 'class'=>'browser-default custom-select'])}}<br>--}}
            <ul class="list-group list-group-horizontal-sm">
                @foreach($categoryAll as $c)
                <a href="{{route('categories.show', ['id'=>$c->id])}}" class="list-group-item">{{$c->name}}</a>
                @endforeach
            </ul>
        </div>



</div>
<div class="row mt-5">
        <div class="col-md-12">
        @foreach($category as $p)
        @if($p->category_id === 1)
        <p align="left" style="font-size:35px;">ตุ๊กตา</p>
        @break
        @elseif($p->category_id === 2)
        <p align="left" style="font-size:35px;">หมอน</p>
        @break
        @else
        <p align="left" style="font-size:35px;">พวงกุญแจ</p>
        @break
        @endif
        @endforeach

        </div>
</div>
<div class="row mt-5">
    @foreach($category as $p)
    <div class="col-md-3 mb-1 mt-3">
        <a href="{{action('ProductController@show', $p->id)}}">
            <img class="d-block w-100" src="../img/{{$p->picture}}" alt="Third slide"><br>
            <p align="center" style="color:black; font-size:20px;">{{$p->product_name}}</p>
            <p align="center" style="color:red; font-size:20px;">{{$p->price}} ฿</p>
        </a>

    </div>
    @endforeach

</div>
{{$category->links()}}
@endsection
