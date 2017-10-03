<?php

namespace app\Http\Controllers;
use App\Product;
use App\Personal;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Http\Requests;
use App\User;
use App\Role;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\AccountRequest;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Hash;
use App\Http\Requests\PersonalRequest;
use App\Http\Requests\AccountEditRequest;

//use Validator.co the bo use Illuminate\Database\Eloquent\Collection; hagiak;
class AdminProductController extends Controller

{
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$allProduct = Product::all();
        return view('admin.indexAdmin', array('products' => $allProduct));
    }

    public function indexAccount()
    {
        $allAccount = User::all();
        //$allAccount = DB::select("SELECT  u.* FROM goodshop.users  u");
       // $allAccount = DB::select("SELECT u.id,u.email,u.name,u.password,u.created_at,u.updated_at,r.name as name_role FROM goodshop.users u join roles r on u.role=r.id  ");
        return view('admin.accountList', array('accounts' => $allAccount));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type= DB::select("select*from typemarchandises");
        $producers =  DB::select("select*from producers");
      // print("<pre>");
      //  print_r($type);die();
        return view("admin.insert",array('types'=> $type,'producers'=>$producers));
    }
    public function createAccount()
    {
        $allRole= DB::select("SELECT * FROM goodshop.roles ");
       return view('admin.insertAccount', array('roles' => $allRole));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   // public function store(Request $request)
    public function accountStore(AccountRequest $request)
    {
        $account = new User;
        $account->name = $request->input('name');
        $account->email = $request->input('email');
        $confirm =  $request->input('password_confirm');
        if( $confirm != $request->input('password'))
        {
            \Session::flash('flash_message','Hai mật khẩu không trùng khớp');
            \Session::flash('flash_message_important',true);
            return redirect()->action('AdminProductController@createAccount');
        }
        $account->password = Hash::make($request->input('password'));
        $account->remember_token= $request->_token;
       $account->role = $request->input('role');
        $account->save();
        \Session::flash('flash_message','Bạn đã thêm tài khoản  thành công');
        \Session::flash('flash_message_important',true);
        return redirect()->action('AdminProductController@personalCreate');
    }
    /**
     * @param ProductRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductRequest $request)
	{
		$product = new Product;
		$product->name = $request->input('name');
		$product->price1 = $request->input('price1');
		$product->price2 = $request->input('price2');
		$product->discription = $request->input('discription');
        $product->type = $request->input('type');
        $product->producer = $request->input('producer');
       // echo $product->producer;die();
		$product->save();


		//lay thong tin can luu tru
		$img= $request-> file('fileHinhAnh');





        $img1= $request-> file('fileThumb1');
		$img2= $request-> file('fileThumb2');
		$img3= $request-> file('fileThumb3');

		$images_url='pic'. $product->id.'.'. $img->getClientOriginalExtension();
		$thumb1= 'pic'.$product->id.'1.'. $img1->getClientOriginalExtension();
		$thumb2= 'pic'.$product->id.'2.'. $img2->getClientOriginalExtension();
		$thumb3= 'pic'.$product->id.'3.'. $img3->getClientOriginalExtension();

		$product->images_url = $images_url;
		$product->thumb1 = $thumb1;
		$product->thumb2 = $thumb2;
		$product->thumb3 = $thumb3;


		//luu ket qua
		$product->save();
		//duong dan upload
		$pathImages_url= base_path() . '/public/images/';
		$pathThumb =  base_path() . '/public/images/details/';


		//di chuyen file toi thu muc upload
        //kích cỡ avatar là 275*350
        \Intervention\Image\Facades\Image::make( $img->getRealPath() )->fit(275, 350)->save($pathImages_url.$images_url)->destroy();
//        //$img->move($pathImages_url,$images_url);
        //Kích cỡ details 800*1200
        \Intervention\Image\Facades\Image::make( $img1->getRealPath() )->fit(800, 1200)->save($pathThumb.$thumb1)->destroy();
        \Intervention\Image\Facades\Image::make( $img2->getRealPath() )->fit(800, 1200)->save($pathThumb.$thumb2)->destroy();
        \Intervention\Image\Facades\Image::make( $img3->getRealPath() )->fit(800, 1200)->save($pathThumb.$thumb3)->destroy();
        //kícch cỡ large 800*1000
        $pathlarge  =  base_path() . '/public/images/large/';
        \Intervention\Image\Facades\Image::make( $img1->getRealPath() )->fit(800, 1000)->save($pathlarge.$thumb1)->destroy();
        \Intervention\Image\Facades\Image::make( $img2->getRealPath() )->fit(800, 1000)->save($pathlarge.$thumb2)->destroy();
        \Intervention\Image\Facades\Image::make( $img3->getRealPath() )->fit(800, 1000)->save($pathlarge.$thumb3)->destroy();
        //kích cỡ small 85*100
        $pathSmall  =  base_path() . '/public/images/small/';
        \Intervention\Image\Facades\Image::make( $img1->getRealPath() )->fit(85, 100)->save($pathSmall.$thumb1)->destroy();
        \Intervention\Image\Facades\Image::make( $img2->getRealPath() )->fit(85, 100)->save($pathSmall.$thumb2)->destroy();
        \Intervention\Image\Facades\Image::make( $img3->getRealPath() )->fit(85, 100)->save($pathSmall.$thumb3)->destroy();

        //Thông báo thông tin cho người dùng
        \Session::flash('flash_message','Bạn đã thêm sản phẩm mới thành công');
        \Session::flash('flash_message_important',true);
//		$img1->move($pathThumb,$thumb1);
//		$img2->move($pathThumb,$thumb2);
//		$img3->move($pathThumb,$thumb3);
		return redirect()->action('AdminProductController@index');
	}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function accountShow($id)
    {
        $allUser = User::find($id);
		return view('admin.show', array('users' => $allUser));
    }
    public function show($id)
    {

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function edit($id)
	{
        $type= DB::select("select*from typemarchandises");
        $producers =  DB::select("select*from producers");
        // print("<pre>");
        //  print_r($type);die();
		$product = Product::find($id);
		return view('admin.edit',compact('product'),array('types'=> $type,'producers'=>$producers));
	}
    public function accountEdit($id)
    {
        $allRole= DB::select("SELECT * FROM goodshop.roles ");
        $user = User::find($id);
        return view('admin.accountEdit',compact('user'),array('roles' => $allRole));
    }
    public function accountUpdate(AccountEditRequest $request,$id)
    {
        if((Auth:: user()->id) != $id)
        {
            $user = User::find($id);
            if( is_null($user))
            {
                dd($id);
            }
            $date= Carbon::now();
            $user->updated_at = $date;
            $user->role = $request->input('role');
            $pass= $request->input('password');
            if($pass == '')
            {
                $pss = DB::table('users')
                    ->where('id', $id)
                    ->value('password');
                $pss_confirm = DB::table('users')
                    ->where('id', $id)
                    ->value('password');
                $user->password =$pss;
                $user->remember_token =$pss_confirm;
                $user->email = $request->input('email');
                $user->name = $request->input('name');
            }
            else
            {
                $user->password = Hash::make($request->input('password'));
                $user->remember_token = Hash::make($request->input('password_confirm'));
                $user->email = $request->input('email');
                $user->name = $request->input('name');
            }
            $user->update();
        }
        \Session::flash('flash_message','Bạn đã sửa tài khoản  thành công');
        \Session::flash('flash_message_important',true);
        return redirect()->action('AdminProductController@indexAccount');
    }
    public function infoEdit($id)
    {
       $personal=  DB::table('personals')
           ->where('personals.id','=',$id)
           ->first();
        //return view('admin.infoEdit',compact('personal'));
        return view('admin.infoEdit',compact('personal'));
    }
   public function infoUpdate(PersonalRequest $request, $id)
    {
        $personal = Personal::find($id);
        if( is_null($personal))
        {
            dd($id);
        }
        $date= Carbon::now();
        $personal->date = $date;
        $personal->fullname = $request->input('fullname');
       // echo $personal->fullname;die();
        $personal->address = $request->input('address');
        $personal->phonenumber = $request->input('phonenumber');
        $personal->jop = $request->input('jop');
        //update ket qua
        $personal->update();
        //update table user
        //return view('home.index',array('products'=> $allproducts ));
        return redirect()->action('AdminProductController@indexAccount');
    }
    /*
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function personalCreate()
    {
        return view('admin.personal');
    }
    public function personalStore(PersonalRequest $request)
    {
        $personal = new Personal;
        $date= Carbon::now();
        $personal->date = $date;
        $id = DB::table('users')->max('id');
        $personal->id =$id;
        $personal->fullname = $request->input('fullname');
        $personal->address = $request->input('address');
        $personal->phonenumber = $request->input('phonenumber');
        $personal->jop = $request->input('jop');
        $personal->save();
        return redirect()->action('AdminProductController@indexAccount');
    }
    public function update(ProductRequest $request,$id)
	{
		$product = Product::find($id);

		if( is_null($product))
		{
			dd($id);
		}
		$product->name = $request->input('name');
		$product->price1 = $request->input('price1');
		$product->price2 = $request->input('price2');
        $product->type = $request->input('type');
        $product->producer = $request->input('producer');
		$product->discription = $request->input('discription');
		//lay thong tin can luu tru
		$img= $request-> file('fileHinhAnh');
		$img1= $request-> file('fileThumb1');
		$img2= $request-> file('fileThumb2');
		$img3= $request-> file('fileThumb3');

		$images_url='pic'. $product->id.'.'. $img->getClientOriginalExtension();
		$thumb1= 'pic'.$product->id.'1.'. $img1->getClientOriginalExtension();
		$thumb2= 'pic'.$product->id.'2.'. $img2->getClientOriginalExtension();
		$thumb3= 'pic'.$product->id.'3.'. $img3->getClientOriginalExtension();

		$product->images_url = $images_url;
		$product->thumb1 = $thumb1;
		$product->thumb2 = $thumb2;
		$product->thumb3 = $thumb3;


		//luu ket qua
		$product->update();
		//duong dan upload
		$pathImages_url= base_path() . '/public/images/';
		$pathThumb =  base_path() . '/public/images/details/';

		//di chuyen file toi thu muc upload
		//Avartar hình có kích thước 275,350
        \Intervention\Image\Facades\Image::make( $img->getRealPath() )->fit(275, 350)->save($pathImages_url.$images_url)->destroy();
//        //$img->move($pathImages_url,$images_url);
        //Kích cỡ details 800*1200
        \Intervention\Image\Facades\Image::make( $img1->getRealPath() )->fit(800, 1200)->save($pathThumb.$thumb1)->destroy();
        \Intervention\Image\Facades\Image::make( $img2->getRealPath() )->fit(800, 1200)->save($pathThumb.$thumb2)->destroy();
        \Intervention\Image\Facades\Image::make( $img3->getRealPath() )->fit(800, 1200)->save($pathThumb.$thumb3)->destroy();
        //kícch cỡ large 800*1000
        $pathlarge  =  base_path() . '/public/images/large/';
        \Intervention\Image\Facades\Image::make( $img1->getRealPath() )->fit(800, 1000)->save($pathlarge.$thumb1)->destroy();
        \Intervention\Image\Facades\Image::make( $img2->getRealPath() )->fit(800, 1000)->save($pathlarge.$thumb2)->destroy();
        \Intervention\Image\Facades\Image::make( $img3->getRealPath() )->fit(800, 1000)->save($pathlarge.$thumb3)->destroy();
        //kích cỡ small 85*100
        $pathSmall  =  base_path() . '/public/images/small/';
        \Intervention\Image\Facades\Image::make( $img1->getRealPath() )->fit(85, 100)->save($pathSmall.$thumb1)->destroy();
        \Intervention\Image\Facades\Image::make( $img2->getRealPath() )->fit(85, 100)->save($pathSmall.$thumb2)->destroy();
        \Intervention\Image\Facades\Image::make( $img3->getRealPath() )->fit(85, 100)->save($pathSmall.$thumb3)->destroy();
        \Session::flash('flash_message','Bạn đã sửa sản phẩm  thành công');
        \Session::flash('flash_message_important',true);
		//
		return redirect()->action('AdminProductController@index');
	}
    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */	
   
	public function destroy($id)
    {
		Product::find($id)->delete();
        \Session::flash('flash_message','Bạn đã xóa sản phẩm  thành công');
        \Session::flash('flash_message_important',true);
        return redirect()->action('AdminProductController@index');
    }
    public function accountDelete($id)
    {
        $admin= Auth:: user()->id;
        if ($admin <> $id)
        {
            Personal::find($id)->delete();
            User::find($id)->delete();
        }
        \Session::flash('flash_message','Bạn đã xóa tài khoản  thành công');
        \Session::flash('flash_message_important',true);
        return redirect()->action('AdminProductController@indexAccount');
    }
}
