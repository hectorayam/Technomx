<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Models\Category;

class Menu
{
    /**
     * Register services.
     *
     * @return void
     */
    public function compose(View $view )
    {
        $menu = Category::all();
        
                        
       
        $view->with('menu',$menu);
    }

    public function find($id)
    {
        $category = Category::find($id);
        return view('find',compact('category'));
    }
}