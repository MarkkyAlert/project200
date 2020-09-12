<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Order;
use App\User;
use App\PostAddress;
use App\Transaction;
use App\OrderItem;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\PaymentRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class TransactionsController extends Controller
{
    public function index(){
        return view('transactions.index');
    }

    public function insertTransaction(PaymentRequest $request){
        $trans = new Transaction();

        $trans->name = $request->name;
        $trans->cellphone = $request->cellphone;
        $trans->order_no = $request->order_no;
        $trans->money = $request->money;
        $trans->bank = $request->bank;
        $trans->date = $request->date;
        $trans->time = $request->time;
        if($request->hasFile('picture')){
            $newFileName = uniqid(). '.' .$request->picture->extension();
            $request->picture->storeAs('img',$newFileName,'public');
            $trans->picture = $newFileName;
        }



            $update = DB::table('orders')
              ->where('order_no', $trans->order_no)
              ->update(['payment_status' => 'paid']);
              $trans->save();
        return redirect('home')->with('success', 'แจ้งชำระเงินเรียบร้อย');
    }

    public function inspectOrder($order_no){

        $inspect = Transaction::where('order_no',$order_no)->first();



        return view('dashboard.inspect', compact('inspect'));
    }

    public function showOrder($order_no){
        $show1 = DB::table('order_items')->where('order_no', '=', $order_no)->get();

        return view('dashboard.showorder',compact('show1'));
    }

    public function showAddress($order_no){

        $show2 = Order::where('order_no',$order_no)->first();
        return view('dashboard.showaddress',compact('show2'));
    }



}
