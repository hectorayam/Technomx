<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;




use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function shop(){
        $products =  Product::all();
        $categories = Category::all();
        return view('shop',compact('products','categories'));
    }


    public function auth(User $user){

        $user=auth()->user()->id;
        $orders = Order::join('users','users.id','=','orders.user_id')
        ->where('orders.user_id','=',$user)
        ->select('orders.*')
        ->get();
        
        return view('profile', compact('user','orders'));
     
       
     }

     public function change(Request $request, User $user)
     {
         $request->validate([
             'name' => 'required|max:20',
             'email' => 'required|email',
             
         ],
         ['name.required' => 'EL campo nombre es obligatorio',
         'name.max' => ' El campo nombre debe ser menor a 10',
         'password.min' => 'El campo constraseña debe ser mayor a 8 caracteres',
         'password.max' => 'El campo contraseña no puede ser mayor a 10 caracteres',
         'telefono.required' => 'El campo telefono es obligatorio',
         'telefono.min' => 'El campo telefono debe ser mayor a 10 caracteres'
      ]);
         $data=$request->only('name','email');
 
        $password=$request->input('password');
        if($password)
         $data['password']=bcrypt($password);
         $user->update($data);
       
         return redirect()->back();
     }
    
     public function menu(){
        $categories =Category::all()->paginate(3);

        return view('layout.nav',compact(''));
     }
}
