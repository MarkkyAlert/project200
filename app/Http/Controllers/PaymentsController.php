<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\DB;
use App\Cart;
use App\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function index(){
        $products = Product::paginate(3);
        return view('categories',compact('products'));
    }

    public function showPaymentPage(){
        //$order_status = Order::where('order_id',1)->first();
        $payment_info = Session::get('payment_info');
        if($payment_info['delivery_status'] == 'on_hold'){
            return view('payment.paymentpage',[
                'payment_info'=>$payment_info,
                //'order_status'=>$order_status
                ]);
        }
        else{
            return redirect('categories');
        }
        Session::forget("cart");
        //Session::flush();
    }
    public function orderStatus(Request $request){
        $order_no = $request->get('order_no');
        $query = Order::where('order_no',$order_no)->first();
        //$orders = $query->addSelect('')
        return view('payment.showorderstatus',compact('query'));
    }


}
