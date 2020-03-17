<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Catalogs;
use App\Models\Products;
use App\Models\Banner;
use App\Models\Users;
use App\Models\Color;
use App\Models\Admins;
use Auth;

use Illuminate\Http\Request;


/**
 * summary
 */
class AdminController extends Controller
{
    /**
     * summary
     */



    //===================================================== Login Logout ==================================
    public function login(){
        return view('Admin-views.Views.Login-admin');
    }
    public function post_login(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ],[
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Đây không phải định dạng email',
            'password.required' => 'Vui lòng nhập password'
        ]);
        // dd($request->only('email','password'));
        if (Auth::attempt($request->only('email','password'),false)) {
            return redirect()->route('admin')->with('success','Chào mừng Admin!');
        }
        else {
            return redirect()->back()->with('error','Mật khẩu hoặc tài khoản không đúng!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }


    //===================================== End Login Logout =================================================

    //------------ Add admin-----
    public function add_admin()
    {
        return view('Admin-views.Views.Add-admin');
    }
    public function post_admin(Request $r)
    {
        $add = Admins::create([
            'user_name' => $r->user_name,
            'full_name' => $r->full_name,
            'email' => $r->email,
            'password' => bcrypt($r->password),
            'status' => $r->status,
            'age' => $r->age,
            'address' => $r->address,
            'role_id' => $r->role_id
        ]);
        if ($add) {
            return redirect()->route('add_admin')->with('success','Thêm mới thành công!');
        }else {
            return redirect()->route('add_admin')->with('error','Thêm mới thất bại !!');
        }
    }
    //------------------ End admin----------------------

    public function index()
    {
        return view('Admin-views.Master.Admin');
    }
    public function catalogs()
    {
        $cats = Catalogs::paginate(5);
        return view('Admin-views.Views.Catalogs',['cat' => $cats]);
    }
    public function products()
    {
        $pros = Products::paginate(5);
        return view('Admin-views.Views.Products',['pro' => $pros]);
    }
    public function banner()
    {
        $bans = Banner::paginate(5);
        return view('Admin-views.Views.Banner',['ban' => $bans]);
    }
    public function users()
    {
        $users = Users::paginate(5);
        return view('Admin-views.Views.Users',['user' => $users]);
    }

// ===============================Chức năng bảng Catalogs =========================================================
    
    //------- Thêm Catalogs -----------------------

    public function addCat()
    {
        return view('Admin-views.Views.AddCatalogs');
    }
    public function post_addCat(Request $request)
    {
        if ($add = Catalogs::create([
            'catalog_name' => $request->name,
            'status' => $request->status,
            'parent' => $request->parent,
            'group_menu1' => $request->group_menu1,
            'group_menu2' => $request->group_menu2
        ])) {
            return redirect()->route('catalogs')->with('success','Them moi thanh cong!');
        }else{
            return redirect()->route('catalogs')->with('error','Them moi that bai!');
        }
    }
    //----------------- Sửa Catalogs ----------------

    public function editCat($id)
    {
        $edit = Catalogs::find($id);
        return view('Admin-views.Views.editCatalogs',['edit' => $edit]);
    }
    public function edit_postCat(Request $request,$id)
    {
        $edit = Catalogs::find($id);
        $edit->catalog_name = $request->name;
        $edit->status = $request->status;
        $edit->parent = $request->parent;
        $edit->group_menu1 = $request->group_menu1;
        $edit->group_menu2 = $request->group_menu2;
        if ($up = $edit->save()) {
            return redirect()->route('catalogs')->with('success','Sửa thành công!');
        }else{
            return redirect()->route('catalogs')->with('error','Sửa thất bại!');
        }

    }

    //----------------------------------Xóa Catalogs --------------------------

    public function delCat($id)
    {
        $del = Catalogs::find($id);
        $name = $del->catalog_name;
        $del->delete();
        if ($del) {
            return redirect()->route('catalogs')->with('success','Đã xóa danh mục: '.$name);
        }
    }

    //--------------- Tìm Kiếm Catalogs ---------------

    public function searchCat(Request $rq)
    {
        return view('Admin-views.Views.SearchCatalogs');
    }
    public function post_searchCat(Request $rq)
    {
        $key = $rq->search;
        $cat = Catalogs::where('catalog_name','like','%'.$rq->search.'%')->get();

        return view('Admin-views.Views.SearchCatalogs',compact('cat','key'));
    }



//================================== Chức năng bẳng Products ===========================================================
    
    //-------------------Thêm Products----------------------

    public function addPro()
    {
        $cats = Catalogs::all();
        return view('Admin-views.Views.AddProducts',['cat' => $cats]);
    }
    public function post_addPro(Request $rq)
    {
        // dd($rq);

        $this->validate($rq,[
            'upload' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ],[
            'upload.image' => 'File tải lên không phải định dạng ảnh!',
            'upload.mimes' => 'File tải lên phải có đuôi: jpeg, png, jpg, gif',
            'upload.max' => 'File tải lên không đc quá 2MB!'
        ]);

        $file = $rq->file('upload');
        // getClientOriginalNam để lấy tên gốc của ảnh
        $image = time().'-'.$file->getClientOriginalName('upload');
        
        if ($add = Products::create([
            'catalog_id' => $rq->catalog_id,
            'product_name' => $rq->name,
            'price'=> $rq->price,
            'sale_price'=> $rq->sale_price,
            'content' => $rq->content,
            'image' => $image,
            'description' => $rq->description])) {
            $file->move('public/upload/products',$image);
            return redirect()->route('products')->with('success','Thêm sản phẩm thành công');
        }else{
            return redirect()->route('products')->with('error','Thêm sản phẩm thất bại');
        }
    }

        //----------------Sửa Products-------------------------
    

    public function editPro($id)
    {
        $cat = Catalogs::all();
        $pro = Products::find($id);
        return view('Admin-views.Views.EditProducts', ['edit' => $pro], ['cat' => $cat]);
    }
    public function upPro(Request $rq, $id)
    {
        $pro = Products::find($id);

        if ($rq->has('name')) {
            $pro->catalog_id = $rq->catalog_id;
            $pro->product_name = $rq->name;
            $pro->price = $rq->price;
            $pro->sale_price = $rq->sale_price;
            $pro->content = $rq->content;
            $pro->description = $rq->description;

            $this->validate($rq,[
            'upload' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ],[
            'upload.image' => 'File tải lên không phải định dạng ảnh!',
            'upload.mimes' => 'File tải lên phải có đuôi: jpeg, png, jpg, gif',
            'upload.max' => 'File tải lên không đc quá 2MB!'
        ]);
            if ($rq->hasFile('upload')) {
                $file = $rq->file('upload');
                $image = time().'-'.$file->getClientOriginalName('upload');
                
                $pro->image = $image;
                $pro->save();
                if ($up = $pro) {
                    $file->move('public/upload/products',$image);
                    return redirect()->route('products')->with('success','Đã sửa !');
                }
            }else{
                $pro->image = $pro->image;
                $pro->save();
                if ($up = $pro) {
                    return redirect()->route('products')->with('success','Đã sửa !');
                }
            }
        }
    }

    ////------------------Xóa Products-----------------------
    
    public function delPro($id)
    {
        $pro = Products::find($id);
        $name = $pro->product_name;
        if ($del = $pro->delete()) {
            return redirect()->route('products')->with('success','Đã xóa sản phẩm: '.$name);
        }
    }

    ///--------------------Tìm kiếm Products---------------------

    public function searchPro(Request $rq)
    {
        return view('Admin-views.Views.SearchProducts');
    }
    public function post_searchPro(Request $rq)
    {
        $key = $rq->search;
        $pro = Products::where('product_name','like','%'.$rq->search.'%')->get();
        return view('Admin-views.Views.SearchProducts',compact('pro','key'));
    }

// =========================================== Chức năng bảng Banner ==============================

    //---------------------Thêm Banner-------------------------->

    public function addBan(){
        return view('Admin-views.Views.AddBanner');
    }
    public function post_addBan(Request $rq)
    {   
        $this->validate($rq,[
            'upload' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ],[
            'upload.image' => 'File tải lên không phải định dạng ảnh!',
            'upload.mimes' => 'File tải lên phải có đuôi: jpeg, png, jpg, gif',
            'upload.max' => 'File tải lên không đc quá 2MB!'
        ]);

        $file = $rq->file('upload');
        $image = time().'-'.$file->getClientOriginalName('upload');
        $file->move('public/upload/banner',$image);
        $up = Banner::create([
            'status' => $rq->status,
            'type' => $rq->type,
            'image' => $image
        ]);
        if ($up) {
        $file->move('public/upload/banner',$image);
            return redirect()->route('banner')->with('success','Thêm banner thành công!');
        }
    }

    //--------------------Sửa Banner--------------------------->

    public function editBan($id){
        $ban = Banner::find($id);
        return view('Admin-views.Views.EditBanner',['ban' => $ban]);
    }
    public function edit_postBan(Request $rq, $id)
    {
        $ban = Banner::find($id);
        
        $ban->status = $rq->status;
        $ban->type = $rq->type;

        $this->validate($rq,[
            'upload' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ],[
            'upload.image' => 'File tải lên không phải định dạng ảnh!',
            'upload.mimes' => 'File tải lên phải có đuôi: jpeg, png, jpg, gif',
            'upload.max' => 'File tải lên không đc quá 2MB!'
        ]);
            if ($rq->hasFile('upload')) {
                $file = $rq->file('upload');
                $image = time().'-'.$file->getClientOriginalName('upload');
               
                $ban->banner_image = $image;
                $ban->save();
                if ($ban) {
                    $file->move('public/upload/banner',$image);
                    return redirect()->route('banner')->with('success','Sửa thành công!');
                }
            }else {
            $ban->banner_image = $ban->banner_image;
            $ban->save();
                if ($ban) {
                    return redirect()->route('banner')->with('success','Sửa thành công!');
                }
            }
        
    }

    //-----------------Xóa Banner------------------------------>


    public function delBan($id)
    {
        $del = Banner::find($id);
        $del->delete();
        if ($del) {
            return redirect()->route('banner')->with('success','Đã xóa!');
        }
    }

    //-------------------Tìm kiếm Banner---------------------------->


    public function searchBan(Request $rq)
    {
        return view('Admin-views.Views.SearchBanner');
    }
    public function post_searchBan(Request $rq)
    {
        $key = $rq->search;
        $bann = Banner::where('name','like','%'.$rq->search.'%')->get();
        return view('Admin-views.Views.SearchBanner',compact('bann','key'));
    }

// =========================================== Chức năng bảng Users ==============================

    ///--------------------Thêm Users --------------------------->


    public function addUser()
    {
        return view('Admin-views.Views.AddUsers');
    }
    public function post_addUser(Request $rq)
    {
        // dd($rq);
        // $this->validate($rq,
        //     [
        //         'full_name' => 'require|max:20',
        //         'email' => 'require',
        //         'password' => 'require|min:6|max:20'
        //     ],
        //     [
        //         'full_name.require' => 'Bạn chưa điền tên đầy đủ!',
        //         'full_name.max' => 'Tên đầy đủ không đc quá 20 ký tự!',
        //         'email.require' => 'Bạn chưa nhập email!',
        //         'password.require' => 'Bạn chưa nhập password!',
        //         'password.min' => 'Password phải chứa ít nhất 6 ký tự!',
        //         'password.max' => 'Password không được nhiều hơn 20 ký tự!',
        //     ]);

        $this->validate($rq,[
            'upload' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ],[
            'upload.image' => 'File tải lên không phải định dạng ảnh!',
            'upload.mimes' => 'File tải lên phải có đuôi: jpeg, png, jpg, gif',
            'upload.max' => 'File tải lên không đc quá 2MB!'
        ]);
         $file = $rq->file('upload');
        // getClientOriginalNam để lấy tên gốc của ảnh
        $image = time().'-'.$file->getClientOriginalName('upload');
        $add = Users::create([
            'user_name' => $rq->user_name,
            'full_name' => $rq->full_name,
            'email' => $rq->email,
            'password' => bcrypt($rq->pass),
            'phone' => $rq->phone,
            'image' => $image,
            'address' => $rq->address
        ]);
        if ($add) {
        $file->move('public/upload/avatar',$image);
            return redirect()->route('users')->with('success','Thêm người dùng thành công!');
        }
    
        
    }

    //---------------------Sửa Users -------------------------->


    public function editUser($id)
    {
        $edit = Users::find($id);

        return view('Admin-views.Views.EditUser',['edit' => $edit]);
    }
    public function edit_postUser(Request $rq, $id)
    {
        $edit = Users::find($id);

        // dd($rq);
        if ($rq->has('user_name')) {
            $edit->user_name = $rq->user_name;
            $edit->full_name = $rq->full_name;
            $edit->email = $rq->email;
            $edit->password = bcrypt($rq->pass);
            $edit->phone = $rq->phone;
            $edit->address = $rq->address;

           $this->validate($rq,[
            'upload' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ],[
            'upload.image' => 'File tải lên không phải định dạng ảnh!',
            'upload.mimes' => 'File tải lên phải có đuôi: jpeg, png, jpg, gif',
            'upload.max' => 'File tải lên không đc quá 2MB!'
        ]);
            if ($rq->hasFile('upload')) {
                $file = $rq->file('upload');
                $image = time().'-'.$file->getClientOriginalName('upload');
                $edit->image = $image;
                $edit->save();
                if ($up = $edit) {
                $file->move('public/upload/avatar',$image);
                    return redirect()->route('users')->with('success','Chỉnh sửa thành công!');
                }
            }else{
                $edit->image = $edit->image;
                $edit->save();
                if ($up = $edit) {
                   return redirect()->route('users')->with('success','Chỉnh sửa thành công!');
                }
            }
        }
    }

    //---------------------Xóa Users -------------------------->


    public function delUser(Request $rq,$id)
    {
        $del = Users::find($id);
        $del->delete();
        if ($del) {
            return redirect()->route('users')->with('success','Đã xóa tài khoản: '.$del->email);
        }
    }

    //--------------------Tìm kiếm Users --------------------------->

    public function searchUser(Request $rq)
    {
        return view('Admin-views.Views.SearchUsers');
    }
    public function post_searchUsers(Request $rq)
    {
        $key = $rq->search;
        $user = Users::where('email','like','%'.$rq->search.'%')->get();
        return view('Admin-views.Views.SearchUsers',compact('user','key'));
    }

}
// ============================== END ==========================================================================================

?>