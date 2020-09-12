<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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

            'name'=>'required',
            'cellphone'=>'required',
            'order_no'=>'required',
            'money'=>'required|numeric',
            'bank'=>'required',
            'date'=>'required',
            'time'=>'required',

            'picture'=>'image|mimes:jpeg,jpg,png',

        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'กรุณากรอกชื่อ',
            'cellphone.required'=>'กรุณากรอกเบอร์ติดต่อ',
            'order_no.required'=>'กรุณากรอกหมายเลขสินค้า',
            'money.required'=>'กรุณากรอกจำนวนเงิน',
            'money.numeric'=>'กรุณากรอกจำนวนเงินที่เป็นตัวเลขเท่านั้น',
            'bank.required'=>'กรุณาเลือกธนาคาร',
            'date.required'=>'กรุณาเลือกวันที่โอน',
            'time.required'=>'กรุณาเลือกเวลาที่โอน',
            'picture.image'=>'กรุณาเลือกไฟล์ที่เป็นรูปภาพเท่านั้น',
            'picture.mimes'=>'กรุณาเลือกไฟล์ที่มีนามสกุล jpeg, jpg, png',


        ];
    }
}
