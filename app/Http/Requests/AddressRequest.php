<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname'=>'required',
            'lastname'=>'required',
            'cellphone'=>'required',
            'house_no'=>'required',
            'room'=>'required',
            'building_name'=>'required',
            'alley'=>'required',
            'road'=>'required',
            'district'=>'required',
            'subdistrict'=>'required',
            'province'=>'required',
            'zip_code'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'firstname.required'=>'กรุณากรอกชื่อ',
            'lastname.required'=>'กรุณากรอกนามสกุล',
            'cellphone.required'=>'กรุณากรอกเบอร์ติดต่อ',
            'house_no.required'=>'กรุณากรอกบ้านเลขที่',
            'room.required'=>'กรุณากรอกหมายเลขห้อง',
            'building_name.required'=>'กรุณากรอกชื่ออาคาร',
            'alley.required'=>'กรุณากรอกซอย',
            'road.required'=>'กรุณากรอกถนน',
            'district.required'=>'กรุณากรอกอำเภอ',
            'subdistrict.required'=>'กรุณาตำบล',
            'province.required'=>'กรุณากรอกจังหวัด',
            'zip_code.required'=>'กรุณากรอกรหัสไปรษณีย์',

        ];
    }
}
