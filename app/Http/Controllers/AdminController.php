<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\users;
use App\podstrony;
use App\orders;

class AdminController extends Controller
{

    public function index(){
		$podstrony=podstrony::all();
		$ostatnie_produkty=DB::table('products')->orderBy('id', 'desc')->take(5)->get();
		$ostatnie_zamowienia=DB::table('orders')->orderBy('id', 'desc')->take(5)->get();
		$orders=DB::table('orders')->get();
		$orders_today=0;
		$users_today=0;
		foreach($orders as $order)
		{
			if(strcmp(substr($order->created_at,0,10),date('Y-m-d'))!==-1)
			{
				$orders_today++;
			}
		}
		$users=DB::table('users')->get();
		foreach($users as $user)
		{
			if(strcmp(substr($user->created_at,0,10),date('Y-m-d'))!==-1)
			{
				var_dump(strcmp(substr($user->created_at,0,10),date('Y-m-d')));
				$users_today++;
			}
		}
		return view('admin.index')
		->with(['podstrony'=>$podstrony])
		->with(['orders_today'=>$orders_today])
		->with(['users_today'=>$users_today])
		->with(['ostatnie_produkty'=>$ostatnie_produkty])
		->with(['ostatnie_zamowienia'=>$ostatnie_zamowienia]);
	}

	public function users(){
		$podstrony=podstrony::all();
		$users=users::all();
		return view('admin.users')->with(['users'=>$users])->with(['podstrony'=>$podstrony]);;
	}

	public function menu(){
		$podstrony=podstrony::all();
		return view('admin.includes.menu')->with(['podstrony'=>$podstrony]);;
	}

	public function page($id){
		$podstrony=podstrony::find($id);
		echo 'strona '.$podstrony->name;
	}


	public function getLogout(){
        Auth::logout();
        Session::flush();
        return Redirect::to('/');
    }
}
