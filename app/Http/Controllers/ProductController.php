<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Order;
use App\User;
use App\PostAddress;
use App\Transaction;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\AddressRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Freshbitsweb\Laratables\Laratables;

class ProductController extends Controller
{
public function __construct()
{
    $this->middleware('auth',['except'=>['show']]);
    $this->middleware('admin',['except'=>['show','addToCart','showCart','deleteItemFromCart','increaseSingleProduct','decreaseSingleProduct','createOrder','checkoutProducts','createNewOrder']]);

}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $product = Product::orderBy('id', 'asc')->paginate(10);
        $productt =DB::table('products')->count();


        return view('dashboard.manageproduct', compact('product','productt'));
    }
    public function getProductAjax(){
        return Laratables::recordsOf(Product::class);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        /*$request->validate([
            'product_name'=>'required',
            'detail_1'=>'required',
            'category_id'=>'required',
            'price'=>'required|numeric',
            'weight'=>'required|numeric',
            'size'=>'required|numeric'

        ], [
            'product_name.required'=>'กรุณากรอกชื่อสินค้า',
            'detail_1.required'=>'กรุณากรอกข้อมูสินค้า',
            'category_id.required'=>'กรุณาระบุประเภทสินค้า',
            'price.required'=>'กรุณากรอกราคาสินค้า',
            'price.numeric'=>'กรุณากรอกราคาสินค้าที่เป็นตัวเลขเท่านั้น',
            'weight.required'=>'กรุณากรอกน้ำหนักสินค้า',
            'weight.numeric'=>'กรุณากรอกน้ำหนักสินค้าที่เป็นตัวเลขเท่านั้น',
            'size.required'=>'กรุณากรอกขนาดสินค้า',
            'size.numeric'=>'กรุณากรอกขนาดสินค้าที่เป็นตัวเลขเท่านั้น',
        ]);*/
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->detail_1 = $request->detail_1;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->picture = $request->picture;

        $product->instock = $request->instock + $request->add_product;
        $product->add_product = $request->add_product;

        $product->weight = $request->weight;
        $product->size = $request->size;
        $product->save();
        return redirect('manageproduct')->with('success', 'Add product Successfully');
        //return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$product = Product::all();
        //$product = Product::with('category')->where('id','=',$id)->first();
        //$category = Category::with('products')->where('id','=',$id)->first();
        // return view('product.show',compact('product'));
        $product = Product::find($id);
        return view('product.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit', compact('product', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->product_name = $request->get('product_name');
        $product->detail_1 = $request->get('detail_1');

        $product->price = $request->get('price');
        $product->category_id = $request->get('category_id');

        $product->add_product = $request->get('add_product');
        $product->instock = $request->get('instock') + $request->get('add_product');
        $product->weight = $request->get('weight');
        $product->size = $request->get('size');
        $product->save();
        return redirect('manageproduct')->with('success', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('manageproduct')->with('success', 'Delete Successfully');
    }
    public function addToCart(Request $request, $id)
    {
        // $request->session()->forget("cart");
        //$request->session()->flush();
        $prevCart = $request->session()->get('cart');
        $cart = new Cart($prevCart);
        $product = new Product();


        $product = Product::find($id);
        $cart->addItem($id, $product);
        $request->session()->put('cart', $cart);

        return redirect('categories')->with('success', 'สินค้าของคุณอยู่ในตะกร้าเรียบร้อย');
    }
    public function showCart()
    {
        $cart = Session::get('cart');
        if ($cart) {

            return view('product.showcart', ['cartItems' => $cart]);
        } else {

            return redirect('nocart');
        }
    }
    public function deleteItemFromCart(Request $request, $id)
    {
        $cart = $request->session()->get("cart");
        if (array_key_exists($id, $cart->items)) {
            unset($cart->items[$id]);
        }
        $prevCart = $request->session()->get("cart");
        $updateCart = new Cart($prevCart);
        $updateCart->updatePriceAndQuantity();
        $request->session()->put("cart", $updateCart);
        return redirect('cart');
    }
    public function increaseSingleProduct(Request $request, $id)
    {
        $prevCart = $request->session()->get('cart');
        $cart = new Cart($prevCart);
        $product = Product::find($id);
        $cart->addItem($id, $product);
        $request->session()->put('cart', $cart);
        return redirect('cart');
    }
    public function decreaseSingleProduct(Request $request, $id)
    {
        $prevCart = $request->session()->get('cart');
        $cart = new Cart($prevCart);
        if ($cart->items[$id]['quantity'] > 1) {
            $product = Product::find($id);
            $cart->items[$id]['quantity'] = $cart->items[$id]['quantity'] - 1;
            $cart->items[$id]['totalSinglePrice'] = $cart->items[$id]['quantity'] * $product['price'];
            $cart->updatePriceAndQuantity();
            $request->session()->put('cart', $cart);
        }
        return redirect('cart');
    }
    public function createOrder()
    {
        $cart = Session::get('cart');
        if ($cart) {
            $date = date('Y-m-d H:i:s');
            $newOrderArray = array("status" => "on_hold", "date" => $date, "del_date" => $date, "price" => $cart->totalPrice);
            $create_order = DB::table("orders")->insert($newOrderArray);
            $order_id = DB::getPdo()->lastInsertId();
            foreach ($cart->items as $cart_item) {
                $item_id = $cart_item['data']['id'];
                $item_name = $cart_item['data']['product_name'];
                $item_price = $cart_item['data']['price'];
                $newItemsInCurrentOrder = array("item_id" => $item_id, "order_id" => $order_id, "item_name" => $item_name, "item_price" => $item_price);
                $created_order_items = DB::table("order_items")->insert($newItemsInCurrentOrder);
            }
            Session::forget("cart");
            //Session::flush();
            return redirect('categories')->withsuccess("Thanks for Choosing Us");
        } else {
            return redirect('categories');
        }
    }
    public function checkoutProducts()

    {
        $user_id = Auth::user()->id;
        $address = PostAddress::where('user_id', '=', $user_id)->first();

        return view('product.checkoutproducts',compact('address'));
    }
    public function createNewOrder(AddressRequest $request)
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
                "payment_status" => "on_hold", "delivery_status" => "on_hold","date" => $date, "del_date" => $date, "price" => $cart->totalPrice+60,
                "firstname" => $firstname, "lastname" => $lastname, "cellphone" => $cellphone,
                "house_no" => $house_no, "room"=> $room, "building_name" => $building_name, "alley" => $alley,
                "road" => $road, "district" => $district, "subdistrict" => $subdistrict, "province" => $province,
                "zip_code" => $zip_code
            );
            $create_order = DB::table("orders")->insert($newOrderArray);
            $order_id = DB::getPdo()->lastInsertId();


            foreach ($cart->items as $cart_item) {
                $item_id = $cart_item['data']['id'];
                $picture = $cart_item['data']['picture'];
                $item_name = $cart_item['data']['product_name'];
                $item_price = $cart_item['data']['price'];
                $item_quantity = $cart->totalQuantity;
                $newItemsInCurrentOrder = array("item_id" => $item_id,"user_id"=>$user_id,"order_no"=>$order_no ,"item_quantity"=>$item_quantity,"picture"=>$picture, "order_id" => $order_id, "item_name" => $item_name, "item_price" => $item_price);
                $created_order_items = DB::table("order_items")->insert($newItemsInCurrentOrder);
            }
            $address = array(

                "user_id"=>$user_id,
                "firstname" => $firstname, "lastname" => $lastname,  "cellphone" => $cellphone,
                "house_no" => $house_no, "room"=> $room, "building_name" => $building_name, "alley" => $alley,
                "road" => $road, "district" => $district, "subdistrict" => $subdistrict, "province" => $province,
                "zip_code" => $zip_code
            );
            $create_address = DB::table("post_addresses")->insert($address);
            Session::forget("cart");
            // Session::flush();
           $payment_info = $newOrderArray;

           $request->session()->put('payment_info',$payment_info);

            return redirect('paymentpage');
        } else {
            return redirect('categories');

        }
    }

    public function editImage($id)
    {
        $product = Product::find($id);
        return view('product.editimage', compact('product', 'id'));
    }

    public function updateImage(ProductRequest $request, $id)
    {
        $product = Product::find($id);

        $product->picture = $request->get('picture');
        $product->save();
        return redirect('manageproduct')->with('success', 'Update Successfully');
    }
    public function countUserAtDashboard(){
        $userCount = User::count();
        $userOrder = Order::count();
        $userPaid = DB::table('orders')->where('payment_status', '=', 'paid')->count();
        $userDelivered = DB::table('orders')->where('delivery_status', '=', 'delivered')->count();
        $product = Product::orderBy('id', 'asc')->paginate(20);
        $doll = DB::table('products')->where('category_id', '=', 1)->count();
        $keychain = DB::table('products')->where('category_id', '=', 3)->count();
        $pillow = DB::table('products')->where('category_id', '=', 2)->count();
        return view('dashboard.dashboard', compact('userCount', 'userOrder','product','doll','keychain','pillow','userPaid','userDelivered'));
    }

    public function index2(){
        return view('product.index2');
    }



    public function ordersPanel(){
        $orders = DB::table('orders')->orderBy('order_id', 'desc')->paginate(20);
        $orderss =DB::table('orders')->count();
        $pay = DB::table('transactions')->count();
        return view('dashboard.order',compact('orders','orderss','pay'));
    }

    public function delivered($order_no){
        $update = DB::table('orders')
              ->where('order_no', $order_no)
              ->update(['delivery_status' => 'delivered']);
        return redirect('orderPanel');

    }








}
