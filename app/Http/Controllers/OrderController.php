<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Orders;
use App\Helper\CartHelper;
use Auth;
use Mail;
/**
 * summary
 */
class OrderController extends Controller
{
    /**
     * summary
     */
    public function __construct()
    {
        
    }

    public function order()
    {
    	return view('Home-views.Views.Order');
    }

    public function sub_order(Request $rq, CartHelper $cart)
    {
        if (isset(Auth::guard('cus')->user()->email)) {
           if ($or = Orders::create([
            'full_name' => $rq->full_name,
            'address' => $rq->address,
            'phone' => $rq->phone,
            'order_note' => $rq->order_note
            ]))
            {
                Mail::send('Email.Order',[
                'name' => Auth::guard('cus')->user()->full_name,
                'email' => Auth::guard('cus')->user()->email
            ], function($mail) use ($rq){
                $mail->to(Auth::guard('cus')->user()->email,Auth::guard('cus')->user()->full_name);
                $mail->from('luongitbkap@gmail.com');
                $mail->subject('Test mail');
            });
                $cart->clear();
               return redirect()->route('cart')->with('success','Đặt hàng thành công!');
            }else{
                return redirect()->back()->with('errorr','Đặt hàng thất bại!');
            } 
        }else{
            if ($or = Orders::create([
            'full_name' => $rq->full_name,
            'address' => $rq->address,
            'phone' => $rq->phone,
            'order_note' => $rq->order_note
            ]))
            {
                $cart->clear();
                return redirect()->route('cart')->with('success','Đặt hàng thành công!');
            }else{
                return redirect()->back()->with('errorr','Đặt hàng thất bại!');
            } 
        }



    }
}

?>