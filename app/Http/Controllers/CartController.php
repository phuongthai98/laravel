<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\CartHelper;
use App\Models\Products;
class CartController extends Controller
{
    //

    public function checkout(){
        return view('Home-views.Views.CheckOut');
    }
    public function add(CartHelper $cart, $id)
    {
    	$product = Products::find($id);
    	$cart->add($product);
    	return redirect()->back();
    }
    public function remove(CartHelper $cart, $id)
    {
    	$cart->remove($id);
    	return redirect()->back();
    }
    public function update(CartHelper $cart, $id)
    {
        if (request()->quantity >= 1) {
            $quantity = request()->quantity ? request()->quantity : 1 ;
            $cart->update($id,$quantity);
            return redirect()->back();
        }else{
            return redirect()->back()->with('error','Số lượng sản phẩm không đc nhỏ hơn 1!');
        }
        
    }
    public function clear(CartHelper $cart)
    {
    	$cart->clear();
    	return redirect()->back();
    }
}
