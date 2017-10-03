<?php

namespace App\Http\Controllers;
use App\Personal;
use App\Product;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use Carbon\Carbon;
use App\Http\Requests\PersonalRequest;
use App\Http\Requests\ResetRequest;
use Hash;



class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$allAccount = User::all();
        $allproducts= DB::select("SELECT * FROM products order by id desc limit 8");

        return view('home.index',array('products'=> $allproducts ));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.insert');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    public function store(PersonalRequest $request)
    {

        $personal = new Personal;
        $date= Carbon::now();
        $personal->date = $date;
        $personal->id = $request->input('id');
        $personal->fullname = $request->input('fullname');
        $personal->address = $request->input('address');
        $personal->phonenumber = $request->input('phonenumber');
        $personal->jop = $request->input('jop');
        $personal->save();


        return redirect()->action('HomeController@index');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
      //  echo'di';die();
         $id=  Auth:: user()->id;
         $users = DB::table('users')
        ->join('personals', 'users.id', '=', 'personals.id')
        ->where('users.id','=',$id)
         ->first();
        return view('home.personal', compact('users'));
    }
    public function reset()
    {

        return view('home.reset');
    }

    public function passwordupdate(ResetRequest $request)
    {
        $id = $request->input('id');
        $user = User::find($id);
        if( is_null($user))
        {
            dd($id);
        }
        $date= Carbon::now();
        $user->updated_at = $date;
       // $pass= $user->password;
       // $oldpass = Hash::make($request->input('password'));
       // echo $oldpass;
      //  echo '_________';
       // echo $pass;die();

        // trùng password cũ và password mới
        if (Hash::check($request->input('passwordnew'),$user->password)) {
            \Session::flash('flash_message','pass mới và pass cũ giống nhau ');
            \Session::flash('flash_message_important',true);
            return view('home.reset');
        }

        //pass mới và pass confirm không giống
        if( $request->input('passwordnew') != $request->input('passconfirm') )
        {
            \Session::flash('flash_message','pass mới và pass xác nhận không trùng khớp ');
            \Session::flash('flash_message_important',true);
            return view('home.reset');
        }

        //Kiểm tra pass cũ và pass trong database có trùng khớp
        if (Hash::check($request->input('passwordold'),$user->password)) {
            $user->password = Hash::make($request->input('passwordnew'));
            //update ket qua
            $user->update();
            return redirect()->action('HomeController@index');
        }
        else
        {
            \Session::flash('flash_message','pass bạn nhập không đúng');
            \Session::flash('flash_message_important',true);
            return view('home.reset');
        }

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonalRequest $request)
    {
        //update table personal
        $allproducts= DB::select("SELECT * FROM products order by id desc limit 3");
         $id = $request->input('id');
        $personal = Personal::find($id);
        if( is_null($personal))
        {
            dd($id);
        }
        $date= Carbon::now();
        $personal->date = $date;
        $personal->fullname = $request->input('fullname');
        $personal->address = $request->input('address');
        $personal->phonenumber = $request->input('phonenumber');
        $personal->jop = $request->input('jop');
        //update ket qua
        $personal->update();
        //update table user
       //return view('home.index',array('products'=> $allproducts ));
        return redirect()->action('HomeController@index',array('products'=> $allproducts ));
    }
    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {

    }
}
