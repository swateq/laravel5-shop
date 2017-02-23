<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\products;

use Cart;

class OrdersController extends Controller
{
    public function addToCart($product_id){
      $product=products::find($product_id);
      $cartItems=Cart::content();
      if(Cart::count() > 0){
        foreach($cartItems as $item){
          if($item->id == $product_id){
            Cart::update($item->rowId, $item->qty+1);
          }else{
            Cart::add($product_id, $product->name, 1, $product->priceBrutto,['thumb'=> $product->thumb]);
          }
        }
      }else{
        Cart::add($product_id, $product->name, 1, $product->priceBrutto,['thumb'=> $product->thumb]);
      }
      //Cart::destroy();
      return Cart::count();
    }

  public function removeFromCart($product_id){
    $product=products::find($product_id);
    $cartItems=Cart::content();
    if(Cart::count() > 0){
      foreach($cartItems as $item){
        if($item->id == $product_id){
          Cart::remove($item->rowId);
          return 'removed';
        }
      }
    }
        return 'failed';

  }
}
