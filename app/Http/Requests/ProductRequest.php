<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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

            'product_name'=>'required',
            'detail_1'=>'required',
            'category_id'=>'required',
            'price'=>'required|numeric',
            'weight'=>'required|numeric',
            'size'=>'required|numeric',
            'picture'=>'required',

        ];
    }
    public function messages()
    {
        return [
            'product_name.required'=>'กรุณากรอกชื่อสินค้า',
            'detail_1.required'=>'กรุณากรอกข้อมูสินค้า',
            'category_id.required'=>'กรุณาระบุประเภทสินค้า',
            'price.required'=>'กรุณากรอกราคาสินค้า',
            'price.numeric'=>'กรุณากรอกราคาสินค้าที่เป็นตัวเลขเท่านั้น',
            'weight.required'=>'กรุณากรอกน้ำหนักสินค้า',
            'weight.numeric'=>'กรุณากรอกน้ำหนักสินค้าที่เป็นตัวเลขเท่านั้น',
            'size.required'=>'กรุณากรอกขนาดสินค้า',
            'size.numeric'=>'กรุณากรอกขนาดสินค้าที่เป็นตัวเลขเท่านั้น',
            'picture.required'=>'กรุณากเลือกรูปภาพ',


        ];
    }
}
