<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Order;
use App\User;
use App\PostAddress;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\AddressRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class AddressesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        /*$user_id = Auth::user()->id;
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $cellphone = $request->input('cellphone');
        $house_no = $request->input('house_no');
        $room = $request->input('room');
        $building_name = $request->input('building_name');
        $alley = $request->input('alley');
        $road = $request->input('road');
        $district = $request->input('district');
        $subdistrict = $request->input('subdistrict');
        $province = $request->input('province');
        $zip_code = $request->input('zip_code');
        $addressArray = array(


            "firstname" => $firstname, "lastname" => $lastname, "email" => $email, "cellphone" => $cellphone,
            "house_no" => $house_no, "room"=> $room, "building_name" => $building_name, "alley" => $alley,
            "road" => $road, "district" => $district, "subdistrict" => $subdistrict, "province" => $province,
            "zip_code" => $zip_code
        );
        $update = DB::table("orders")->insert($addressArray);
        return redirect('address')->with('success', 'Update Successfully');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function indexAddress()
    {
        $user_id = Auth::user()->id;
        $address = PostAddress::where('user_id', '=', $user_id)->first();
        $list = DB::table('provinces')->get();

        return view('account.address',compact('address','list'));
    }
    


    public function updateAddress(AddressRequest $request)
    {
        $user_id = Auth::user()->id;

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');

        $cellphone = $request->input('cellphone');
        $house_no = $request->input('house_no');
        $room = $request->input('room');
        $building_name = $request->input('building_name');
        $alley = $request->input('alley');
        $road = $request->input('road');
        $district = $request->input('district');
        $subdistrict = $request->input('subdistrict');
        $province = $request->input('province');
        $zip_code = $request->input('zip_code');
        $addressArray = array(


            "firstname" => $firstname, "lastname" => $lastname, "cellphone" => $cellphone,
            "house_no" => $house_no, "room"=> $room, "building_name" => $building_name, "alley" => $alley,
            "road" => $road, "district" => $district, "subdistrict" => $subdistrict, "province" => $province,
            "zip_code" => $zip_code
        );
        $update = DB::table("post_addresses")->where('user_id',$user_id)->update($addressArray);
        return redirect('address')->with('success', 'Update Successfully');


    }

    public function insertAddress(AddressRequest $request){
        $user_id = Auth::user()->id;


        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');

        $cellphone = $request->input('cellphone');
        $house_no = $request->input('house_no');
        $room = $request->input('room');
        $building_name = $request->input('building_name');
        $alley = $request->input('alley');
        $road = $request->input('road');
        $district = $request->input('district');
        $subdistrict = $request->input('subdistrict');
        $province = $request->input('province');
        $zip_code = $request->input('zip_code');
        $addressArray = array(
            "user_id"=>$user_id,
            "firstname" => $firstname, "lastname" => $lastname, "cellphone" => $cellphone,
            "house_no" => $house_no, "room"=> $room, "building_name" => $building_name, "alley" => $alley,
            "road" => $road, "district" => $district, "subdistrict" => $subdistrict, "province" => $province,
            "zip_code" => $zip_code
            );
            $insert = DB::table("post_addresses")->insert($addressArray);

        return redirect('address')->with('success', 'Insert Successfully');
    }

    public function updateAddressAtCheckout(AddressRequest $request)
    {
        $user_id = Auth::user()->id;
        $cart = Session::get('cart');
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');

        $cellphone = $request->input('cellphone');
        $house_no = $request->input('house_no');
        $room = $request->input('room');
        $building_name = $request->input('building_name');
        $alley = $request->input('alley');
        $road = $request->input('road');
        $district = $request->input('district');
        $subdistrict = $request->input('subdistrict');
        $province = $request->input('province');
        $zip_code = $request->input('zip_code');
        $random = uniqid();
        $order_no = $random;

        if ($cart) {
            $date = date('Y-m-d H:i:s');
            $newOrderArray = array(
                "order_no"=>$order_no,"user_id"=>$user_id,
                "payment_status" => "on_hold","delivery_status" => "on_hold", "date" => $date, "del_date" => $date, "price" => $cart->totalPrice+60,
                "firstname" => $firstname, "lastname" => $lastname, "cellphone" => $cellphone,
                "house_no" => $house_no, "room"=> $room, "building_name" => $building_name, "alley" => $alley,
                "road" => $road, "district" => $district, "subdistrict" => $subdistrict, "province" => $province,
                "zip_code" => $zip_code
            );
            $create_order = DB::table("orders")->insert($newOrderArray);
            $order_id = DB::getPdo()->lastInsertId();
            foreach ($cart->items as $cart_item) {
                $item_id = $cart_item['data']['id'];
                $item_quantity = $cart->totalQuantity;
                $item_name = $cart_item['data']['product_name'];
                $item_price = $cart_item['data']['price'];
                $picture = $cart_item['data']['picture'];
                $newItemsInCurrentOrder = array("item_id" => $item_id,"picture"=>$picture ,"item_quantity"=>$item_quantity,"user_id"=>$user_id ,"order_no"=>$order_no, "order_id" => $order_id, "item_name" => $item_name, "item_price" => $item_price);
                $created_order_items = DB::table("order_items")->insert($newItemsInCurrentOrder);
            }
        $addressArray = array(


            "firstname" => $firstname, "lastname" => $lastname, "cellphone" => $cellphone,
            "house_no" => $house_no, "room"=> $room, "building_name" => $building_name, "alley" => $alley,
            "road" => $road, "district" => $district, "subdistrict" => $subdistrict, "province" => $province,
            "zip_code" => $zip_code
        );
        $update = DB::table("post_addresses")->where('user_id',$user_id)->update($addressArray);
        Session::forget("cart");
        $payment_info = $newOrderArray;

           $request->session()->put('payment_info',$payment_info);
        return redirect('paymentpage');

        }else {
            return redirect('categories');

        }
    }
    public function indexOrderList(){
        $user_id = Auth::user()->id;
        $order = DB::table('orders')->where('user_id',$user_id)->orderBy('date', 'desc')->get();
        $orders =DB::table('orders')->count();
        return view('myAccount.myorder',compact('order','orders'));
    }

    public function myAccount(){
        $user_id = Auth::user()->id;
        $user = User::where('id',$user_id)->first();
        return view('myAccount.myaccount',compact('user'));
    }
}
