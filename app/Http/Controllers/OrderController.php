<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Status;

use Illuminate\Http\Request;



class OrderController extends Controller
{

    public function index(){

        $orders = Order::all();
      
        return view('order.index',compact('orders'));
    }

    public function show($id){

        $order = Order::find($id);
      

        return view('order.show',compact('order'));
    }
    
    public function store(Request $request){
        $userID = auth()->user()->id;
        $username = auth()->user()->name;
        $order = new Order;
        $order->name = $request->name;
        $order->user_id = $userID ;
        $order->status_id = 1;
        $order->total = $request->total;
        $order->shipping = $request->shipping;
        $order->save();

        if($userID){
        $cartCollection = \Cart::session($userID)->getContent();
        foreach($cartCollection  as $item){
            OrderItem::create([
                'order_id'=>$order->id,
                'product_id'=>$item->id,
                'quantity'=>$item->quantity,
                'price'=>$item->price*$item->quantity,
            ]);
        }
        app(CartController::class)->clear();
    }else
    {
        return view('login');
    }
    return redirect()->route('cart.index');    
}

    public function edit(Order $order){
    
        $statuses = Status::all()->except($order->status->id);

        return view('order.edit', compact('order','statuses'));
    }

    public function update(Request $request, Order $order){

        $order->status_id = $request->status_id;

        if($request->input('shipping')==true){
            $order->shipping = "1";
        }else{
            $order->shipping ="0";
        }
        $order->update();



       
          return redirect()->route('order.index');
    }

    public function destroy(Order $order)
        {
            $order->delete();

            return back();
        }

        public function delete(OrderItem $orderitem)
        {
            $orderitem->delete();

            return back();
        }
}
