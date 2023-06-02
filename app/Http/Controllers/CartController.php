<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function shop()
    {
        $products = Product::all();
       
        return view('shop')->with(['products' => $products]);
    }
    
    public function cart()  {
        $userID = Auth::id();
        
        if(is_null($userID)){
            return redirect()->route('login');
        }
        else{
            $cart = \Cart::session($userID)->getContent();
            $cartCollection = $cart->sort();
            return view('cart')->with(['cartCollection' => $cartCollection]);
        }
    }

    public function remove(Request $request){

        $userID = auth()->user()->id;
        \Cart::session($userID)->remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Producto eliminado');
    }

    public function add(Request $request){

        $userID = Auth::id();
        
        if(is_null($userID)){
            return redirect()->route('login');
        }
        else{
            \Cart::session($userID)->add(array(
                'id' => $request->id,
                'name' => $request->name,
                'price' => $request->price,
                
                'quantity' => $request->quantity,
                'attributes' => array(
                    'image'=> $request->img,
                )

                
            ));
            return redirect()->back();
        }
    }

    public function update(Request $request){
        $userID = auth()->user()->id;
        \Cart::session($userID)->update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Carrito actualizado!');
    }

    public function clear(){
        $userID = auth()->user()->id;
        \Cart::session($userID)->clear();
        return redirect()->route('cart.index')->with('success_msg', 'Carrito eliminado');
    

    }

}


