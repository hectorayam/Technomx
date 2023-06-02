<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;



use Illuminate\Http\Request;

class CategoryController extends Controller
{
   
    public function index(){

        $categories =  Category::all();

        return view('categories.index',compact('categories'));
    }
    
    public function create()
    {
        
        return view('categories.create');
    }

    public function store(Request $request){
        $request->validate([
              'name' => 'required',
            ],
              [
                'name.required' => 'El campo nombre no puede estar vacio',
                'price.required' => 'El campo descripcion no puede estar vacio',
            ]);

        $sb = new Category;
        $sb->name =  $request->name;
    
        $sb->save();

        return redirect()->back()->with('succes','Tarea creada correctamente');
    }

    public function edit(Category $category){
        
        
        return view('categories.edit', compact('category'));

       
    }

    public function update(Request $request, Category $category){

        $category->name = $request->name;
        $category->update();
    
        return redirect()->route('category.index');
    }


    public function destroy(Category $category)
        {
            $category->delete();

            return back();
        }

}
