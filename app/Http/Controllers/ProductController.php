<?php

namespace App\Http\Controllers;

use App\Product;
use App\Comment;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Database\Eloquent\Collection;
use Carbon\Carbon;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

       //find nang cao + find don gian
       $key = isset($_GET['search']) ? $_GET['search'] : '';
       $price1 = isset($_GET['price1']) ? $_GET['price1'] : '';
       $id = isset($_GET['id']) ? $_GET['id'] : '';
       $name_sp = isset($_GET['name_sp']) ? $_GET['name_sp'] : '';
       $type = isset($_GET['type']) ? $_GET['type'] : '';
        if( $key != '')
        {
            $allProduct = DB::table('products')
                ->where('name', 'LIKE', '%' . $key . '%')
                ->paginate(8);

            $allProduct->appends(array(
                'search' => $key,
            ));

          /*  $allProduct = DB::table('products')
                ->where('name', 'LIKE', '%' . $key . '%')
                ->orWhere('price1', '=', $price1)
                ->orWhere('id', '=',$id)
                ->orWhere('type', 'Like',  $type)
                ->paginate(6);

            $allProduct->appends(array(
                'search' => $key,
            ));*/
        }
       else if($name_sp != '' and $price1 != '' and $id != '' and $type != '')
        {
            $allProduct = DB::table('products')
                ->join('typemarchandises', 'products.type', '=', 'typemarchandises.id')
                ->where('products.name', 'LIKE', '%' . $name_sp . '%')
                ->where('products.price1', '=', $price1)
                ->Where('products.id', '=',$id)
                ->Where('typemarchandises.name', 'Like',  $type)
                ->select('products.*')
                ->paginate(8);
            $allProduct->appends(array(
                'name_sp' => $name_sp,
                'price1' => $price1,
                'id' => $id,
                'type' => $id,

            ));
        }
        else if($name_sp != '' and $price1 != '' and $id != '' )
        {
            $allProduct = DB::table('products')
                ->join('typemarchandises', 'products.type', '=', 'typemarchandises.id')
                ->where('products.name', 'LIKE', '%' . $name_sp . '%')
                ->where('products.price1', '=', $price1)
                ->Where('products.id', '=',$id)
                ->select('products.*')
                ->paginate(8);

            $allProduct->appends(array(
                'name_sp' => $name_sp,
                'price1' => $price1,
                'id' => $id,
            ));
        }
        else if($name_sp != '' and $price1 != '' and $type != '' )
        {
            $allProduct = DB::table('products')
                ->join('typemarchandises', 'products.type', '=', 'typemarchandises.id')
                ->where('products.name', 'LIKE', '%' . $name_sp . '%')
                ->where('products.price1', '=', $price1)
                ->Where('typemarchandises.name', 'Like',  $type)
                ->select('products.*')
                ->paginate(8);

            $allProduct->appends(array(
                'name_sp' => $name_sp,
                'price1' => $price1,
                'type' => $type,
            ));
        }
        else if($name_sp != '' and $price1 != '')
        {
            $allProduct = DB::table('products')
                ->join('typemarchandises', 'products.type', '=', 'typemarchandises.id')
                ->where('products.name', 'LIKE', '%' . $name_sp . '%')
                ->where('products.price1', '=', $price1)
                ->select('products.*')
                ->paginate(8);
            $allProduct->appends(array(
                'name_sp' => $name_sp,
                'price1' => $price1,
            ));
        }
        else if($name_sp != '')
        {
            $allProduct = DB::table('products')
                ->where('name', 'LIKE', '%' . $name_sp . '%')
                ->paginate(8);
            $allProduct->appends(array(
                'name_sp' => $name_sp,
            ));
        }

        else  if($price1 != '')
        {
            $allProduct = DB::table('products')
                ->where('price1', '=', $price1)
                ->paginate(8);

            $allProduct->appends(array(
                'price1' => $price1,
            ));
        }
        else if( $id != '')
        {
            $allProduct = DB::table('products')
                ->Where('id', '=',$id)
                ->paginate(8);

            $allProduct->appends(array(
                'id' => $id,
            ));
        }
        else if( $type != '')
        {
            $allProduct = DB::table('products')
                ->join('typemarchandises', 'products.type', '=', 'typemarchandises.id')
                ->Where('typemarchandises.name', 'Like', '%' . $type . '%')
                ->select('products.*')
                ->paginate(8);
           // $allProduct = DB::table('products')
            //    ->Where('type', 'Like',  $type)
           //     ->paginate(6);
            $allProduct->appends(array(
                'type' => $type,
            ));
        }
        else
        {
            $allProduct = DB::table('products')->paginate(8);
        }
        return view('products.index', array('products' => $allProduct));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        echo"chau binh luan";die();
    }

    public function create()
    {
      //  echo"chau binh luan";die();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    public function store(Request $request)
    {
        $date= Carbon::now();
        $comment = new Comment;
        $comment->date = $date;
        $comment->id = $request->input('id');
        $comment->name = $request->input('name');
        $comment->comment = $request->input('text');
        $comment->save();
       return redirect()->action('ProductController@index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function advancefind()
    {

        return view('home/personalform');
    }
    public function show($id)
    {

        $similarProduct= DB::select("SELECT * FROM goodshop.products order by price1 desc limit 3");
        $product = Product::find($id);
        $countaccess = DB::table('products')
            ->where('id', $id)
            ->value('countaccess');
        $countaccess=$countaccess+1;
        //update
        DB::table('products')
            ->where('id', $id)
            ->update(['countaccess' => $countaccess]);
        $comments =Comment::where('id','=',$id)->paginate(8);
        return view('products.show',
            array('product' => $product,'similarProduct' => $similarProduct,'comments' => $comments,'countaccess' => $countaccess));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request,$id)
    {


    }
    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {

    }
}
