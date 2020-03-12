<?php

namespace App\Http\Controllers;
/**
 * summary
 */
class CheckOutController extends Controller
{
    /**
     * summary
     */
    public function __construct()
    {
    }


    public function form()
    {
    	return view('checkout');
    }


    public function submit_form()
    {
    	
    }

    public function order()
    {
        return view('Home-views.Views.Order');
    }


}
