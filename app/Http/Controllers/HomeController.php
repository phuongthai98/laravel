<?php 
namespace App\Http\Controllers;
use App\Models\Catalogs;
use App\Models\Products;
use App\Models\Banner;
use App\Models\Users;
use Auth;

use Illuminate\Http\Request;

/**
 * summary
 */
class HomeController extends Controller
{
    /**
     * summary
     */
    public function __construct(){
        $slide = Banner::orderBy('id','DESC')->take(4)->get();
        $pro = Products::all();
        $pror = Products::all()->random(3);
        $menu1 = Catalogs::where('status',1)->where('group_menu1',1)->get();

        view()->share('banner',$slide);
        view()->share('pro',$pro);
        view()->share('pror',$pror);
        view()->share('menu1',$menu1);
    }
    public function index()
    {
        return view('Home-views.Views.TrangChu');
    }

    public function product_detail($id){
        $pro_detail = Products::find($id);
        return view('Home-views.Views.ProductDetail',compact('pro_detail'));
    }
    public function search(Request $rq){
        return view('Home-views.Views.SearchPro');
    }
    public function post_search(Request $rq){
        $search = $rq->search;
        $search_pro = Products::where('product_name','like','%'.$search.'%')->paginate(5);
        // dd($search_pro);
        return view('Home-views.Views.SearchPro',compact('search_pro','search'));
    }

    public function login()
    {
        return view('Home-views.Views.Login');
    }

    public function post_login(Request $rq)
    {
        if (Auth::guard('cus')->attempt($rq->only('email','password'),false)) {
            return redirect()->route('home');
        }else{
            return redirect()->back()->with('error','Email or Password was wrong!');
        }

        // dd($rq->only('email','password'));
    }

    public function home_log_out()
    {
        Auth::guard('cus')->logout();
        return redirect()->route('home');
    }

}
 ?>