<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\products;
use App\podstrony;
use App\shops;

use \Cart as Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=products::all();
        $podstrony=podstrony::all();
        $sklepy=shops::all();
        return view('main_page')->with(['products'=>$products])->with(['podstrony'=>$podstrony])->with(['sklepy'=>$sklepy]);
    }

    public function cart()
    {
        $podstrony=podstrony::all();
        // Cart::add('293ad', 'Product 1', 1, 9.99);
        Cart::destroy();
        return view('cart')->with(['podstrony'=>$podstrony]);
    }

    public function cartCookie($id){
         return response('$value')->withCookie(cookie('test', $id, 60));
    }
}
