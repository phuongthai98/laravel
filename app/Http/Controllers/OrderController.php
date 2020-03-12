<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
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

    public function sub_order(Request $rq)
    {
        
    }
}

?>