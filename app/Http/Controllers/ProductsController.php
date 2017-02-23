<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Input;
use App\Http\Requests;
use App\Products;
use App\podstrony;
use App\categories;
use App\shops;
use Response;

class ProductsController extends Controller
{
    public function index(){
    	$products=Products::paginate(10);
		$podstrony=podstrony::all();
		$categories=categories::all();
		return view('admin.products',['products'=>$products])->with(['podstrony'=>$podstrony])->with(['categories'=>$categories]);
		}

	public function insertform(){
		return view('admin.addProduct');
	}

	public function addProduct(Request $request){
     dd($request->input());
		$new_product= new Products;
		$new_product->$name = Input::get('productName');
		$new_product->$seolink = Input::get('productsCode');
		$new_product->$description = Input::get('productsDesctiption');
		$new_product->$pricePromo = Input::get('pricePromo');
		$new_product->$priceBrutto = Input::get('priceBrutto');
		/*$promotion = $request->input('promotion');
				DB::table('products')->insertGetId(
  				  ['name' => $name,
  				   'seolink' => $seolink,
  				   'pricePromo' =>$pricePromo,
  				   'priceBrutto' => $priceBrutto,
  				   'active' =>$active,
  				   'promotion' => $promotion,
  				   'thumb' =>$seolink .'_(1).jpg']
			);*/
		$new_product->save();
		echo "Record inserted successfully.<br/>";
		echo '<a href="/laravel5-learning/public/products">Click Here</a> to go back.';
		}

		public function showProduct($seolink)
		{
			$product=Products::where('seolink',$seolink)->first();
			$podstrony=podstrony::all();
      $sklepy=shops::all();
			return view('showProduct',['product'=>$product])->with(['podstrony'=>$podstrony])->with(['sklepy'=>$sklepy]);
		}

		public function deleteProduct($product_id)
		{
			$product=Products::find($product_id);
			$product->delete();
			return "true";
		}

		public function editProduct(Request $request,$product_id)
		{
			$product = Products::find($product_id);
		    $product->name = $request->name;
		    $product->description = $request->description;

		    $product->save();

		    return "true";
		}

		public function getProduct($product_id){
			 $product = Products::find($product_id);

   			 return Response::json($product);
		}
}
