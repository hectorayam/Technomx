<?php

namespace App\Http\Controllers;

use App\Mail\MessageOrder;
use Illuminate\Support\Facades\Mail;


use Illuminate\Http\Request;

class MessagesController extends Controller
{
    //

    public function store(Request $request){
      $usermail = auth()->user()->email;
      $userID = auth()->user()->id;
      $username = auth()->user()->name;
      $request->name = auth()->user()->name;
      $request->total = \Cart::session($userID)->getTotal();
      if($request->input('shipping')==true){
        $shipping = "1";
      }else{
          $shipping ="0";
      }
      $request->shipping = $shipping;
      
        $message = $request->shipping;
   
        Mail::to($usermail)->queue(new MessageOrder($message));
     
      app(OrderController::class)->store($request);
      return redirect()->route('perfil',$username);
    }
}
