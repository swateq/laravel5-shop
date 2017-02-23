<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\podstrony;
use App\Products;
use App\modules;
use App\page_modules;
use App\shops;
use Response;


class PageController extends Controller
{

    public function adminPage($id){
  		$podstrony=podstrony::all();
  		$pageContent=podstrony::find($id);
      return View('admin.page')->with(['podstrony'=>$podstrony])->with(['pageContent'=>$pageContent]);;
    }

    public function getShop($shop_id){
       $shop = shops::find($shop_id);
       return Response::json($shop);
    }

    public function showPage($name){
        $podstrony=podstrony::all();
        $sklepy=shops::all();

        $podstrona = DB::table('podstrony')
                ->select('*')
                ->where('name', $name)
                ->get();

        switch($name){
            case 'main_page':
                $slider = DB::table('modules')
                ->select('*')
                ->where('module_name', 'Slider 1')
                ->get();
                $sliderImgs=explode(" ",$slider[0]->module_content);
                $products=Products::all();
                return View('main_page')
                ->with(['content'=>'strona glowna'])
                ->with(['podstrony'=>$podstrony])
                ->with(['products'=>$products])
                ->with(['sliderImgs'=>$sliderImgs])
                ->with(['sklepy'=>$sklepy])
                ;
            break;
            case 'kontakt':
                return View('static.kontakt')
                ->with(['content'=>$podstrona[0]->content])
                ->with(['podstrony'=>$podstrony])
                ->with(['sklepy'=>$sklepy]);
            break;
        }
    }

}
