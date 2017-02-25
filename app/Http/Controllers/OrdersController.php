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
            return $item->qty;
          }else{
            Cart::add($product_id, $product->name, 1, $product->priceBrutto,['thumb'=> $product->thumb]);
            return '0';
          }
        }
      }else{
        Cart::add($product_id, $product->name, 1, $product->priceBrutto,['thumb'=> $product->thumb]);
        return '0';
      }
      //Cart::destroy();
      return 'Error in adding product';
    }

    public function removeFromCart($product_id){
    $product=products::find($product_id);
    $cartItems=Cart::content();
    if(Cart::count() > 0){
      foreach($cartItems as $item){
        if($item->id == $product_id){
          $cartItem=Cart::get($item->rowId);
          if($cartItem->qty>1){
            Cart::update($item->rowId, $item->qty-1);
            return '';
          }else{
            Cart::remove($item->rowId);
            return '';
          }
          return '';
        }
      }
    }
    return 'ERROR: FAILED REMOVING PRODUCT';
  }
}
