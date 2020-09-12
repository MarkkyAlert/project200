@extends('layouts.master')
@section('title','Hi')

@section('content')


<div class="container">
    <br><br>
    <h1 align="center">AutoComplete Laravel</h1>
    <br>
    <div class="form-group">
        <input type="text" name="province_name" id="province_name" class="form-control input-lg"
            placeholder="ป้อนชื่อจังหวัด" />
        <div id="provinceList">
        </div>
    </div>
    {{ csrf_field() }}
</div>
<script type="text/javascript">
   $(document).ready(function(){
        $('#province_name').keyup(function(){
            var query = $(this).val();
            if(query != '') {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                url:"{{ route('autocomplete.show') }}",
                method:"POST",
                data:{query:query, _token:_token},
                success:function(data){
                    $('#provinceList').fadeIn();
                    $('#provinceList').html(data);
                }
                 });
            }

        });
    });
    $(document).on('click', 'li', function(){
        $('#provinceList').fadeOut();
        $('#province_name').val($(this).text());
    });
</script>
@endsection
