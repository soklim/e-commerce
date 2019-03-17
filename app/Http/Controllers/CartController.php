<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Http\Request;
use App\Product;
use DB;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems = Cart::content();
        $data1['data'] = DB::table('tbl_category')->get();
        return \View::make('frontend/order/view-card', compact('cartItems'),$data1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view_cart()
    {
        $cartItems = Cart::content();
        if($cartItems==''){
            return redirect('frontend/product-lists');
        }
        $data1['data'] = DB::table('tbl_category')->get();
        return \View::make('frontend.checkout.checkout', compact('cartItems'),$data1);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pro=Product::where('id',$id)->get();
        $name = $pro->pro_name;
        $price = $pro->prices;
        $img =  $pro->photo_id;
        // $cart = Cart::add($id,$name,$price);
        Cart::add(['id'=> $id,'name'=>$name,'price'=>$price,'qty'=>1,'img' =>$img]);
        return redirect('cart');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data['data'] = DB::table('tbl_category')->get(); 

        $qty = $request->newQty;
        $rowId = $request->rowID;
        //$price = $request->price;
        Cart::update($rowId,$qty);
        //dd($qty);
        $cartItems =  Cart::content();
        //
        return  view('frontend.order.upCart',compact('cartItems'));

    }

    public function update_add_cart(Request $request,$id)
    {
        $data['data'] = DB::table('tbl_category')->get(); 
        
        $qty = $request->newQty;
        $rowId = $request->rowID;
        //$price = $request->price;
        Cart::update($rowId,$qty);
        //dd($qty);
        $cartItems =  Cart::content();
        //
        return  view('frontend.pro_detail.product-order-update',compact('cartItems'));

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
        Cart::remove($id);
        return back(); // will keep same page
    }
}
